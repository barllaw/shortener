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

    public function updateProfit($nickname, $sum)
    {
        $link = $this->getLink($nickname);

        $id = $link['id'];
        $sum = $link['profit'] + $sum;

        $this->_db->query("UPDATE `links` SET `profit` = '$sum' WHERE `id` = '$id'");

    }

    public function updateStatistics($sum, $nickname = '', $login = '', $ref = '')
    {
        $today = date("d.m");

        if($login == ''){
            $link = $this->getLink($nickname);
            $login = $link['login'];
            if($login == '') return;
        }

        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `date` = '$today' and `login` = '$login'");
        $statistics = $query->fetch(PDO::FETCH_ASSOC);

        if($statistics == []){

            $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$login'");
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if($result == []) return;

            $query = $this->_db->prepare("INSERT INTO `statistics` ( `login`, `profit`, `ref`, `date` ) VALUES ( ?, ?, ?, ? ) ");
            $query->execute([ $login, $sum, $ref, $today ]);

        }else{
            $profit = $statistics['profit'] + $sum;
            $ref = $statistics['ref'] + $ref;
            $this->_db->query("UPDATE `statistics` SET `profit` = '$profit', `ref` = '$ref' WHERE `id` = '$statistics[id]'");

        }
    }

   
    

}