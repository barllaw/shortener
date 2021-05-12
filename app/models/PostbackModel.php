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

    public function updateStatistics($sum, $nickname = '', $login = '')
    {
        $today = date("d.m");
        if($login == ''){
            $link = $this->getLink($nickname);
            $login = $link['login'];
            if($login == '') return;
        }

        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `date` = '$today' and `login` = '$login'");
        $statistic = $query->fetch(PDO::FETCH_ASSOC);

        if($statistic == []){
            $query = $this->_db->prepare("INSERT INTO `statistics` ( `login`, `profit`, `date` ) VALUES ( ?, ?, ? ) ");
            $query->execute([ $login, $sum, $today ]);
        }else{
            $profit = $statistic['profit'] + $sum;
            $this->_db->query("UPDATE `statistics` SET `profit` = '$profit' WHERE `id` = '$statistic[id]'");
        }
    }

   
    

}