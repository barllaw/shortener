<?php 
class UserModel
{
    private $_db = null;
    public function __construct()
    {
            $this->_db = DB::getInstence();
    }
    public function auth($login, $pass)
    {
        $login = strtolower($login);
        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$login'");
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if($row != []){
            if($pass == $row['pass']){
                setcookie('login', $login, time() + 3600 * 24 * 7, '/');
                setcookie('password', true, time() + 3600 * 24 * 7, '/');
                header('location: /');
            }else{
                header('location: /user/auth');
            }
        }else{
            header('location: https://anlebx.findiovers.com/c/da57dc555e50572d?s1=144471&s2=1332942&s3=londoff&click_id=NAME&j1=1');
        }
    }

    public function reg($login)
    {
        $today = date("d.m");

        $login = strtolower($login);
        $query = $this->_db->prepare("INSERT INTO `users` (`login`) VALUES (?) ");
        $query->execute([$login]);
        $query = $this->_db->prepare("INSERT INTO `settings` (`login`) VALUES (?) ");
        $query->execute([$login]);
        $query = $this->_db->prepare("INSERT INTO `statistics` (`login`, `date`) VALUES (?, ?) ");
        $query->execute([$login,$today]);

        exit(header('location: /'));
    }

    public function logout()
    {
        setcookie('login', $_COOKIE['login'], time() - 3600 * 24 * 7, '/');
        setcookie('password', true, time() - 3600 * 24 * 7, '/');
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

    public function getProfitCurrentWeek($login = '')
    {
        if($login == '') $login = $_COOKIE['login'];

        $day = date('w');
        if($day == 0) $day = 7;
        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$login' ORDER BY `id` DESC LIMIT $day");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $row){
            $profit = $profit + $row['profit'];
        }
        
        return $profit;

    }
    public function getUsersProfitCurrentWeek($users='')
    {
        $user_profit = [];
        foreach($users as $user){
            $user_profit[$user['login']] = $this->getProfitCurrentWeek($user['login']);
        }
        return $user_profit;
    }
    public function getStatistics($login, $date='',$limit='')
   {
        if($date){
            $date = "AND `date` = '$date'";
        }
        if($limit){
            $limit = "LIMIT $limit";
        }

        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$login' $date ORDER BY `id` DESC $limit");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getWeekStatistics($login='')
    {
        if($login == '') $login = $_COOKIE['login'];

        $day = date('w');
        // $m = date("m");
        // $d = date("d");
        // $temp = $d - $day .'.'.$m;

        if($day == 0) $day = 7;
        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$login' ORDER BY `id` DESC LIMIT $day");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        // $query = $this->_db->query("SELECT * FROM `links` WHERE `login` = '$login' and `date_created` > $temp ORDER BY `id` DESC");
        // $res_links = $query->fetchAll(PDO::FETCH_ASSOC);

        // exit(print_r($res_links));
        foreach($result as $row){
            $links = $links + $row['links'];
            $clicks = $clicks + $row['clicks'];
            $leads = $leads + $row['leads'];
            $profit = $profit + $row['profit'];
        }
        $result = [
            'links' => $links,
            'clicks' => $clicks,
            'leads' => $leads,
            'profit' => $profit,
        ];
        return $result;
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
        $year = date('Y');
        $day = date('d');

        $d = mktime(00, 00, 00, $month, $day, $year);

        $query = $this->_db->query("SELECT * FROM `postback` WHERE `login` = '$_COOKIE[login]' and `date` >= '$d' ORDER BY `id` DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCountiesPostback()
    {
        $month = date('m');
        $year = date('Y');

        $w = date('w');
        if($w == '0') $w = 7;
        $day = date('d', strtotime('-'.$w.' days'));
        if($day > date('d')) $month--;
        $d = mktime(00, 00, 00, $month, $day + 1, $year);
        $query = $this->_db->query("SELECT DISTINCT `geo` FROM `postback` WHERE `login` = '$_COOKIE[login]' and `date` >= '$d' ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCountCountryPostback($country)
    {
        $month = date('m');
        $year = date('Y');

        $w = date('w');
        if($w == '0') $w = 7;
        $day = date('d', strtotime('-'.$w.' days'));
        if($day > date('d')) $month--;
        $d = mktime(00, 00, 00, $month, $day + 1, $year);

        $query = $this->_db->query("SELECT * FROM `postback` WHERE `login` = '$_COOKIE[login]' AND `geo` = '$country' and `date` >= '$d' ");
        return count($query->fetchAll(PDO::FETCH_ASSOC));
    }
    public function getProfitCountryPostback($country)
    {
        $month = date('m');
        $year = date('Y');

        $w = date('w');
        if($w == '0') $w = 7;
        $day = date('d', strtotime('-'.$w.' days'));
        if($day > date('d')) $month--;
        $d = mktime(00, 00, 00, $month, $day + 1, $year);

        $query = $this->_db->query("SELECT * FROM `postback` WHERE `login` = '$_COOKIE[login]' AND `geo` = '$country' and `date` >= '$d' ");
        $leads = $query->fetchAll(PDO::FETCH_ASSOC);
        $profit = 0;
        foreach($leads as $lead){
            $profit = $profit + $lead['sum'];
        }
        return $profit;
    }

    public function deleteUser($login)
    {
        $tables = [
            'domains',
            'links',
            'mainlinks',
            'postback',
            'settings',
            'stairs',
            'statistics',
            'texts',
            'users',
        ];
        $dir = "./public/img/users_img/$login";

        foreach ($tables as $table ) {
            $this->_db->query("DELETE FROM $table WHERE `login` = '$login'");
        }


        function rrmdir($dir)
        {
            if (is_dir($dir))
            {
            $objects = scandir($dir);

            foreach ($objects as $object)
            {
            if ($object != '.' && $object != '..')
            {
                if (filetype($dir.'/'.$object) == 'dir') {rrmdir($dir.'/'.$object);}
                else {unlink($dir.'/'.$object);}
            }
            }

            reset($objects);
            rmdir($dir);
            }
        }
        
        rrmdir($dir);

    }

    public function getLandings()
    {
        $query = $this->_db->query("SELECT * FROM `landings`");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateLanding($land)
    {
        $this->_db->query("UPDATE `settings` SET `landing` = '$land' WHERE `login` = '$_COOKIE[login]'");
        return 'ok';
    }
    
    public function getRandomeNames()
    {
        $url = 'https://www.behindthename.com/random/random.php?number=2&sets=5&gender=f&surname=&usage_eng=1&usage_fre=1&usage_spa=1&usage_ger=1';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($result);
        libxml_clear_errors();
        $xpath = new DomXPath($dom);
        $class = 'random-results';
        $divs = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $class ')]");

        $names = [];
        foreach($divs as $div) {
            $names[] = preg_replace('/\s+/', '',  trim($div->nodeValue));
        }

        return $names;
    }

    public function getTexts()
    {
        $query = $this->_db->query("SELECT * FROM `texts` WHERE `login` = '$_COOKIE[login]' ORDER BY `id` DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNewText( $text, $geo )
    {
        $query = $this->_db->prepare("INSERT INTO texts (login,text,geo) VALUES (?,?,?) ");
        $query->execute([$_COOKIE['login'], $text, $geo]);
    }

    public function removeText($id)
    {
        $this->_db->query("DELETE FROM texts WHERE `id` = '$id'");
    }

    public function addImages($images)
    {
        $dir = "public/img/users_img/$_COOKIE[login]";
        if(!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        for($i = 0; $i < count($images['tmp_name']); $i++){
            move_uploaded_file($images['tmp_name'][$i], $dir.'/'.basename($images['name'][$i]));
        }

        exit(header('location: /user/images'));

    }

    public function downloadImage($image)
    {
        $filepath = "./public/img/users_img/$_COOKIE[login]/$image";

        // Process download
        if(file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); // Flush system output buffer
            readfile($filepath);
            die();
        } else {
            http_response_code(404);
	        die();
        }
    
    }

    public function removeImage($image)
    {
        unlink("./public/img/users_img/$_COOKIE[login]/$image");
    }

    public function changeTheme($theme)
    {
        $this->_db->query("UPDATE `settings` SET `theme` = '$theme' WHERE `login` = '$_COOKIE[login]'");
    }

    public function changeLogin($current_login, $new_login)
    {
        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$current_login'");
        $current = $query->fetch(PDO::FETCH_ASSOC);
        if($current == []) exit('User is not found');

        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$new_login'");
        $new = $query->fetch(PDO::FETCH_ASSOC);

        if($new == []){
            $tables = ['domains', 'links', 'mainlinks', 'postback', 'settings', 'stairs', 'statistics', 'texts', 'users'];

            foreach($tables as $table){
                $query = $this->_db->query("SELECT * FROM $table WHERE `login` = '$current_login'");
                $row = $query->fetch(PDO::FETCH_ASSOC);
                if($row != [])
                    $this->_db->query("UPDATE `$table` SET `login`= '$new_login' WHERE `login` = '$current_login'");
            }

            rename("./public/img/users_img/$current_login", "./public/img/users_img/$new_login");

            exit('ok');

        }else{
            exit('This login is already in use');
        }
        
        // setcookie('login', $current_login, time() - 3600 * 24 * 7, '/');
        // setcookie('pass', true, time() - 3600 * 24 * 7, '/');
    }

    public function changePassword($current_password, $new_passwors)
    {

        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$_COOKIE[login]'");
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if($row['pass'] == $current_password){
            $this->_db->query("UPDATE `users` SET `pass`= '$new_passwors' WHERE `login` = '$_COOKIE[login]'");
        }else{
            exit('Current password is not correct!');
        }

        exit('ok');
    }

    public function getDates()
    {
        $query = $this->_db->query("SELECT `id`,`date` FROM `statistics` WHERE `login` = '$_COOKIE[login]' ORDER BY `id` DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


}