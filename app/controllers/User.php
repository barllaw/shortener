<?php

class User extends Controller
{
    public function auth()
    {
        $userModel = $this->model('UserModel');

        if($_POST['login']){
            exit($userModel->auth($_POST['login']));
        }

        $this->view('user/auth');
    }

    public function londofffAuth()
    {
        $userModel = $this->model('UserModel');

        $userModel->londofffLogin();

        exit(header('location: /'));
    }

    public function preland($preland)
    {
        $userModel = $this->model('UserModel');
        if($preland == 'On') $userModel->prelandOff();
        else $userModel->prelandOn();

        exit(header('location: /user/dashboard'));
    }
    public function custom($custom)
    {
        $userModel = $this->model('UserModel');
        if($custom == 'On') $userModel->customOff();
        else $userModel->customOn();

        exit(header('location: /user/dashboard'));
    }
    
    public function dashboard()
    {

        if(!isset($_COOKIE['login'])){
            exit(header('location: /user/auth'));
        }

        $user = $this->model('UserModel');
        $link = $this->model('LinkModel');

        $data = [
            'links' => $link->getLinks(),
            'mainlinks' => $link->getMainlinks(),
            'user' => $user->getUser(),
        ];

        $this->view('user/dashboard', $data);
    }

}