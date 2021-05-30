<?php
class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    private $_db = null;

    public function __construct()
    {

        

        $url = $this->parseUrl();
        $this->_db = DB::getInstence();

        //CHECK USER WITH COOKIE
        $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$_COOKIE[login]'");
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if ($user == []) unset($_COOKIE);

        // FINDING SHORTLINK IN DB with $url[0]
        $shortlink = $_SERVER['SERVER_NAME'].'/'.$url[0];
        $query = $this->_db->query("SELECT * FROM `links` WHERE `short_link` = '$shortlink'");
        $link = $query->fetch(PDO::FETCH_ASSOC);



        if($link != []) {
            // update clicks
            $clicks = $link['clicks'] + 1;
            $query = $this->_db->prepare("UPDATE `links` SET `clicks` = ? WHERE `id` = ? ");
            $query->execute([ $clicks, $link['id']]);
            //Update last ckick
            $time = date("d.m").' '.date("H:i");
            $query = $this->_db->prepare("UPDATE `links` SET `last_click` = ? WHERE `id` = ? ");
            $query->execute([ $time, $link['id']]);
            // get user
            $login = $link['login'];
            $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$login'");
            $user = $query->fetch(PDO::FETCH_ASSOC);

            $int = $link['next']; 

            $links = explode(',', $link['link']);
            if($user['stairs'] == 'On'){

                if($int >= count($links)) $int = 0;
                //Update next number
                $update_int = $int + 1;
                $this->_db->query("UPDATE `links` SET `next` = '$update_int' WHERE `id` = '$link[id]'");

            }

            $redirect = $links[$int];
            //landing check
            if ( $user['preland'] == 'On' ) 
                exit(require_once './app/views/landing/index.php');

            exit(header('location: '.$redirect));
        }

        // access url
        if( $url[0] != 'postback' and $url[1] != 'auth' and !isset($_COOKIE['login'])){
            exit(header('location: /user/auth'));
        }


    // FINDING CONTROLLER with $url[0]
        if(file_exists('app/controllers/' . ucfirst($url[0]) . '.php')){
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        } 

        else{  if( $url != '' ) header('location: /404.php');        }

        require_once 'app/controllers/'. $this->controller .'.php';

        $this->controller = new $this->controller;
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1]; 
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if(isset($_GET['url'])){
            return explode(
                '/',
            filter_var(
                rtrim($_GET['url'], '/'), 
                FILTER_SANITIZE_STRING));
        }
    }
}