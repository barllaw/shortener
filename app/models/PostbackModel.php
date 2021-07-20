<?php 
class PostbackModel
{
    private $_db = null;
    public function __construct()
    {
            $this->_db = DB::getInstence();
    }

    public function getLink($nickname)
    {
        $tiktok = 'tiktok.com/@'.$nickname;
        $query = $this->_db->query("SELECT * FROM `links` WHERE `tiktok` = '$tiktok'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateLinkStats($nickname, $sum)
    {
        $link = $this->getLink($nickname);

        if($link != []){
            $id = $link['id'];
            $sum = $link['profit'] + $sum;
            $leads = $link['leads'] + 1;
            $this->_db->query("UPDATE `links` SET `profit` = '$sum', `leads` = '$leads'  WHERE `id` = '$id'");
        }
        
    }

    public function updateStatistics($sum, $nickname = '', $login = '')
    {
        $today = date("d.m");

        if($login == ''){
            $link = $this->getLink($nickname);
            $login = $link['login'];
            if($login == '') return;
        }

        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `date` = '$today' and `login` = '$login'");
        $statistics = $query->fetch(PDO::FETCH_ASSOC);

        $profit = $statistics['profit'] + $sum;
        $leads = $statistics['leads'] + 1;
        $this->_db->query("UPDATE `statistics` SET `profit` = '$profit', `leads` = '$leads' WHERE `id` = '$statistics[id]'");

    }

    public function newPostback( $pp, $sum, $nickname = '', $login = '', $geo = '', $os = '')
    {
        $query = $this->_db->prepare("INSERT INTO `postback` ( `pp`, `sum`, `nickname`, `login`, `geo`, `os`, `date` ) VALUES ( ?, ?, ?, ?, ?, ?, ? ) ");
        $query->execute([ $pp, $sum, $nickname, $login, $geo, $os, time() ]);
    }
    

}