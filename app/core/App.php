<?php
class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    private $_db = null;

    public function __construct()
    {

        $url = $this->parseUrl();

    // FINDING SHORTLINK IN DB with $url[0]
        $this->_db = DB::getInstence();
        $shortlink = $_SERVER['SERVER_NAME'].'/'.$url[0];
        $result = $this->_db->query("SELECT * FROM `links` WHERE `short_link` = '$shortlink'");
        $link = $result->fetch(PDO::FETCH_ASSOC);
        if($link != []) {
            // update clicks
            $clicks = $link['clicks'] + 1;
            $query = $this->_db->prepare("UPDATE `links` SET `clicks` = ? WHERE `id` = ? ");
            $query->execute([ $clicks, $link['id']]);
            // get user
            $login = $link['login'];
            $query = $this->_db->query("SELECT * FROM `users` WHERE `login` = '$login'");
            $user = $query->fetch(PDO::FETCH_ASSOC);
            

            //landing check
            if($user['preland'] == 'Off') exit(header('location: '.$link['link']));
            else {
                $lang =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2);
                if( $lang == 'FR'){
                    $question = 'Ça ne vous dérange pas <span>je vais montrer ma vidéo?';
                    $yes = 'je suis d`accord'; $no = 'Continuez';
                }else if( $lang == 'CS'){
                    $question = 'Nevadí <span>ukážu své video?';
                    $yes = 'souhlasím'; $no = 'pokračovat';
                }else if( $lang == 'ES'){
                    $question = '¿No te importa <span>te mostraré mi video?';
                    $yes = 'estoy de acuerdo'; $no = 'Seguir';
                }else if( $lang == 'NL'){
                    $question = 'Vind je het niet erg <span>ik zal mijn video laten zien?';
                    $yes = 'ik ga akkoord'; $no = 'doorgaan met';
                }else if( $lang == 'DE'){
                    $question = 'Du hast nichts dagegen habe <span>ich werde mein Video gezeigt?</span>';
                    $yes = 'Genau'; $no = 'fortsetzen';
                }else{
                    $question = 'You dont mind <span>I will show my video?';
                    $yes = 'I agree'; $no = 'Continue';
                }
                exit(require_once './app/views/landing/index.php');
            }
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