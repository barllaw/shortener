<?php 
// $lang =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2);
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $_SERVER['REMOTE_ADDR']));


switch ($ipdat->geoplugin_countryCode) {
    case 'FR':
        $text = 'Nous avons beaucoup de filles excitées sur notre site qui veulent vous envoyer leurs nus.';
        $btn = 'Continuez';
        break;
    case 'ES':
        $text = 'Tenemos muchas chicas cachondas en nuestro sitio que quieren enviarte sus desnudos.';
        $btn = 'Continuar';
        break;
    case 'NL':
        $text = 'We hebben veel geile meiden op onze site die hun naaktfoto\'s naar jou willen sturen.';
        $btn = 'Doorgaan';
        break;
    case 'DE':
        $text = 'Wir haben viele geile Girls auf unserer Seite, die dir ihre Aktfotos schicken wollen.';
        $btn = 'Fortsetzen';
        break;
    case 'IT':
        $text = 'Abbiamo un sacco di ragazze arrapate sul nostro sito che vogliono inviarti i loro nudi.';
        $btn = 'Continua';
        break;
    case 'PL':
        $text = 'Na naszej stronie mamy wiele napalonych dziewczyn, które chcą przesłać Ci swoje akty.';
        $btn = 'Kontyntynuj';
        break;
    case 'DK':
        $text = 'Vi har mange liderlige piger på vores side, som gerne vil sende deres nøgenbilleder til dig.';
        $btn = 'Blive ved';
        break;
    case 'CZ':
        $text = 'Na našem webu máme spoustu nadržených holek, které vám chtějí poslat své akty.';
        $btn = 'Pokračovat';
        break;
    case 'RU':
        exit(header("location: $redirect"));
        break;
    case 'UA':
        exit(header("location: $redirect"));
        break;
    case 'MY':
        exit(header("location: https://www.youtube.com/watch?v=FTu_ndnh-wc"));
        break;
    default:
        $text = 'We have a lot of horny girls on our site who want ot send their nudes to you.';
        $btn = 'Continue';
        break;
}
?>
<!DOCTYPE html>

<html lang="ru-RU">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><base href=".">
        
        <link rel="stylesheet" type="text/css" href="style/webPushMotivationPopupSmall.css">
        <meta name="viewport" content="user-scalable=false, initial-scale=1.0, maximum-scale=1.0">

        <title>Nude Tiktok 18+</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/app/views/landing/titstok_2/style/main.css">
        <link rel="shortcut icon" type="image/png" href="/app/views/landing/titstok_2/images/icon.png"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
        <script>
            w = window.screen.width;
            if(w > 1024){
                location.href = "https://www.youtube.com/watch?v=6ZqaXHSE7gY";
            }
        </script>
    </head>
    <body style="" cz-shortcut-listen="true">
        <a class="exit_btn" href="<?=$exit_link?>">
            <i class="fas fa-arrow-left"></i>
            Exit
        </a>
        <div class="wrapper">
            <div class="logo">
               <img src="/app/views/landing/titstok_2/images/icon.png" alt="">
               <img src="/app/views/landing/titstok_2/images/logo_text2.png" alt="">
            </div>
            <div class="bg_bottom_wrap"></div>
            <div class="bottom_wrap">
                <div class="title">
                    <img src="/app/views/landing/titstok_2/images/logo_text3.png" alt="">
                    <img src="/app/views/landing/titstok_2/images/icon.png" alt="">
                </div>
                <div class="text">
                    <?=$text?>
                </div>
                <div class="btn">
                    <a href="<?=$redirect?>"><?=$btn?></a>
                </div>
            </div>
        </div>
    
</body></html>