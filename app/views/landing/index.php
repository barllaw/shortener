<?php 
$lang =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2);
switch ($lang) {
    case 'FR':
        $register = 'S\'inscrire';
        $confirm = 'Confirmez votre e-mail';
        $see = 'Regarder nu TikTok';
        break;
    case 'CS':
        $register = 'Registrovat';
        $confirm = 'potvrdit email';
        $see = 'Sledujte nahý TikTok';
        break;
    case 'ES':
        $register = 'Registrarse';
        $confirm = 'Confirmar correo electrónico';
        $see = 'Ver desnudo TikTok';
        break;
    case 'NL':
        $register = 'Registreren';
        $confirm = 'Bevestig Email';
        $see = 'Bekijk naakte TikTok';
        break;
    case 'DE':
        $register = 'Registrieren';
        $confirm = 'Bestätigungs-E-Mail';
        $see = 'Schau dir nackt TikTok an';
        break;
    case 'IT':
        $register = 'Registrati';
        $confirm = 'Conferma email';
        $see = 'Guarda TikTok nudo';
        break;
    case 'RU':
        $register = 'Регистрируйся';
        $confirm = 'Подтверди e-mail';
        $see = 'Смотри голые видео TikTok';
        break;
    default:
        $register = 'Register';
        $confirm = 'Confirm Email';
        $see = 'Watch naked TikTok'; 
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="theme-color" content="#171c1e">
		<title>TikTok +18 Hot videos</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
		<style>
			*{font-family: 'Roboto';padding: 0;margin: 0;color: #000;outline: none;}
            body{overflow:hidden;filter: blur();}
            .bg_blur{z-index: -1; position: absolute;top: 0;left: 0;height: 100vh;width: 100%;filter: blur(10px);background-image: url(/app/views/landing/3.gif);background-size: cover;}
			.container{z-index: 2; width: 100%;height: 100vh; background: linear-gradient(45deg, rgba(28,125,193,0.5074404761904762) 0%, rgba(54,9,121,0.5046393557422969) 51%, rgba(255,0,44,0.5018382352941176) 100%);}
            .logo_wrap{display: flex;flex-direction: column;justify-content: center;align-items: center;padding-top: 30px;}
            .logo_wrap .logo img{width: 50px;}
            .logo_wrap .tiktok img{width: 150px;}
            .text {margin: 50px auto;text-align: center;border-radius:5px;background: #ea8d2d00; width: 70%; padding: 15px 0;}
            .text p{text-shadow:0 0 15px #ea8d2d7a;font-size: 20px; font-weight: bold; letter-spacing: 1px; color: #ffffff;margin-bottom: 10px;text-transform: uppercase;}
            .btn{font-weight: 600;width: 60%;background-color: rgb(254, 44, 85);border-radius: 2px;color: rgb(255, 255, 255);
                    font-style: normal;
                    font-size: 20px;
                    line-height: 18px;
                    border: none;
                    height: 44px;
                text-transform: uppercase;
            display: flex;justify-content: center;align-items: center;
        margin: auto;letter-spacing: 1px;}
            .btn a{text-decoration: none;color: #fff;}
        
        </style>
	</head>
	<body>
    <!-- REGULATIONS -->
    <!-- TikTok +18 are available for users who mark that they are at least 18 years old and confirm an e-mail. -->
        <div class="bg_blur"></div>
        <div class="container">
            <div class="logo_wrap">
                <div class="logo"><img src="/app/views/landing/logo.png" alt=""></div>
                <div class="tiktok"><img src="/app/views/landing/tiktok.png" alt=""></div>
            </div>
            <div class="text">
                <p>1.<?= $register ?></p>
                <p>2. <?= $confirm ?></p>
                <p>3. <?= $see ?></p>
            </div>
            <div class="btn"><a href="<?=$redirect?>">FREE <?= $register ?></a></div>
        </div>
	</body>
</html>