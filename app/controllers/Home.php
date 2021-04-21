<?php

class Home extends Controller
{
    public function index()
    {
        if(!isset($_COOKIE['login'])){
            exit(header('location: /user/auth'));
        }

        $user = $this->model('UserModel');
        $link = $this->model('LinkModel');

        $data = [
            'links' => $link->getLinksToday(),
            'mainlinks' => $link->getMainlinks(),
            'user' => $user->getUser(),
            'users_links' => $link->getUsersLinks($user->getAllUsers()),
            'lang' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2),
        ];

        $this->view('home/index', $data);
    }
    public function landing()
    {
        $this->view('new_land/index');
    }
}