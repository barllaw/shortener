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
        if($preland == 'On') $userModel->offPreland();
        else $userModel->onPreland();

        exit(header('location: /'));
    }
    
    public function dashboard()
    {
        $this->view('user/dashboard');
    }

}