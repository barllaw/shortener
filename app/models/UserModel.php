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
            header('location: https://hot-ladies-here.com/?u=9flyn7v&o=r8ckl0x&t=lond&cid=LOGIN');
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

    public function logout()
    {
        setcookie('login', $_COOKIE['login'], time() - 3600 * 24 * 7, '/');
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

        // $week_start = date("d", strtotime('monday this week'));
        // $week_end = date("d", strtotime('today'));
        // $day = ($week_end - $week_start) + 1;

        $day = date('w');

        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$login' ORDER BY `id` DESC LIMIT $day");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $row){
            $profit = $profit + $row['profit'];
        }
        
        return $profit;

    }
    public function getStatistics($login, $today = false)
   {
        $today = ($today) ? ' LIMIT 1'  : $today; 

        $query = $this->_db->query("SELECT * FROM `statistics` WHERE `login` = '$login' ORDER BY `id` DESC $today");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
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
        $url = 'https://www.behindthename.com/random/random.php?number=2&sets=5&gender=f&surname=&usage_dut=1&usage_eng=1&usage_fre=1&usage_ger=1';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($result);
        libxml_clear_errors();
        $xpath = new DomXPath($dom);
        $class = 'random-result';
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


}