<?php

class Link extends Controller
{
    public function index()
    {
        exit(header('location: /'));
    }

    public function shorten()
    {        
        if ($_POST['link'] != '')            $link = preg_replace('/\s+/', '',  trim($_POST['link']));
        else if ($_POST['mainlink'] != '')   $link = preg_replace('/\s+/', '',  trim($_POST['mainlink']));
        else                                exit(header('location: /'));
        
        $linkModel = $this->model('LinkModel');
        $userModel = $this->model('UserModel');

        $user_settings = $userModel->getUserSettings();
        //Get stairs links
        $stairs_links = $linkModel->getStairs(" and `active` = '1' ");
        foreach($stairs_links as $el){
            $stairs .= ','.$el['smartlink'];
        }
        $stairs_links = substr($stairs, 1);
        $soft = '1';
        if($_POST['soft'] == '0'){
            $soft = '0';
        }
        $nickname = strtolower(trim($_POST['nickname']));
        $custom_link = $_POST['custom_link'];
        if($_POST['main_acc']) {$main_acc = $_POST['main_acc'];}
        else{$main_acc = '';}
        $service = $_POST['service'];
        $domain = $_POST['domain'];
        $login = $_COOKIE['login'];
        $geo = $_POST['geo'];
        $domains = $user_settings['domains'];
        if($user_settings['stairs'] == 'On' and $stairs != '')
            $stairs = true;
        else
            $stairs = false;
        $tag = ($_POST['tag']) ? 1 : 0;
        $linkModel->shortenLink( $soft, $link, $nickname, $custom_link, $main_acc, $service, $domain, $login, $geo, $domains, $stairs, $stairs_links, $tag );
        
        $userModel->updateCountLinks();
    
        exit(header('location: /'));
    
    }

    public function saveLink($param)
    {
        $linkModel = $this->model('LinkModel');

        if($_POST['link_save'] == '' and $_POST['link_name'] == ''){
            exit(header('location: /user/settings'));
        }

        if($param == 'mainlink')
            $linkModel->saveMainlink( $_POST['link_save'], $_POST['link_name'] );

        if($param == 'stairs_link')
            $linkModel->saveStairslink( $_POST['link_save'] );
        
        exit(header('location: /user/settings'));
    }

    public function delete($db, $id, $date='')
    {
        $referer = $_SERVER['HTTP_REFERER'];

        $linkModel = $this->model('LinkModel');

        $linkModel->deleteLink($db,$id,$date);

        exit(header('location: ' . $referer));
    }
    public function setDefault($id)
    {
        $linkModel = $this->model('LinkModel');

        $linkModel->setDefaultMainlink($id);

        exit(header('location: /user/settings'));
    }

    public function update($param)
    {
        $referer = $_SERVER['HTTP_REFERER'];

        $linkModel = $this->model('LinkModel');

        if($param == 'edit_link'){
            $linkModel->updateLink(preg_replace('/\s+/', '',  trim($_POST['link-for_edit'])), $_POST['edit_link_id']);
        }

        if($param == 'stairs'){
            $linkModel->inactiveStairs();
            $links = explode(',', $_POST['links']);
            foreach($links as $link){
                $linkModel->updateStairs($link);
            }
        }
        exit(header('location: ' . $referer));
    }
    public function domain()
    {

        $linkModel = $this->model('LinkModel');
        $userModel = $this->model('UserModel');

        if($_POST['domain']){
            $linkModel->addDomain($_POST['domain'], $_POST['users']);
        }

        $data = [
            'profit_week' => $userModel->getProfitCurrentWeek(),
            'settings' => $userModel->getUserSettings(),
        ];

        $this->view('link/domain', $data);
    }
    public function editAllLink()
    {
        $linkModel = $this->model('LinkModel');

        if($_POST['link']){
            $linkModel->changeUserAllLink($_POST['link']);
            exit(header('location: /'));
        }

        $this->view('link/edit_all', $data);

    }
    public function tag($tag,$id)
    {
        $linkModel = $this->model('LinkModel');

        $tag = ($tag == 'tag_0') ? 1 : 0;

        $linkModel->taggingLink($tag,$id);

        $referer = $_SERVER['HTTP_REFERER'];
        exit(header('location: ' . $referer));

    }
    // public function statistic($id_shortlink)
    // {
    //     $linkModel = $this->model('LinkModel');
    //     $userModel = $this->model('UserModel');
        
    //     $shortlink = $linkModel->getShortlinkDomain($id_shortlink);
    //     $visitors = $linkModel->getVisitorsOfShortlink($id_shortlink);
    //     $counties = $linkModel->getCountiesShortlink($id_shortlink);
    //     $stats = [];
    //     foreach($counties as $country){
    //         $count = $linkModel->getCountCountry($id_shortlink, $country['country']);
    //         $stats[$country['country']] = $count;
    //     }
    //     array_multisort($stats, SORT_DESC);

    //     $data = [
    //         'visitors' => $visitors,
    //         'stats' => $stats,
    //         'shortlink' => $shortlink[0]['shortlink'],
    //         'settings' => $userModel->getUserSettings(),
    //     ];

    //     $this->view('link/statistic', $data);

    // }
    

}