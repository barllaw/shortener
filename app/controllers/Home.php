<?php

class Home extends Controller
{
    public function index()
    {

        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');
        $postbackModel = $this->model('PostbackModel');


        $data = [
            'links' => $linkModel->getLinks(),
            'mainlinks' => $linkModel->getMainlinks(),
            'user' => $userModel->getUser(),
            'users_links' => $linkModel->getUsersLinks($userModel->getAllUsers()),
            'stats' => $userModel->getStatistics($_COOKIE['login'], true),
            'users_profit' => $userModel->getUsersStatistics($userModel->getAllUsers()),
            'settings' => $userModel->getUserSettings(),
        ];

        $this->view('home/index', $data);
    }
}