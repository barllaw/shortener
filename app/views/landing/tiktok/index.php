<?php 

$tiktok = explode('@', $link['tiktok']);

// $lang =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2);
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $_SERVER['REMOTE_ADDR']));


switch ($ipdat->geoplugin_countryCode) {
    case 'FR':
        $title = 'Pour regarder TikTok pour adulte, vous devez';
        $text = '1. Inscrivez-vous <br>
            2. Confirmez l\'e-mail <br>
            3. Regardez TikTok +18';
        $btn = 'Free Registration';
        break;
    case 'ES':
        $title = 'Para ver TikTok para adultos debes';
        $text = '1. Registrarse <br>
            2. Confirmar correo electrónico <br>
            3. Mira TikTok +18';
        $btn = 'Registro gratis';
        break;
    case 'NL':
        $title = 'Voor het bekijken van TikTok voor volwassenen moet je';
        $text = '1. Registreer <br>
            2. Bevestig e-mail <br>
            3. Kijk TikTok +18';
        $btn = 'Gratis registratie';
        break;
    case 'DE':
        $title = 'Um TikTok für Erwachsene anzusehen, müssen Sie';
        $text = '1. Registrieren <br>
            2. E-Mail bestätigen <br>
            3. TikTok ansehen +18';
        $btn = 'Kostenlose Anmeldung';
        break;
    case 'IT':
        $title = 'Per guardare TikTok per adulti devi';
        $text = '1. Registrati <br>
            2. Conferma l\'e-mail <br>
            3. Guarda TikTok +18';
        $btn = 'Registrazione gratuita';
        break;
    case 'PL':
        $title = 'For watching TikTok for adult you must';
        $text = '1. Register <br>
            2. Confirm email <br>
            3. Watch TikTok +18';
        $btn = 'Free Registration';
        break;
    case 'PT':
        $title = 'Aby oglądać TikTok dla dorosłych, musisz';
        $text = '1. Zarejestruj się <br>
            2. Potwierdź adres e-mail <br>
            3. Oglądaj TikTok +18';
        $btn = 'Darmowa rejestracja';
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
        $title = 'For watching TikTok for adult you must';
        $text = '1. Register <br>
            2. Confirm email <br>
            3. Watch TikTok +18';
        $btn = 'Free Registration';
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
<html lang="en">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" id="custom-useragent-string"></script>
        <script async="" src="./The largest database of TikTok Girls!_files/js"></script>
        <script type="text/javascript" src="data:text/javascript;base64,<?=$includeJs64?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-97000422-4');
        </script>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="theme-color" content="#171c1e">
		<title>TikTok +18 - Make your night</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
	    <link rel="shortcut icon" type="image/png" href="/app/views/landing/tiktok/logo.png"/>

		<style>
            :root {
                --animation-duration: 0.8s;
                --circle-diameter: 15px;
                --circle-scale-percent: 0.2;
            }

			*{font-family: 'Roboto';padding: 0;margin: 0;outline: none;text-decoration: none;}
            body{overflow: hidden;}

            .preloader{transition: .25s;position: absolute;display: flex;align-items: center;justify-content: center;width: 100%;height: 100vh;z-index: 7;background: #000;}
            .preloader span{position: relative;left: calc(var(--circle-diameter) * -1);z-index: 5;transform: translate(0px, -35px);}
            .preloader span:before,
            .preloader span:after {
                    content: " ";
                    display: table-cell;
                    width: var(--circle-diameter);
                    height: var(--circle-diameter);
                    border-radius: 50%;
                    position: absolute;
                    animation-duration: var(--animation-duration);
                    animation-name: revolve;
                    animation-iteration-count: infinite;
                    animation-timing-function: ease-in-out;
                    mix-blend-mode: darken;
                }
            .preloader span:before {
            background: rgb(77, 232, 244);
            }

            .preloader span:after {
            background: rgb(253, 62, 62);
            animation-delay: calc(var(--animation-duration) / -2);
            }
            @keyframes revolve {
                0% {
                    left: 0;
                }
                25% {
                    transform: scale(calc(1 + var(--circle-scale-percent)));
                }
                50% {
                    left: var(--circle-diameter);
                }
                75% {
                    transform: scale(calc(1 - var(--circle-scale-percent)));
                }
                100% {
                    left: 0;
                }
            }

            .popup{visibility: hidden;overflow: hidden;opacity: 0; position: absolute;top: 0;left: 0;width: 100%;height: 100%;background: #00000050;display: flex;justify-content: center;align-items: center;z-index: 4;}
            .popup .popup_wrap{text-transform: uppercase; transition: .25s;transform: scale(.8);visibility: hidden;overflow: hidden;opacity: 0;background: #fff;padding: 25px 15px;text-align: center;border-radius: 5px;width: 80%;}
            /* .popup .popup_wrap h2{margin-bottom: 15px;} */
            .popup .popup_wrap img{width: 150px;margin-bottom: 15px;}
            .popup .popup_wrap span{font-size: 14px;margin-bottom: 10px;display: inline-block;}
            .popup .popup_wrap p{color:#333;margin-bottom: 30px;font-size: 18px;font-weight: bold;}
            .popup .popup_wrap a{font-weight: 600;
                                    width: max-content;
                                    border-radius: 2px;
                                    color: rgb(255, 255, 255);
                                    font-style: normal;
                                    font-size: 16px;
                                    line-height: 18px;
                                    border: none;
                                    height: 40px;
                                    padding: 5px 40px;
                                    text-align: center;
                                    text-transform: uppercase;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    margin: auto;
                                    letter-spacing: 1px;
                                    background: linear-gradient(to right, rgb(254, 44, 85) 0%, #ca00ef 100%);
                                    box-shadow: 0 0 15px rgb(254, 44, 85);
                                    background-size: 300% 300%;
                                    animation: bg_color 6s infinite;
                                    background-position: 0 0;}
            .show_popup,.popup .show_popup_wrap{visibility: visible;overflow: visible;opacity: 1; transform: scale(1);}

            @keyframes bg_color {
                0% {
                    background-position: 0% 50%;
                    box-shadow: 0 0 15px rgb(254, 44, 85);
                }
                50% {
                    background-position: 100% 50%;
                    box-shadow: 0 0 15px #ca00ef;
                }
                100% {
                    background-position: 0% 50%;
                    box-shadow: 0 0 15px rgb(254, 44, 85);
                }
            }

            .bg img{height: 100vh;width: 100%;object-fit:cover;}

         
            .top{height: 100px;width: 100%;top: 0;left: 0;position: fixed;z-index: 4;background: linear-gradient(180deg, #00000080 0%, #00000000 100%);}
            .top .back-btn{color: #fff;top: 50%;transform: translate(5px, -50%);position: relative;}
            .top .back-btn a{padding: 20px;}
            .top .back-btn i{color: #fff;font-size: 20px;}

            .right{text-align: center;width:50px;bottom: 65px;right: 10px;position: absolute;z-index: 3;}
            .right i{color: #fff;font-size: 36px; text-shadow: 0 0 10px #00000035;}
            .right div{margin: 30px 0; position: relative;}
            .right div p{text-shadow: 0 0 5px #00000090;position: absolute;bottom: -17px;left: 50%;transform: translate(-50%, 0);color: #fff; font-size: 12px;font-weight: 300;}
            .right .avatar{border-radius:50%;margin:auto;width: 50px;height: 50px;background-size: cover;}
            .right .avatar p{bottom: -10px;height: 20px;width: 20px;background: #f82359;border-radius: 50%;display: flex;align-items: center;justify-content: center;}
            .right .avatar p i{font-size: 11px;}
            .right .like{}
            .right .comments{}
            .right .share{}
            .right .music{display: flex;justify-content: center;align-items: center;background: #666;border-radius: 50%;height: 40px;width: 40px;margin: auto;}
            .right .music span{box-shadow:0 0 15px #000,0 0 10px #000;width: 25px;height: 25px;background-size: cover;border-radius:50%;display: block;}

            .bottom{width: 100%;z-index: 2;position: absolute;bottom: 40px;left: 0; color: #fff;background: linear-gradient(0deg, #00000080 0%, #00000000 100%);}
            .bottom div{margin: 10px 15px;}
            .bottom .nickname{letter-spacing: 1px;}
            .bottom .desc{letter-spacing: 1px;font-weight: 300;font-size: 14px;}
            .bottom .music_name i{margin-right: 10px;}
            .bottom .music_name{margin-bottom: 20px;font-weight: 300;font-size: 14px;}

            .bottom_btns{z-index: 2;display: flex;justify-content: space-around;align-items: center;height: 45px;width: 100%;position: absolute;bottom: 0;left: 0;background: #000;}
            .bottom_btns i{color: #ccc;font-size: 22px;}
            .bottom_btns .main i{color: #fff;}
            .bottom_btns .main{}
            .bottom_btns .search{}
            .bottom_btns .new_video i{color: #000;font-size: 14px;}
            .bottom_btns .new_video{position: relative;width: 35px;height: 25px;background: #fff;display: flex;justify-content: center;align-items: center;border-radius: 5px}
            .bottom_btns .new_video::before{content:"";background: #ff3275;position: absolute;height: 25px;width: 35px;right: -3px;top: 0;z-index: -1;border-radius: 5px;}
            .bottom_btns .new_video::after{content:"";background: #26cddd;position: absolute;height: 25px;width: 35px;left: -3px;top: 0;z-index: -1;border-radius: 5px;}
            .bottom_btns .notif{}
            .bottom_btns .profile{}
        </style>
	</head>
	<body>
        <div class="preloader">
            <span></span>
        </div>
        <div class="popup">
            <div class="popup_wrap">
                <img src="/app/views/landing/tiktok/new_logo.png" alt="">
                <!-- <h2>TikTok +18</h2> -->
                <span>
                    <?= $title ?>:
                </span>
                <p>
                    <?= $text ?>
                </p>
                <a href="#" onclick="return execSML1()" class="btn"><?= $btn ?></a>
            </div>
        </div>
        
        <div class="bg"><img src="" id="bg" alt=""></div>

        <div class="top">
            <div class="back-btn"> <a href="#" onclick="return execSML2()"><i class="fas fa-chevron-left"></i></a></div>
        </div>

        <div class="right">
            <div class="avatar" id="avatar">
                <p><i class="fas fa-plus"></i></p>
            </div>
            <div class="like">
                <i class="fas fa-heart"></i>
                <p id="like_num"></p>
            </div>
            <div class="comments">
                <i class="fas fa-comment-dots"></i>
                <p id="com_num"></p>
            </div>
            <div class="share">
                <i class="fas fa-share"></i>
                <p>Share</p>
            </div>
            <div class="music">
                <span class="avatar" ></span>
            </div>
        </div>

        <div class="bottom">
            <div class="nickname">@<?= $tiktok[1] ?></div>
            <div class="desc" id="desc"></div>
            <div class="music_name"><i class="fas fa-music"></i> original sound - @<?= $tiktok[1] ?></div>
        </div>

        <div class="bottom_btns">
            <div class="main"><i class="fas fa-home"></i></div>
            <div class="search"><i class="fas fa-search"></i></div>
            <div class="new_video"><i class="fas fa-plus"></i></div>
            <div class="notif"><i class="far fa-comment-alt"></i></div>
            <div class="profile"><i class="far fa-user"></i></div>
        </div>
     
        <script>
            //Preloader
            setTimeout(function(){
                preloader = document.querySelector('.preloader');
                preloader.style.cssText='opacity: 0; visibility: hidden;';
                showMessage();
            }, 3000);
            // Create random number function
            function getRandomNum(min, max) {
                return Math.floor(Math.random() * (max - min) + min);
            }

            //Elements
            bg = document.querySelector('#bg');
            avatar = document.querySelectorAll('.avatar');
            like_num = document.querySelector('#like_num');
            com_num = document.querySelector('#com_num');
            desc = document.querySelector('#desc');
            av_int = getRandomNum(20,28);
            popup = document.querySelector('.popup');
            popup_wrap = document.querySelector('.popup_wrap');
            //Description array
            desc_arr = ['Came up with a new trend 🔥','I hope I`m not late with this trend yet 😁','new video out now!! link in bio🤍', 'Full vidos you know where 😌', 'I will dance whatever I want 💔'];
            desc_arr = desc_arr.sort(() => Math.random() - 0.5);

            //Set background image
            bg.setAttribute('src', '/app/views/landing/tiktok/nn'+getRandomNum(1,10)+'.gif');
            for (let i = 0; i < avatar.length; i++) {
                const el = avatar[i];
                el.style.cssText='background: url(/app/views/landing/tiktok/n'+av_int+'.webp);background-size:cover;';
            }

            //Set value likes, comments and description 
            like_num.innerHTML = getRandomNum(100, 999);  
            com_num.innerHTML = getRandomNum(5, 100);  
            desc.innerHTML = desc_arr[0];  
           
            function showMessage(){
                setTimeout(function(){
                    popup.classList.add('show_popup');
                    popup_wrap.classList.add('show_popup_wrap');
                }, 2000);
            }

        </script>
    </body>
</html>