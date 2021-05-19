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

    public function londofffAuth()
    {
        $userModel = $this->model('UserModel');

        $userModel->londofffLogin();

        exit(header('location: /'));
    }

    public function update($param, $second_param = '')
    {
        $userModel = $this->model('UserModel');

        if($second_param != ''){
            if($second_param == 'On') $userModel->btnOff($param);
            else $userModel->btnOn($param);
        }


        if($_POST['domains'] != '')
            $userModel->updateDomains($_POST['domains']);
        

        exit(header('location: /user/dashboard'));
    }
    
    public function dashboard()
    {

        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');
        $postbackModel = $this->model('PostbackModel');

        $data = [
            'links' => $linkModel->getLinks(),
            'mainlinks' => $linkModel->getMainlinks(),
            'domains' => $linkModel->getDomains(),
            'stairs' => $linkModel->getStairs(),
            'user' => $userModel->getUser(),
            'profit' => $userModel->getProfit(),
            'statistics' => $userModel->getAllProfit(),
        ];

        $this->view('user/dashboard', $data);
    }

    public function statistics($login, $count = '')
    {
        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');



        $data = [
            'links' => $linkModel->getLinks($login),
            'statistics' => $userModel->getAllProfit($login),
            'user' => $userModel->getUser($login),
        ];

        $this->view('user/statistics', $data);
    }

    

}