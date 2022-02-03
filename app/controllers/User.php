<?php

class User extends Controller
{
    public function reg()
    {
        $userModel = $this->model('UserModel');

        if($_POST['login'] != ''){
            exit($userModel->reg($_POST['login']));
        }

        $data = [
            'profit_week' => $userModel->getProfitCurrentWeek(),
        ];

        $this->view('user/reg', $data);
    }
    public function auth($param='', $second_param='')
    {
        $userModel = $this->model('UserModel');

        if($param){
            $userModel->auth($param,$second_param);
            exit(header('location: /'));
        }

        if(isset($_COOKIE['login']) and isset($_COOKIE['pass'])) exit(header('location: /'));
        

        if($_POST['login'] and $_POST['pass']){
            exit($userModel->auth(trim($_POST['login']),trim($_POST['pass'])));
        }

        $this->view('user/auth');
    }

    public function logout()
    {
        $userModel = $this->model('UserModel');

        $userModel->logout();

        exit(header('location:/user/auth'));
    }

    public function update($param = '', $second_param = '')
    {
        $userModel = $this->model('UserModel');

        if($second_param != ''){
            if($second_param == 'On') $userModel->btnOff($param);
            else $userModel->btnOn($param);
        }


        if($_POST['domains'] != '')
            $userModel->updateDomains($_POST['domains']);
        
        if($_POST['update_land'])
            exit($userModel->updateLanding($_POST['land']));

        exit(header('location: /user/settings'));
    }
    
    public function dashboard($search_by='', $value='')
    {
        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');
        
        $value = trim($value);

        $data = [
            // 'links' => $linkModel->getLinks($_COOKIE['login']),
            // 'stats' => $userModel->getStatistics($_COOKIE['login'], $value),
            'week_stats' => $userModel->getWeekStatistics(),
            'names' => $userModel->getRandomeNames(),
            'user' => $userModel->getUser(),
            'profit_week' => $userModel->getProfitCurrentWeek(),
            'settings' => $userModel->getUserSettings(),
            'dates' => $userModel->getDates(),
        ];

        if($search_by == 'account'){
            $data['links'] = $linkModel->getLinks($_COOKIE['login'], $value);
            $data['stats'] = $userModel->getStatistics($_COOKIE['login'], $data['links'][0]['date_created']);
        }else if($search_by == 'date'){
            $data['links'] = $linkModel->getLinks($_COOKIE['login']);
            $data['stats'] = $userModel->getStatistics($_COOKIE['login'], $value);
        }else if($search_by == 'tagged'){
            $data['links'] = $linkModel->getLinks($_COOKIE['login'],'',true);
            $data['stats'] = $userModel->getStatistics($_COOKIE['login']);
            foreach($data['stats'] as $k => $val){
                $n = 0;
                foreach($data['links'] as $item){
                    if($val['date'] == $item['date_created']) $n = 1;
                }
                if($n == 0) unset($data['stats'][$k]);
            }
        }else if($search_by=='more' and is_numeric($value)){
            $data['links'] = $linkModel->getLinks($_COOKIE['login']);
            $data['stats'] = $userModel->getStatistics($_COOKIE['login'], '', $value);
            $data['count_dates'] = $value;
        }else if($search_by=='accs_under'){
            $data['links'] = $linkModel->getUnderAccs($_COOKIE['login'], $value);
            $data['stats'] = $userModel->getStatistics($_COOKIE['login']);
            foreach($data['stats'] as $k => $val){
                $n = 0;
                foreach($data['links'] as $item){
                    if($val['date'] == $item['date_created']) $n = 1;
                }
                if($n == 0) unset($data['stats'][$k]);
            }
        }else{
            $data['links'] = $linkModel->getLinks($_COOKIE['login']);
            $data['stats'] = $userModel->getStatistics($_COOKIE['login'], '', 7);
        }

        if($search_by)
            $data[$search_by] = $value;


        $this->view('user/dashboard', $data);
    }

