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

        

        $nickname = trim($_POST['nickname']);
        $custom_link = $_POST['custom_link'];
        $domain = $_POST['domain'];
        $login = $_COOKIE['login'];
        $geo = $_POST['geo'];
        

        $linkModel->shortenLink( $link, $nickname, $custom_link, $domain, $login, $geo );
        
        $userModel->updateCountLinks();
    
        exit(header('location: /'));
    
    }

    public function saveLink()
    {
        $linkModel = $this->model('LinkModel');

        $link_name = $_POST['link_name'];
        $link_textarea_save = $_POST['link_textarea_save'];

        if($link_name == ''){
            $this->view('home/index');
        }

        $linkModel->saveMainlink( $link_textarea_save, $link_name );
        
        exit(header('location: /'));
    }

    public function delete($id)
    {
        $linkModel = $this->model('LinkModel');

        $linkModel->deleteMainlink($id);

        exit(header('location: /'));
    }

    public function update($param)
    {
        $linkModel = $this->model('LinkModel');

        exit(header('location: /'));
    }

}