<?php

class Home extends Controller
{
    public function index()
    {

        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');
        $postbackModel = $this->model('PostbackModel');

        $data = [
            'links' => $linkModel->getLinksToday(),
            'mainlinks' => $linkModel->getMainlinks(),
            'user' => $userModel->getUser(),
            'users_links' => $linkModel->getUsersLinks($userModel->getAllUsers()),
            'lang' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2),
            'profit' => $userModel->getProfit($_COOKIE['login']),
            'users_profit' => $userModel->getUsersStatistics($userModel->getAllUsers()),
        ];

        $this->view('home/index', $data);
    }
}