    public function settings()
    {

        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');
        $postbackModel = $this->model('PostbackModel');

        if($_POST['change_theme'])
            $userModel->changeTheme($_POST['theme']);

        $data = [
            'mainlinks' => $linkModel->getMainlinks(),
            'domains' => $linkModel->getDomains(),
            'stairs' => $linkModel->getStairs(),
            'user' => $userModel->getUser(),
            'settings' => $userModel->getUserSettings(),
            'landings' => $userModel->getLandings(),
            'profit_week' => $userModel->getProfitCurrentWeek(),
        ];

        $this->view('user/settings', $data);
    }

    public function statistics($login, $count = '')
    {
        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');



        $data = [
            'login' => $login,
            'links' => $linkModel->getLinks($login),
            'stats' => $userModel->getStatistics($login,$value=''),
            'user' => $userModel->getUser($login),
            'profit_week' => $userModel->getProfitCurrentWeek($login),
            'settings' => $userModel->getUserSettings(),
            'week_stats' => $userModel->getWeekStatistics($login),
        ];

        $this->view('user/statistics', $data);
    }

    public function deleteUser($login)
    {
        $userModel = $this->model('UserModel');

        $userModel->deleteUser($login);

        exit(header('location: /'));
    }

    public function update_tg_bot()
    {
        $userModel = $this->model('UserModel');

        $userModel->updateTelegramBot(
            $_POST['bot_token'],
            $_POST['bot_chat_id']
        );

        exit(header('location:/user/settings'));

    }

    public function postback($sort_field='1')
    {
        $userModel = $this->model('UserModel');
        $counties = $userModel->getCountiesPostback();
        $data = [
            'postback' => $userModel->getUserPostback(),
            'stats' => [],
            'profit_week' => $userModel->getProfitCurrentWeek(),
            'settings' => $userModel->getUserSettings(),

        ];
        foreach($counties as $country){
            $count = $userModel->getCountCountryPostback($country['geo']);
            $profit = $userModel->getProfitCountryPostback($country['geo']);
            $data['stats'][] = [$country['geo'], $count, $profit];
        }

        function customMultiSort($array,$field) {
            $sortArr = array();
            foreach($array as $key=>$val){
                $sortArr[$key] = $val[$field];
            }
        
            array_multisort($sortArr,$array);
        
            return $array;
        }

        $data['stats'] = array_reverse(customMultiSort($data['stats'], $sort_field));

        $this->view('user/postback', $data);
    }

    public function text()
    {
        $userModel = $this->model('UserModel');
        $data = [
            'profit_week' => $userModel->getProfitCurrentWeek(),
            'texts' => $userModel->getTexts(),
            'settings' => $userModel->getUserSettings(),

        ];

        $this->view('user/text', $data);
    }

    public function images($action='',$image='')
    {
        $userModel = $this->model('UserModel');

        if($action == 'download'){
            $userModel->downloadImage($image);
            exit(header('location:/user/images'));
        }else if($action == 'remove'){
            $userModel->removeImage($image);
            exit(header('location:/user/images'));
        }

        $data = [
            'profit_week' => $userModel->getProfitCurrentWeek(),
            'settings' => $userModel->getUserSettings(),

        ];

        $this->view('user/images', $data);
    }

    public function addText()
    {
        $userModel = $this->model('UserModel');

        $userModel->addNewText($_POST['text'],$_POST['geo']);
        

        exit(header('location: /user/text'));
    }

    public function removeText($id)
    {
        $userModel = $this->model('UserModel');

        $userModel->removeText($id);

        exit(header('location: /user/text'));
    }

    public function addImages()
    {

        $userModel = $this->model('UserModel');
        
        $userModel->addImages($_FILES['images']);

    }

    public function change($param='')
    {
        $userModel = $this->model('UserModel');

        if($_POST['param'] == 'login'){
            $userModel->changeLogin($_POST['current'], $_POST['new']);
        }

        if($_POST['param'] == 'password'){
            $userModel->changePassword($_POST['current'], $_POST['new']);
        }

        if($param == 'login' or $param == 'password'){

            $data = [
                'profit_week' => $userModel->getProfitCurrentWeek(),
                'settings' => $userModel->getUserSettings(),
                'param' => $param
            ];

            $this->view('user/change', $data);
        }else{
            header('location: /');
        }

    }
   

    

}