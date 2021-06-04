<?php 
class UserModel
{
    private $_db = null;
    public function __construct()
    {
            $this->_db = DB::getInstence();
    }
    public function auth($login)
    {
        $login = strtolower($login);
        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$login'");
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if($row != []){
            setcookie('login', $login, time() + 3600 * 24 * 7, '/');
            header('location: /');
        }else{
            header('location: https://dirtyflirt0.com/?utm_source=9KKcOEmIZeOF1&utm_campaign=lond&utm_term=LOGIN');
        }
    }

    public function reg($login)
    {
        $login = strtolower($login);
        $query = $this->_db->prepare("INSERT INTO users (login) VALUES (?) ");
        $query->execute([$login]);
        $query = $this->_db->prepare("INSERT INTO settings (login) VALUES (?) ");
        $query->execute([$login]);
        header('location: /user/auth');
    }

    public function getUser($login = '')
    {
        if($login == '') $login = $_COOKIE['login'];

        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$login'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUsers()
    {
        $query = $this->_db->query("SELECT `login` FROM `users`");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateCountLinks()
    {
        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$_COOKIE[login]'");
        $user = $query->fetch(PDO::FETCH_ASSOC);
        $count_links = $user['count_links'] + 1;

        $this->_db->query("UPDATE `users` SET `count_links` = '$count_links' WHERE `login` = '$_COOKIE[login]'");
    }

    public function londofffLogin()
    {
        setcookie('login', 'londofff', time() + 3600 * 24 * 7, '/');
    }

    public function btnOff($btn)
    {
        $query = $this->_db->prepare("UPDATE `settings` SET `$btn` = ? WHERE `login` = ? ");
        $query->execute([ 'Off', $_COOKIE['login']]);
        $this->_db->query("UPDATE `links` SET `next` = '0' WHERE `login` = '$_COOKIE[login]'");
    }

    public function btnOn($btn)
    {
        $query = $this->_db->prepare("UPDATE `settings` SET `$btn` = ? WHERE `login` = ? ");
        $query->execute([ 'On', $_COOKIE['login']]);
    }

    public function updateDomains($domains)
    {
        $this->_db->query("UPDATE `settings` SET `domains` = '$domains' WHERE `login` = '$_COOKIE[login]'");
    }
    public function updateTelegramBot($token, $chat_id)
    {
        $this->_db->query("UPDATE `settings` SET `bot_token` = '$token', `bot_chat_id` = '$chat_id' WHERE `login` = '$_COOKIE[login]'");
    }
    
    public function getProfit($login, $today = '')
   {
        $today = ($today) ? ' LIMIT 1'  : $today; 
        
        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$login' ORDER BY `id` DESC $today");
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $day) {
            $statistics[$day['date']] = $day['profit'];
        }
        return $statistics;
    }
    public function getRef($login, $today = '')
   {
        $today = ($today) ? ' LIMIT 1'  : $today; 
        
        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$login' ORDER BY `id` DESC $today");
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $day) {
            $statistics[$day['date']] = $day['ref'];
        }
        return $statistics;
    }

    public function getUsersStatistics($users)
    {
        $today = date("d.m");
        $profits = [];
        foreach ($users as $user) {
            $query = $this->_db->query("SELECT profit FROM `statistics` WHERE `date` = '$today' and `login` = '$user[login]'");
            $profit = $query->fetch(PDO::FETCH_ASSOC);
            $profits[$user['login']] = $profit['profit'];
        }
        
        return $profits;
    }

    public function getUserSettings($login = '')
    {
        if($login == '') $login = $_COOKIE['login'];
        $query = $this->_db->query("SELECT * FROM `settings` WHERE `login` = '$login'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserPostback()
    {
        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $d = mktime(00, 00, 00, $month, $day, $year);
        $query = $this->_db->query("SELECT * FROM `postback` WHERE `login` = '$_COOKIE[login]' and `date` >= '$d' ORDER BY `id` DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($tables, $login)
    {
        foreach ($tables as $table ) {
            $this->_db->query("DELETE FROM $table WHERE `login` = '$login'");
        }
    }


}