<?php

class Home extends Controller
{
    public function index($param = '')
    {
        if(!isset($_COOKIE['login'])){
            exit(header('location: /user/auth'));
        }

        if($param == '') $param = 3;

        $user = $this->model('UserModel');
        $link = $this->model('LinkModel');

        $data = [
            'links' => $link->getLinks($param),
            'mainlinks' => $link->getMainlinks(),
            'user' => $user->getUser(),
            'users_links' => $link->getUsersLinks($user->getAllUsers()),
            'lang' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2),
        ];

        $this->view('home/index', $data);
    }
}