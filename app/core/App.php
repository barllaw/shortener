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
                switch ($lang) {
                    case 'FR':
                        $upertext = 'Rejoignez-moi mon surnom ';
                        $question = 'Ça ne vous dérange pas <span>je vais montrer ma vidéo?</span>';
                        $yes = 'je suis d`accord'; $no = 'Continuez';
                        break;
                    case 'CS':
                        $upertext = 'Připojte se ke mně moje přezdívka';
                        $question = 'Nevadí <span>ukážu své video?</span>';
                        $yes = 'souhlasím'; $no = 'pokračovat';
                        break;
                    case 'ES':
                        $upertext = 'Únete a mi mi apodo ';
                        $question = '¿No te importa <span>te mostraré mi video?</span>';
                        $yes = 'estoy de acuerdo'; $no = 'Seguir';
                        break;
                    case 'NL':
                        $upertext = 'Sluit me aan bij mijn bijnaam ';
                        $question = 'Vind je het niet erg <span>ik zal mijn video laten zien?</span>';
                        $yes = 'ik ga akkoord'; $no = 'doorgaan met';
                        break;
                    case 'DE':
                        $upertext = 'Mach mit, mein Spitzname ';
                        $question = 'Du hast nichts dagegen habe <span>ich werde mein Video gezeigt?</span>';
                        $yes = 'Genau'; $no = 'fortsetzen';
                        break;
                    case 'IT':
                        $upertext = 'Unisciti a me il mio soprannome ';
                        $question = 'Non ti dispiace <span>che mostri il mio video?</span>';
                        $yes = 'Sono d\'accordo'; $no = 'Continua';
                        break;
                    default:
                        $upertext = 'Join to me my nickname ';
                        $question = 'You dont mind <span>I will show my video?</span>';
                        $yes = 'I agree'; $no = 'Continue';
                        break;
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