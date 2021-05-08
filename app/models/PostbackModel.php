<?php 
class PostbackModel
{
    private $_db = null;
    public function __construct()
    {
            $this->_db = DB::getInstence();
    }

    public function getLink($cid)
    {
        $tiktok = 'tiktok.com/@'.$cid;
        $query = $this->_db->query("SELECT * FROM `links` WHERE `tiktok` = '$tiktok'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProfit($cid, $sum)
    {
        $link = $this->getLink($cid);

        $id = $link['id'];
        $sum = $link['profit'] + $sum;

        $this->_db->query("UPDATE `links` SET `profit` = '$sum' WHERE `id` = '$id'");

    }

    public function updateStatistics($cid = '', $sum, $login = '')
    {
        $today = date("d.m");
        if($cid != ''){
            $link = $this->getLink($cid);
            $login = $link['login'];
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