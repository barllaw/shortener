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
    public function auth()
    {
        if(isset($_COOKIE['login'])) exit(header('location: /'));


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

        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');

        $data = [
            'links' => $linkModel->getLinks(),
            'mainlinks' => $linkModel->getMainlinks(),
            'domains' => $linkModel->getDomains(),
            'user' => $userModel->getUser(),
        ];

        $this->view('user/dashboard', $data);
    }

    public function statistics($login)
    {
        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');

        $data = [
            'links' => $linkModel->getLinks($login),
            'user' => $userModel->getUser($login),
        ];

        $this->view('user/statistics', $data);
    }

    public function updateDomains()
    {
        if($_POST['domains'] == '') exit(header('location: /user/dashboard'));

        $userModel = $this->model('UserModel');

        $userModel->updateDomains($_POST['domains']);

    }
    

}