<?php 
class LinkModel
{
    private $_db = null;
    public function __construct()
    {
            $this->_db = DB::getInstence();
    }

    public function getDates($param = '')
    {

        $query = $this->_db->query("SELECT DISTINCT `date_created`, MAX(`id`) FROM `links` GROUP BY `date_created` ORDER BY MAX(`id`) DESC, `date_created` ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function getLinksToday()
    {
        $today = date("d.m");
        $links = [];
        $query = $this->_db->query("SELECT * FROM `links` WHERE `date_created` = '$today' and `login` = '$_COOKIE[login]' ORDER BY `id` DESC");
        $links[$today] = $query->fetchAll(PDO::FETCH_ASSOC);
        return $links;
    }

    public function getLinks($login = '')
    {
        if($login == '') $login = $_COOKIE['login'];

        $query = $this->_db->query("SELECT * FROM `links` WHERE `login` = '$login' ORDER BY `id` DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMainlinks()
    {
        $query = $this->_db->query("SELECT * FROM `mainlinks` WHERE `login` = '$_COOKIE[login]' ORDER BY `id` DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUsersLinks($users)
    {
        $today = date("d.m");
        $users_links = [];
        foreach($users as $user){
            $query = $this->_db->query("SELECT * FROM `links` WHERE `login` = '$user[login]' and `date_created` = '$today'");
            $users_links[$user['login']] = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $users_links;
    }

    public function shortenLink( $link, $nickname, $custom_link, $domain, $login, $geo, $domains, $stairs, $stairs_links )
    {
        $tiktok = '';
        
        if($domain == ''){
            $domains = explode(',', $domains);
            $int = rand(1,count($domains));
            $domain = $domains[$int - 1];
        }
        
        if($nickname != ''){
            $tiktok = 'tiktok.com/@'.$nickname;
            $link = str_replace('NAME', $nickname,  $link);
        }
        if($stairs){
            if($stairs_links == '') exit(header('location: /'));
            $link = str_replace('NAME', $nickname,  $stairs_links);
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
    
            $permitted_chars = 'abcdefghjkmnopqrstuvwxyzabcdefghjkmnopqrstuvwxyzabcdefghjkmnopqrstuvwxyzZAQWSXCDERFVBGTYHNMJUKOP0123456789';
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
    
        $query = $this->_db->prepare("INSERT INTO `links` ( `link`, `short_link`, `login`, `tiktok`, `geo`, `date_created`, `time_created` ) VALUES ( ?, ?, ?, ?, ?, ?, ?) ");
        $query->execute([ $link, $shortlink, $login, $tiktok, $geo, $today, $time ]);
    
        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$_COOKIE[login]' and `date` = '$today'");
        $stats = $query->fetch(PDO::FETCH_ASSOC);
        $links = $stats['links'] + 1;
        $query = $this->_db->prepare("UPDATE `statistics` SET `links` = ? WHERE `id` = ? ");
        $query->execute([ $links, $stats['id'] ]);

        $_SESSION['shortlink'] = $shortlink;
    }

    public function saveMainlink( $link_save, $link_name )
    {
        $link_save = preg_replace('/\s+/', '',  trim($link_save));
        $query = $this->_db->prepare("INSERT INTO `mainlinks` ( `link`, `name`, `login`) VALUES ( ?,?,? ) ");
        $query->execute([ $link_save, $link_name, $_COOKIE['login'] ]);
    }
    public function saveStairslink( $link_save )
    {
        $link_save = preg_replace('/\s+/', '',  trim($link_save));
        $query = $this->_db->prepare("INSERT INTO `stairs` ( `smartlink`, `login`) VALUES ( ?,? ) ");
        $query->execute([ $link_save, $_COOKIE['login'] ]);
    }

    public function updateLink($link, $id)
    {
        $query = $this->_db->prepare("UPDATE `links` SET `link` = ? WHERE `id` = ? ");
        $query->execute([ $link, $id]);
    }

    public function deleteLink($db, $id, $date = '')
    {
        if($db = 'mainlinks'){
            $this->_db->query("DELETE FROM `mainlinks` WHERE `id` = '$id'");
        }
        if($db = 'links'){
            //Update user count links
            $query = $this->_db->query("SELECT `count_links` FROM `users` WHERE `login` = '$_COOKIE[login]'");
            $row = $query->fetch(PDO::FETCH_ASSOC);
            $links = $row['count_links'] - 1;
            $query = $this->_db->prepare("UPDATE `users` SET `count_links` = ? WHERE `login` = ? ");
            $query->execute([ $links, $_COOKIE['login']]);

            $this->_db->query("DELETE FROM `links` WHERE `id` = '$id'");
            
            //Update stats count links
            $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$_COOKIE[login]' and `date` = '$date'");
            $stats = $query->fetch(PDO::FETCH_ASSOC);
            $links = $stats['links'] - 1;
            $query = $this->_db->prepare("UPDATE `statistics` SET `links` = ? WHERE `id` = ? ");
            $query->execute([ $links, $stats['id']]);

        }
        if($db = 'stairs'){
            $this->_db->query("DELETE FROM `stairs` WHERE `id` = '$id'");
        }
    }

    public function setDefaultMainlink($id)
    {
        $query = $this->_db->prepare("UPDATE `mainlinks` SET `is_default` = ? WHERE `login` = ? ");
        $query->execute([ '0', $_COOKIE['login']]);

        $query = $this->_db->prepare("UPDATE `mainlinks` SET `is_default` = ? WHERE `id` = ? ");
        $query->execute([ '1', $id]);
    }

    public function addDomain($domain, $users)
    {
        if($domain == '' or $users == '') exit(header('location: /'));

        if($users == '*'){
            $query = $this->_db->query("SELECT `login` FROM `users`");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $users = [];
            foreach($res as $user){
                $users[] = $user['login'];
            }
        }else{
            $users = explode(',', $users);
        }
        
        $domains = explode(',', $domain);

        foreach($domains as $domain){
            foreach($users as $user){
                $query = $this->_db->prepare("INSERT INTO `domains` ( `domain`, `login`) VALUES ( ?, ? ) ");
                $query->execute([ $domain, trim($user) ]);
            }
        }
        
    }

    public function getDomains()
    {
        $query = $this->_db->query("SELECT * FROM `domains` WHERE `login` = '$_COOKIE[login]'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getStairs($active = '')
    {
        $query = $this->_db->query("SELECT * FROM `stairs` WHERE `login` = '$_COOKIE[login]' $active");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function inactiveStairs()
    {
        $this->_db->query("UPDATE `stairs` SET `active` = '0' WHERE `login` = '$_COOKIE[login]'");
        $this->_db->query("UPDATE `links` SET `next` = '0' WHERE `login` = '$_COOKIE[login]'");
    }
    public function updateStairs($link)
    {
        $this->_db->query("UPDATE `stairs` SET `active` = '1' WHERE `login` = '$_COOKIE[login]' and `smartlink` = '$link'");
    }
    public function getVisitorsOfShortlink($id_shortlink)
    {
        $query = $this->_db->query("SELECT `id`,`country_code`,`city`,`date` FROM `visitors_shortlinks` WHERE `shortlink_id` = '$id_shortlink' ORDER BY `id` DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getShortlinkDomain($id_shortlink)
    {
        $query = $this->_db->query("SELECT `shortlink` FROM `visitors_shortlinks` WHERE `shortlink_id` = '$id_shortlink' limit 1");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCountiesShortlink($id_shortlink)
    {
        $query = $this->_db->query("SELECT DISTINCT `country` FROM `visitors_shortlinks` WHERE `shortlink_id` = '$id_shortlink'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCountCountry($id_shortlink, $country)
    {
        $query = $this->_db->query("SELECT * FROM `visitors_shortlinks` WHERE `shortlink_id` = '$id_shortlink' AND `country` = '$country'");
        return count($query->fetchAll(PDO::FETCH_ASSOC));
    }
}