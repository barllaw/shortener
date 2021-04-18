<?php 
class LinkModel
{
    private $_db = null;
    public function __construct()
    {
            $this->_db = DB::getInstence();
    }

    public function getDates($param)
    {
        $query = $this->_db->query("SELECT DISTINCT `date_created`, MAX(`id`) FROM `links` GROUP BY `date_created` ORDER BY MAX(`id`) DESC, `date_created`  LIMIT $param ");
        // exit(print_r($query->fetchAll(PDO::FETCH_ASSOC)));
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLinks($param)
    {
        $dates = $this->getDates($param);
        $links = [];
        foreach($dates as $date){
            $query = $this->_db->query("SELECT * FROM `links` WHERE `date_created` = '$date[date_created]' and `login` = '$_COOKIE[login]' ORDER BY `id` DESC");
            $links[$date['date_created']] = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $links;
    }

    public function getMainlinks()
    {
        $query = $this->_db->query("SELECT * FROM `main_links` WHERE `login` = '$_COOKIE[login]' ORDER BY `id` DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUsersLinks($users)
    {
        $today = date("d.m");
        $users_links = [];
        foreach($users as $user){
            $query = $this->_db->query("SELECT * FROM `links` WHERE `login` = '$user[login]' and `date_created` = '$today' ");
            $users_links[$user['login']] = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $users_links;
    }

    public function shortenLink( $link, $nickname, $custom_link, $domain, $login, $geo )
    {
        $tiktok = '';

        if($nickname != ''){
            $tiktok = 'tiktok.com/@'.$nickname;
            $link = str_replace('NAME', $nickname,  $link);
        }
    
        // CUSTOM SHORTLINK
        if($custom_link != ''){
            $shortlink = $domain.'/'.$custom_link;
    
            $query = $this->_db->query("SELECT * FROM `links` WHERE `short_link` = '$shortlink' ");
            $row = $query->fetch(PDO::FETCH_ASSOC);
    
            if($row != []){
                $_SESSION['shortlink'] = 'Такая ссылка уже существует!';
                exit(header('location: /'));
            }
            
        // CREATE SHORTLINK
        }else{
    
            $permitted_chars = 'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzZAQWSXCDERFVBGTYHNMJUIKLOP0123456789';
            do{
    
                $int = rand(3,5);
                $shortlink = substr(str_shuffle($permitted_chars), 0, $int);
    
                $query = $this->_db->query("SELECT * FROM `links` WHERE `short_link` = '$shortlink'");
                $row = $query->fetch(PDO::FETCH_ASSOC);
    
                if($row == [])
                    break;
            }while(true);
            $shortlink = $domain.'/'.$shortlink;
        }
        
        $today = date("d.m");
        $time = date("H:i");
    
        $query = $this->_db->prepare("INSERT INTO `links` ( `link`, `short_link`, `login`, `tiktok`, `geo`, `ban`, `date_created`, `time_created` ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?) ");
        $query->execute([ $link, $shortlink, $login, $tiktok, $geo, '', $today, $time ]);
    
        $_SESSION['shortlink'] = $shortlink;
    }

    public function saveMainlink( $link_textarea_save, $link_name )
    {
        $link_textarea_save = preg_replace('/\s+/', '',  trim($link_textarea_save));
        $query = $this->_db->prepare("INSERT INTO `main_links` ( `link`, `name`, `login`) VALUES ( ?,?,? ) ");
        $query->execute([ $link_textarea_save, $link_name, $_COOKIE['login'] ]);
    }

    public function deleteMainlink($id)
    {
        $this->_db->query("DELETE FROM `main_links` WHERE `id` = '$id'");
    }

}