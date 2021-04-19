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
            header('location: https://zbxmgw.shewantyou.net/c/da57dc555e50572d?s1=110002&s2=1217518&s3=LOGIN&j1=1&j3=1');
        }
    }

    public function getUser()
    {
        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$_COOKIE[login]'");
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

    public function prelandOff()
    {
        $query = $this->_db->prepare("UPDATE `users` SET `preland` = ? WHERE `login` = ? ");
        $query->execute([ 'Off', $_COOKIE['login']]);
    }

    public function prelandOn()
    {
        $query = $this->_db->prepare("UPDATE `users` SET `preland` = ? WHERE `login` = ? ");
        $query->execute([ 'On', $_COOKIE['login']]);
    }

    public function customOff()
    {
        $query = $this->_db->prepare("UPDATE `users` SET `input_custom` = ? WHERE `login` = ? ");
        $query->execute([ 'Off', $_COOKIE['login']]);
    }

    public function customOn()
    {
        $query = $this->_db->prepare("UPDATE `users` SET `input_custom` = ? WHERE `login` = ? ");
        $query->execute([ 'On', $_COOKIE['login']]);
    }


}