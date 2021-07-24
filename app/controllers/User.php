<?php

class User extends Controller
{
    public function reg()
    {
        $userModel = $this->model('UserModel');

        if($_POST['login'] != ''){
            exit($userModel->reg($_POST['login']));
        }

        $this->view('user/reg');
    }
    public function auth($param = '')
    {
        $userModel = $this->model('UserModel');

        if($param == 'login_londofff'){
            $userModel->londofffLogin();
            exit(header('location: /'));
        }

        if(isset($_COOKIE['login'])) exit(header('location: /'));
        

        if($_POST['login']){
            exit($userModel->auth($_POST['login']));
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
    
    public function dashboard()
    {
        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');
        $postbackModel = $this->model('PostbackModel');
        
        $data = [
            'links' => $linkModel->getLinks(),
            'stats' => $userModel->getStatistics($_COOKIE['login']),
            'names' => $userModel->getRandomeNames(),
            'user' => $userModel->getUser(),
            'profit_week' => $userModel->getProfitCurrentWeek(),
        ];
        
        $this->view('user/dashboard', $data);
    }

    public function settings()
    {

        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');
        $postbackModel = $this->model('PostbackModel');

        $data = [
            'mainlinks' => $linkModel->getMainlinks(),
            'domains' => $linkModel->getDomains(),
            'stairs' => $linkModel->getStairs(),
            'user' => $userModel->getUser(),
            'settings' => $userModel->getUserSettings(),
            'landings' => $userModel->getLandings(),
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
            'stats' => $userModel->getStatistics($login),
            'user' => $userModel->getUser($login),
        ];

        $this->view('user/statistics', $data);
    }

    public function deleteUser($login)
    {
        $userModel = $this->model('UserModel');

        $tables = [
            'links',
            'mainlinks',
            'postback',
            'settings',
            'stairs',
            'statistics',
            'users',
        ];
        
        $userModel->deleteUser($tables, $login);

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

    public function postback()
    {
        $userModel = $this->model('UserModel');
        $data = [
            'postback' => $userModel->getUserPostback(),
        ];

        $this->view('user/postback', $data);
    }

    

}