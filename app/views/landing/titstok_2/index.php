<?php
// $lang =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2);

function getResponse($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);

    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$ipdat       = @json_decode(getResponse("http://ip-api.com/json/" . $_SERVER['REMOTE_ADDR']), true);
$countryCode = !empty($ipdat['countryCode']) ? $ipdat['countryCode'] : null;

if ($countryCode === null) {
    $ipdat       = @json_decode(getResponse("http://www.geoplugin.net/json.gp?ip=" . $_SERVER['REMOTE_ADDR']), true);
    $countryCode = !empty($ipdat['geoplugin_countryCode']) ? $ipdat['geoplugin_countryCode'] : null;
}

switch ($countryCode) {
    case 'FR':
    case 'LU':
        $text = 'Nous avons beaucoup de filles excitées sur notre site qui veulent vous envoyer leurs nus.';
        $btn  = 'Continuez';
        break;
    case 'CL':
    case 'ES':
        $text = 'Tenemos muchas chicas cachondas en nuestro sitio que quieren enviarte sus desnudos.';
        $btn  = 'Continuar';
        break;
    case 'NL':
    case 'BE':
        $text = 'We hebben veel geile meiden op onze site die hun naaktfoto\'s naar jou willen sturen.';
        $btn  = 'Doorgaan';
        break;
    case 'CH':
    case 'DE':
    case 'AT':
        $text = 'Wir haben viele geile Girls auf unserer Seite, die dir ihre Aktfotos schicken wollen.';
        $btn  = 'Fortsetzen';
        break;
    case 'IT':
        $text = 'Abbiamo un sacco di ragazze arrapate sul nostro sito che vogliono inviarti i loro nudi.';
        $btn  = 'Continua';
        break;
    case 'PL':
        $text = 'Na naszej stronie mamy wiele napalonych dziewczyn, które chcą przesłać Ci swoje akty.';
        $btn  = 'Kontyntynuj';
        break;
    case 'DK':
        $text = 'Vi har mange liderlige piger på vores side, som gerne vil sende deres nøgenbilleder til dig.';
        $btn  = 'Blive ved';
        break;
    case 'CZ':
        $text = 'Na našem webu máme spoustu nadržených holek, které vám chtějí poslat své akty.';
        $btn  = 'Pokračovat';
        break;
    case 'GR':
    case 'CY':
        $text = 'Έχουμε πολλά καυλιάρηδες κορίτσια στον ιστότοπό μας που θέλουν να σας στείλουν τα γυμνά τους.';
        $btn  = 'Να συνεχίσει';
        break;
    case 'FI':
        $text = 'Sivustollamme on paljon kiimainen tyttöjä, jotka haluavat lähettää alastomiaan sinulle.';
        $btn  = 'Jatkaa';
        break;
    case 'SE':
        $text = 'Vi har många kåta tjejer på vår sida som vill skicka sina nakenbilder till dig.';
        $btn  = 'Fortsätta';
        break;
    case 'LV':
        $text = 'Mūsu vietnē ir daudz uzbudināmu meiteņu, kuras vēlas jums nosūtīt savus kailumus.';
        $btn  = 'Turpināt';
        break;
    case 'NO':
        $text = 'Vi har mange kåte jenter på siden vår som ønsker å sende nakenbilder til deg.';
        $btn  = 'Fortsette';
        break;
    case 'IL':
        $text = 'ו הרבה בחורות חרמניות באתר שלנו שרוצות לשלוח אליך את העירום שלהן.';
        $btn  = 'לְהַמשִׁיך';
        break;
    case 'SI':
        $text = 'Na našem spletnem mestu imamo veliko pohotnih deklet, ki vam želijo poslati svoje gole.';
        $btn  = 'Nadaljuj';
        break;
    case 'BG':
        $text = 'Имаме много възбудени момичета на нашия сайт, които искат да ви изпратят голите си фигури.';
        $btn  = 'продължи';
        break;
    case 'JP':
        $text = '私たちのサイトには、ヌードを送りたいと思っているエッチな女の子がたくさんいます。';
        $btn  = '継続する';
        break;
    case 'KP':
    case 'KR':
        $text = '우리 사이트에는 누드를 당신에게 보내고 싶어하는 흥분한 소녀들이 많이 있습니다.';
        $btn  = '계속하다';
        break;
    case 'PT':
        $text = 'Temos muitas garotas com tesão em nosso site que querem mandar seus nus para você.';
        $btn  = 'Continuar';
        break;
    case 'AE':
        $text = 'لدينا الكثير من الفتيات الشبق على موقعنا اللواتي يرغبن في إرسال عراة إليكم.';
        $btn  = 'يكمل';
        break;
    default:
        $text = 'We have a lot of horny girls on our site who want ot send their nudes to you.';
        $btn  = 'Continue';
        break;
}

$js = "

function execSML1() {
  document.location.href='$redirect';
  return false;
  
}

function execSML2() {
  document.location.href='$exit_link';
  return false;
}
";

$includeJs64 = base64_encode($js);

?>
<!DOCTYPE html>

<html lang="ru-RU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <base href=".">

    <script type="text/javascript" src="data:text/javascript;base64,<?=$includeJs64?>"></script>
    <link rel="stylesheet" type="text/css" href="style/webPushMotivationPopupSmall.css">
    <meta name="viewport" content="user-scalable=false, initial-scale=1.0, maximum-scale=1.0">

    <title>Nude Tiktok 18+</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/app/views/landing/titstok_2/style/main.css">
    <link rel="shortcut icon" type="image/png" href="/app/views/landing/titstok_2/images/icon.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

</head>
<body style="" cz-shortcut-listen="true">
<a class="exit_btn" href="#" onclick="return execSML2()">
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
            <?= $text ?>
        </div>
        <div class="btn">
            <a href="#" onclick="return execSML1()"><?= $btn ?></a>
        </div>
    </div>
</div>

</body>
</html>