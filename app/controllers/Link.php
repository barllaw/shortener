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
        $nickname = strtolower(trim($_POST['nickname']));
        $custom_link = $_POST['custom_link'];
        $domain = $_POST['domain'];
        $login = $_COOKIE['login'];
        $geo = $_POST['geo'];
        $domains = $user_settings['domains'];
        if($user_settings['stairs'] == 'On' and $stairs != '')
            $stairs = true;
        else
            $stairs = false;
        $linkModel->shortenLink( $link, $nickname, $custom_link, $domain, $login, $geo, $domains, $stairs, $stairs_links );
        
        $userModel->updateCountLinks();
    
        exit(header('location: /'));
    
    }

    public function saveLink($param)
    {
        $linkModel = $this->model('LinkModel');

        if($_POST['link_save'] == '' and $_POST['link_name'] == ''){
            exit(header('location: /user/dashboard'));
        }

        if($param == 'mainlink')
            $linkModel->saveMainlink( $_POST['link_save'], $_POST['link_name'] );

        if($param == 'stairs_link')
            $linkModel->saveStairslink( $_POST['link_save'] );
        
        exit(header('location: /user/dashboard'));
    }

    public function delete($db, $id)
    {
        $linkModel = $this->model('LinkModel');

        $linkModel->deleteLink($db,$id);

        exit(header('location: /user/dashboard'));
    }
    public function setDefault($id)
    {
        $linkModel = $this->model('LinkModel');

        $linkModel->setDefaultMainlink($id);

        exit(header('location: /user/dashboard'));
    }

    public function update($param)
    {
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
        exit(header('location: /user/dashboard'));
    }
    public function domain()
    {

        $linkModel = $this->model('LinkModel');

        if($_POST['domain']){
            $linkModel->addDomain($_POST['domain']);
        }

        $this->view('link/domain');
    }
    public function statistics($id_shortlink)
    {
        $linkModel = $this->model('LinkModel');

        $visitors = $linkModel->getCountiesShortlink($id_shortlink);
        $stats = [];
        foreach($visitors as $visitor){
            $count = $linkModel->getCountCountry($id_shortlink, $visitor['country']);
            $stats[$visitor['country']] = $count;
        }
        array_multisort($stats, SORT_DESC);

        $data = [
            'stats' => $stats,
        ];

        $this->view('link/statistics', $data);

    }
    

}