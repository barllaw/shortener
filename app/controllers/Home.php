<?php

class Home extends Controller
{
    public function index()
    {

        $userModel = $this->model('UserModel');
        $linkModel = $this->model('LinkModel');
        $postbackModel = $this->model('PostbackModel');

        $today = date("d.m");
        

        $data = [
            'links' => $linkModel->getLinks($_COOKIE['login']),
            'mainlinks' => $linkModel->getMainlinks(),
            'user' => $userModel->getUser(),
            'users_links' => $linkModel->getUsersLinks($userModel->getAllUsers()),
            'stats' => $userModel->getStatistics($_COOKIE['login'], $today),
            'users_profit' => $userModel->getUsersStatistics($userModel->getAllUsers()),
            'settings' => $userModel->getUserSettings(),
            'profit_week' => $userModel->getProfitCurrentWeek(),
            'users_profit_week' => $userModel->getUsersProfitCurrentWeek($userModel->getAllUsers()),
        ];

        $this->view('home/index', $data);
    }
}