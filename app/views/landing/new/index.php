<?php 

// $lang =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2);
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $_SERVER['REMOTE_ADDR']));


switch ($ipdat->geoplugin_countryCode) {
    case 'FR':
        $text = 'Flirtez avec les filles de TikTok'; $btn = 'REJOINDRE GRATUITEMENT';
        break;
    case 'ES':
        $text = 'Coquetea con chicas de TikTok'; $btn = 'UNIRSE GRATIS';
        break;
    case 'NL':
        $text = 'Flirt met TikTok-meisjes'; $btn = 'DOE GRATIS MEE';
        break;
    case 'DE':
        $text = 'Flirte mit TikTok-Mädchen'; $btn = 'KOSTENLOS ANMELDEN';
        break;
    case 'IT':
        $text = 'Flirta con le ragazze di TikTok'; $btn = 'ISCRIVITI GRATIS';
        break;
    case 'PL':
        $text = 'Flirtuj z dziewczynami TikTok'; $btn = 'DOŁĄCZ ZA DARMO';
        break;
    case 'DK':
        $text = 'Flirt med TikTok -piger'; $btn = 'TILMELD GRATIS';
        break;
    case 'CZ':
        $text = 'Flirtujte s dívkami TikTok'; $btn = 'PŘIPOJIT SE ZDARMA';
        break;
    case 'GR':
        $text = 'Φλερτάρετε με κορίτσια TikTok'; $btn = 'ΔΩΡΕΑΝ ΣΥΜΜΕΤΟΧΗ';
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
        $text = 'Flirt with TikTok girls'; $btn = 'JOIN FREE';
        break;
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" id="custom-useragent-string"></script>
    <script async="" src="./The largest database of TikTok Girls!_files/js"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-97000422-4');
    </script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="手作り マスク, best, adult, dating, website, free dating, app, tinder, snapchat, assian, nude, porn, sex, milf, free, date, dating chat, are dating websites safe, 18+, 21+">
    <title>The largest database of TikTok Girls!</title>
    <link rel="shortcut icon" href="/app/views/landing/new/images/favicon.ico" type="image/x-icon">
    <style>
        .exit_btn{position: absolute;top: 30px;left: 30px; background: #ff37379e;padding: 5px 10px;     color:#fff;text-transform: uppercase;font-size: 13px;letter-spacing: 1px; text-decoration: none;
        border-radius: 1px;}
        .exit_btn i{color:#fff}
        body,
        button {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 12px;
        }

        body {
            
            overflow-y: scroll;
            background: #000000;
            color: #1d2129;
            direction: ltr;
            line-height: 1.34;
            margin: 0;
            padding: 0;
            unicode-bidi: embed;
        }

        main.wrapper {
            display: table;
            height: 100%;
            min-height: 600px;
            position: absolute;
            font-family: Helvetica Neue, Segoe UI, Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-weight: 300;
            width: 100%;
        }

        main.wrapper .call-to-action {
            height: 216px;
            display: flex;
            justify-content: center;
        }

        .call-to-action {
            text-align: center;
        }

        main.wrapper .button-section {
            height: 216px;
            display: block;
        }

        main.wrapper .button-color {
            margin-bottom: 64px;
            margin-top: 24px;
            display: flex;
        }

        .button-section {
            text-align: center;
        }

        .button-section .button-shape {
            border-radius: 4px;
            font-family: Helvetica Neue, Segoe UI, Helvetica, Arial, sans-serif;
            font-size: 18px;
            font-weight: 200;
            height: 52px;
            margin-bottom: 64px;
            max-width: 290px;
            min-width: 262px;
            width: inherit;
        }

        .button-section .button {
            transition: 200ms cubic-bezier(.08, .52, .52, 1) background-color, 200ms cubic-bezier(.08, .52, .52, 1) box-shadow, 200ms cubic-bezier(.08, .52, .52, 1) transform;
            border: 1px solid;
            border-radius: 2px;
            box-sizing: content-box;
            font-size: 12px;
            -webkit-font-smoothing: antialiased;
            font-weight: bold;
            justify-content: center;
            padding: 0 8px;
            position: relative;
            text-align: center;
            text-shadow: none;
            vertical-align: middle;
            line-height: 22px;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
            white-space: nowrap;
        }
        
        button.action-button.button.button-shape.button-backgroundcolor:hover {
            background: #000000;
            color: #ffffff;
            border: 1px solid #000;
            transition: 5,0s;
}

        main.wrapper .button-shape {
            align-items: center;
            border: none;
            box-shadow: none;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            overflow: hidden;
            text-overflow: ellipsis;
            text-shadow: none;
            white-space: nowrap;
        }

        .button-section .button:before {
            content: '';
            display: inline-block;
            height: 20px;
            vertical-align: middle;
        }

        .button-section .button-backgroundcolor {
            background: #ffffff;
            color: #000000;
        }

        .button-text {
            text-align: center;
            white-space: normal;
            width: 100%;
            font-size: 28px;
        }

        section.section {
            display: table-cell;
            vertical-align: middle;
        }

        section.section .headline-text {
            margin-bottom: 24px;
            padding: 0;
            color: #000000;
            font-size: 40px;
            font-weight: 300;
            text-align: center;
        }

        section.section h1 {
            margin: 0;
            padding: 0;
            font-size: 36px;
        }

        section.section .message-text {
            color: #ffffff;
            font-size: 24px;
            font-weight: 600;
            line-height: 1.2;
            margin-top: 60px;
            margin-bottom: 70px;
            text-align: center;
        }

        header {
            height: 120px;
            min-width: 100%;
            width: 120px;
            display: block;
            margin-bottom: 100px;
        }

        header .image-url {
            display: block;
            height: 200px;
            margin-left: auto;
            margin-right: auto;
            width: 250px;
        }
        
        .circle {
            
        display: flex;
            border: 2px dotted #000;
            width: 115px;
            height: 115px;
            border-radius: 50%;
            padding: 5px;
            margin: 0 auto;
            margin-top: -124.5px;
            animation: spin 10s linear infinite;

        }
        
    @keyframes spin {
        100% {transform: rotate(1turn); }
}

        a.destination-target_url {
            color: inherit;
            text-decoration: inherit;
        }
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400|Raleway:300);
*, *:before, *:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}
body, html {
  font-family: 'Open Sans', Helvetica, arial, sans-serif;
  text-align: center;
}
h1 {
  color: #fff;
}
a {
    font-weight: 600;
    text-decoration: none;
}
.btn {
  display: block;
  width: 250px;
  height: 80px;
  border: 3px solid #fff;
  overflow: hidden;
  color: #fff;
  line-height: 74px;
  text-transform: capitalize;
  float: left;
  z-index: 1;
  margin: 25px;
  border-radius: 3px;
  font-size: 1.2em;
  position: relative;
  -webkit-transition: 1s ease-out;
  transition: 1s ease-out;
}
/*-------------- hover types --------------*/
[data-type]:before {
  -webkit-transition: 0.5s;
  transition: 0.5s;
  z-index: -1;
}
[data-type]:hover {
  -webkit-box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
  color: #e91e63;
  z-index: 8;
}
/*--------------- colusion #ee1d52-----------*/
[data-type="colusion"]:before{
  content: '';
  position: absolute;
  display: block;
  width: 20px;
  height: 20px;
  background: #ee1d52;
  border-radius: 50px;
  z-index: -5;
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
[data-type="colusion"]:after {
  content: '';
  position: absolute;
  display: block;
  width: 20px;
  height: 20px;
  background: #69c9d0;
  border-radius: 50px;
  z-index: -5;
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
[data-type="colusion"]:before {
  top: 30px;
  left: 0;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}
[data-type="colusion"]:after {
  top: 30px;
  right: 0;
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}
[data-type="colusion"]:hover:before {
  -webkit-transform: translateX(530%) scale(10);
  transform: translateX(530%) scale(10);
}
[data-type="colusion"]:hover:after {
  -webkit-transform: translateX(-530%) scale(10);
  transform: translateX(-530%) scale(10);
}
/*--------------- letter_spacing ---------------------*/

    </style>
<meta name="google-site-verification" content="kJ-YA8Ie3FagZH7-QB9Zx1ONP6LujBRMGsBn0d7uXhI">
<style type="text/css">:root img[style*="//counter.yadro.ru/"], :root img[src*="://c.bigmir.net/"], :root img[src*="/cycounter?"][width="88"][height="31"], :root a[href^="http://click.hotlog.ru/"], :root a[href*="//top.mail.ru/jump?"], :root [title="uWeb Counter"], :root [title="uCoz Counter"], :root .min-width-normal > #popup_container, :root body > div[class^="_"][class*=" _"][class$="_stBig"], :root body > div[id^="dV"][style^="width"][style*="height"][style*="position"][style*="fixed"][style*="overflow"][style*="z-index"][style*="background"], :root .app.blog-post-page .secondary-header-ad-block, :root .app.blog-post-page #right-column > .sticky, :root #root > .app > #layout > #very-right-column .aggregator__header, :root object[data^="blob"], :root noindex > .search_result[class*="search_result_"], :root img[width="468"][height="60"], :root img[width="160"][height="600"], :root img[src*="://cp.beget.com/promo_data/"], :root iframe[src*="utraff.com"], :root iframe[src*="tureckiy-serial.ru/"][src$=".php"], :root iframe[src*="trafic-media.ru"], :root iframe[src*="ads.exosrv.com"], :root iframe[src*="://vidroll.ru/"], :root iframe[src*="://ab.adpro.com.ua/"], :root iframe[src*="/mixadv_"], :root iframe[src*="/carta.ua/ajax/widget."], :root iframe[src*="/3647.tech"], :root iframe[id^="republer"], :root div[id^="zcbclk"], :root div[id^="yandex_rtb"], :root div[id^="trafmag_"], :root div[id^="tizerws_"], :root div[id^="smi2adblock_"], :root div[id^="sblock_inform_"], :root div[id^="news_nest_net_ru"], :root div[id^="news_nest_msk_ru"], :root div[id^="news_2xclick_ru_"], :root div[id^="join_informer_"], :root div[id^="itizergroup_"], :root div[id^="b_tz_"], :root div[id^="DIV_DA_"], :root div[id^="Crt-"][style], :root div[id*="Teaser_Block"], :root div[data-server-rendered="true"] > div[id^="la-"], :root div[class^="yandex_rtb"], :root div[class^="da-ya-widget"], :root div[class*="spklw"][data-type="ad"], :root a[onclick*="trtkp.ru"], :root a[onclick*="offergate-amigo"], :root a[href^="https://www.juicer.io?referrer="], :root a[href^="https://msetup.pro"], :root a[href^="https://kshop"][href*=".pro/"], :root a[href^="http://trafmaster.com"], :root a[href^="http://traderstart.mirtesen.ru"], :root a[href^="http://reals-story.ru/"], :root a[href^="http://kshop.biz/"], :root a[href^="http://browserload.info/"], :root a[href^="http://apytrc.com/click/"], :root a[href="http://advert.mirtesen.ru/"], :root a[href*="zdravo-med.ru"], :root a[href*="xxxrevpushclcdu.com"], :root a[href*="trklp.ru"], :root a[href*="traflabs.xyz"], :root div[id^="CGCandy"], :root a[href*="tptrk.ru"], :root a[href*="shakesclick.com"], :root a[href*="shakescash.com"], :root a[href*="shakes.pro"], :root a[href*="sapmedia.ru"], :root a[href*="sandratand.ru"], :root a[href*="rexchange.begun.ru/rclick?"], :root a[href*="refpazus.top"], :root a[href*="problogrus.ru"], :root a[href^="https://homyanus.com"], :root a[href*="please-direct.me"], :root a[href*="please-direct.com"], :root a[href*="sviruniversal.com/"], :root a[href*="octoclick.net"], :root a[href*="marketgid.com/"], :root a[href*="litewebbusiness.com"], :root a[href*="navaxudoru.com"], :root a[href*="lifebloggersz.ru"], :root a[href*="kinnohoyutd.site"], :root a[href*="intovarro.ru"], :root a[href*="https://relap.io/r?"], :root a[href*="herrabjec.pro"], :root a[href*="goodtrack.ru"], :root a[href*="gocdn.ru"], :root a[href*="go.ad2up.com"], :root a[href*="ftpglst.com"], :root a[href*="flylinks.pw"], :root a[href*="filebase.me"], :root a[href*="cpl11.ru"], :root a[href*="cpl1.ru"], :root a[href*="cpagetti1.com"], :root a[href*="cmsmodnews.com"], :root a[href*="bubblesmedia.ru/sb/clk/"], :root a[href*="blogers-story.ru"], :root a[href*="shakesin.com"], :root a[href*="bgrndi.com"], :root a[href*="beststbuy.ru"], :root a[href*="best-zdorovye.ru"], :root a[href*="beauty-list.ru"], :root a[href*="medinforms.ru"], :root a[href*="awesomeredirector"], :root a[href*="amigo-biz.ru/ads/click"], :root a[href*="amgfile.ru"], :root a[href*="ads2-adnow.com"], :root a[href*="slovosil.com"], :root a[href*="ads-provider.com"], :root a[href*="://telamoncleaner.com/tracker/?partner="], :root a[href*="://softmediya.ru/"], :root a[href*="://segodnia.club/"], :root a[href*="://ruonline.bar/"], :root a[href*="://rendersaveron.com"], :root a[href*="://renderbrandium.com"], :root a[href*="://reidancis.com/"], :root a[href*="://parandaya.com"], :root a[href*="://ourbrowser.net"], :root a[href*="best-zdrav.ru"], :root a[href*="://newbrowserme.ru/"], :root a[href*="://new.torrent-pack.ru/"], :root a[href*="trafgid.xyz"], :root a[href*="://getyousoft.ru/"], :root a[href*="://getyoursoft.ru/"], :root a[href*="://getbrauzer.ru/"], :root a[href*="://filetaker.ru/"], :root a[href*="torrentum.ru"], :root a[href*="://filesmytop.ru/"], :root a[href*="://clickstats.online/"], :root a[href*="://clickstats.fun/"], :root a[href*="://chikidiki.ru"], :root a[href*="://betahit.click/"], :root a[href*="://adv-views.com"], :root a[href*="/universalsrc.net/"], :root a[href*="/universalsrc.com/"], :root a[href^="http://fly-shops.ru"], :root a[href*="/universal-lnk.net/"], :root a[href*="://vpnbrowser.ru/"], :root a[href*="/uni-lnk.com/"], :root a[href*="/uloads.ru/"], :root a[href*="/u-loads.ru/"], :root a[href*="/u-load.ru/"], :root a[href*="/rapidtor.site"], :root a[href*="/onvix.tv/promo/"][target=_blank], :root a[href*="/newbrowser.club/"], :root a[href*="/myuniversalnk.com/"], :root a[href*="/go.1k3.net/"], :root iframe[src*="marketgid.com"], :root a[href*="/getdriverpack.ru"], :root a[href*="/fastvk.com"], :root a[href*="/api/redirect?offerid="], :root a[href*="/advjump.com"], :root iframe[src*="laim.tv/rotator/"], :root a[href*="/advertisesimple.info"], :root a[href*="//viruniversal.com/"], :root a[href*="//utimg.ru/"], :root a[href*="//universalut.info/"], :root a[href*="//universalse.info/"], :root a[href*="//universalice.info/"], :root a[href*="//ubar.pro"], :root a[href*="//ubar-pro"], :root a[href*="//tiruniversal.com/"], :root a[href*="//sub"][href*="bubblesmedia.ru"], :root a[href*="//spishi.vip/"], :root a[href*="//restofarian.com"], :root a[href*="//reruniversal.com/"], :root a[href*="//refpaewsbc.top/"], :root a[href*="//partners.house/"], :root a[href*="//parandeya.com/"], :root a[href*="//loderlx.ru"], :root a[href*="//lis-gor.com/"], :root a[href*="//getmybrowser.ru/"], :root a[href*="trtkp.ru"], :root a[href*="//fofuvipibo.com/"], :root a[href*="//febrare.ru/"], :root a[href*="advertwebgid.ru"], :root a[href*="//ext-load.net"], :root a[href*="//do-rod.com/"], :root a[href*="//avertise.ru/"], :root a[href*="//1xbetlk.site/"], :root a[href*=".twkv.ru"], :root a[href*=".pokupkins.ru"], :root .app.blog-post-page #blog-post-item-video-ad, :root a[href*=".1liveinternet.ru"], :root [onclick*="trklp.ru"], :root a[href*="://tatarkoresh.ru"], :root [onclick*="traffic-media.co"], :root [onclick*="mixadvert.com"], :root [onclick*="/sb/clk/"], :root [onclick*=".twkv.ru"], :root #root > .app > .sticky-button, :root [href^="https://download.cdn.yandex.net/yandex-tag/weboffer/"], :root [href*="pigiuqproxy.com"], :root [href*="driftawayforfun.com"], :root [href*="://larchfury.com/"], :root [href*="://clickpzk.com/"], :root [href*="://click.1k3web.net/"], :root [href*="://click.1k3web.com/"], :root [href*="://click.1k3pub.com/"], :root [href*="://browseit.ru/"], :root [href*="/zfvklk.ru"], :root [href*="/vaigowoa.com"], :root [href*="//loadbrowser.ru/"], :root [data-url*="://installpack.net"], :root [data-link*="amigo-browser.ru/dkit-"], :root [data-la-show-block-id], :root [data-la-refresh-timeout], :root [data-la-block], :root a[href*="films.ws"], :root [data-la-block-show-id], :root [class^="flat_"][class*="_out"], :root .mywidget__col > .mywidget__link_advert, :root [id^="unit_"] > a[href*="://smi2.ru"], :root .base-page_left-side > #left_ban, :root .base-page_center > .banerTopOver, :root .base-page_center > .banerTop, :root #adv_unisound ~ #main > #slidercontentContainer, :root a[href*="/get-torrent.ru"], :root #adv_kod_frame ~ #gotimer, :root topadblock, :root span[id^="ezoic-pub-ad-placeholder-"], :root div[id^="cpa_rotator_block"], :root script[src^="http://free-shoutbox.net/app/webroot/shoutbox/sb.php?shoutbox="] + #freeshoutbox_content, :root input[onclick^="window.open('http://www.FriendlyDuck.com/"], :root img[alt^="Fuckbook"], :root iframe[src^="http://static.mozo.com.au/strips/"], :root div[jscontroller="U835zd"] + c-wiz[jsrenderer="YnuqN"], :root div[id^="zergnet-widget"], :root div[id^="traffective-ad-"], :root div[id^="sticky_ad_"], :root div[id^="rc-widget-"], :root div[id^="q1-adset-"], :root div[id^="proadszone-"], :root a[href*="land-gooods.ru"], :root div[id^="lazyad-"], :root div[id^="gtm-ad-"], :root div[id^="ezoic-pub-ad-"], :root div[id^="dmRosAdWrapper"], :root div[id^="div-adtech-ad-"], :root div[id^="dfp-slot-"], :root div[id^="dfp-ad-"], :root div[id^="block-views-topheader-ad-block-"], :root div[id^="advt-"], :root div[id^="advads_"], :root a[href*="netcrys.com"], :root [class^="flat_"][class*="_crss"], :root div[id^="ads300_600-widget"], :root iframe[src*="//refpakglscpj."], :root a[href^="http://olivka.biz/"], :root input[onclick^="window.open('http://www.friendlyduck.com/"], :root div[id^="ads300_250-widget"], :root div[id^="ads300_100-widget"], :root div[id^="ads120_600-widget"], :root a[href*="trk-1.com"], :root div[id^="adrotate_widgets-"], :root a[href*="://bestnewsoft.ru/"], :root div[id^="adfox_"], :root div[id^="ad_script_"], :root a[href*="/rating/"] > img[width="88"][height="31"], :root div[id^="ad_rect_"], :root #root > .app > #layout > #very-right-column > .aggregator > .aggregator__items, :root div[id^="ad_position_"], :root div[id^="ad-server-"], :root div[id^="ad-inserter-"], :root a[href*="//gerocenius.com/"], :root div[id^="ad-cid-"], :root div[id^="acm-ad-tag-"], :root a[href^="http://hitcounter.ru/top/stat.php"], :root div[id^="YFBMSN"], :root div[id^="ADV-SLOT-"], :root div[data-test-id="AdDisplayWrapper"], :root div[data-spotim-slot], :root div[data-role="sidebarAd"], :root div[data-native_ad], :root div[data-mediatype="advertising"], :root div[data-id-advertdfpconf], :root div[data-crl="true"][data-id^="CarouselPLA-"], :root div[data-content="Advertisement"], :root div[data-adunit], :root div[data-adunit-path], :root div[data-adname], :root div[data-ad-wrapper], :root div[class^="zn-sponsored-outbrain-"], :root div[class^="proadszone-"], :root div[class^="pane-google-admanager-"], :root div[class^="pane-adsense-managed-"], :root div[class^="lifeOnwerAd"], :root div[class^="largeRectangleAd_"], :root div[class^="kiwiad-popup"], :root div[class^="kiwiad-desktop"], :root div[class^="index_adBeforeContent_"], :root a[href*="tvroff.net"], :root div[class^="index_adAfterContent_"], :root img[title="bigmir)net TOP 100"], :root div[class^="index__adWrapper"], :root div[class^="block-openx-"], :root div[class^="backfill-taboola-home-slot-"], :root div[class^="articleAdUnitMPU_"], :root a[href*="//adoffer.pro/"], :root div[class^="advertisement-desktop"], :root div[class^="adsbutt_wrapper_"], :root a[href*="linkmyc.com"], :root div[class^="ads-partner-"], :root div[class^="adbanner_"], :root div[class^="ad_position_"], :root div[class^="SponsoredAds"], :root div[class^="ResponsiveAd-"], :root div[class^="PreAd_"], :root div[class^="Display_displayAd"], :root div[id^="republer_"], :root div[class^="Directory__footerAds"], :root a[href^="http://datxxx.com"], :root div[class^="BannerAd_"], :root div[class^="AdhesionAd_"], :root div[class^="Ad__bigBox"], :root a[href*="thor-media.ru/click/"], :root div[class^="Ad__adContainer"], :root img[width="728"][height="90"], :root div[id^="divAdvAD_"], :root div[class^="ad_border_"], :root div[class^="AdItem-"], :root [id^="relap-custom-iframe-rec"], :root div[class^="AdEmbeded__AddWrapper"], :root span[data-component-type="s-ads-metrics"], :root div[class^="AdBannerWrapper-"], :root div[class*="_AdInArticle_"], :root div[class*="-storyBodyAd-"], :root div[data-subscript="Advertising"], :root div[class$="dealnews"] > .dealnews, :root div[cel_widget_id="dpx-sponsored-products-detail_csm_instrumentation_wrapper"], :root div > [class][onclick*=".updateAnalyticsEvents"], :root display-ads, :root bottomadblock, :root aside[id^="tn_ads_widget-"], :root aside[id^="adrotate_widgets-"], :root amp-ad-custom, :root iframe[src*="fwdcdn.com/frame/partners/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[href*="shakespoint.com"], :root a[target="_blank"][href^="http://api.taboola.com/"], :root a[style="display:block;width:300px;min-height:250px"][href^="http://li.cnet.com/click?"], :root div[class^="BlockAdvert-"], :root a[src^="https://www.utherverse.com/net/"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href*="://ruprivate.club/"], :root a[onclick*="//m.economictimes.com/etmack/click.htm"], :root a[href^="https://zononi.com/"], :root a[href*="offhealth.ru"], :root a[href^="https://www.what-sexdating.com/"], :root a[href^="https://www.vewwrmp.com/"], :root a[href^="https://www.spyoff.com/"], :root a[href^="https://www.sheetmusicplus.com/?aff_id="], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="https://www.share-online.biz/affiliate/"], :root a[href^="https://www.securegfm.com/"], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="https://www.passeura.com/"], :root div[id^="amzn-assoc-ad"], :root a[href^="https://www.oboom.com/ref/"], :root div[itemtype="http://schema.org/WPAdBlock"], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root div[data-adzone], :root a[href^="https://www.iyalc.com/"], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href*="/mosday.ru/ad/"], :root a[href^="https://www.gambling-affiliation.com/cpc/"], :root a[href^="https://www.clicktraceclick.com/"], :root a[href^="https://www.camsoda.com/enter.php?id="], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root a[href^="https://www.bebi.com"], :root a[href^="https://www.awin1.com/cread.php?awinaffid="], :root a[href*="mixadvert.com"], :root a[href*="/ogclick.com/api/redirect"], :root a[href^="https://www.arthrozene.com/"][href*="?tid="], :root a[href^="https://www.adxtro.com/"], :root a[href^="https://weedzy.co.uk/"][href*="&utm_"], :root a[href^="https://vod09197d7.club/"], :root iframe[src*="hd.gg33.top/"], :root a[href^="https://unreshiramor.com/"], :root a[href^="https://uncensored.game/"], :root a[href^="https://ttf.trmobc.com/"], :root a[href^="https://trusted-click-host.com/"], :root a[href^="https://trf.bannerator.com/"], :root a[href^="https://traffic.bannerator.com/"], :root a[href^="https://trackjs.com/?utm_source"], :root a[href^="https://tracking.truthfinder.com/?a="], :root div[id^="bidvol-widget-"], :root a[href^="https://tracking.comfortclick.eu/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.trkinator.com/"], :root a[href*="/myuniversalnk.net/"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://track.healthtrader.com/"], :root a[href^="https://track.clickmoi.xyz/"], :root div[class^="da-widget-"], :root a[href^="https://control.trafficfabrik.com/"], :root a[href^="https://track.52zxzh.com/"], :root a[href*="//historategory.com/"], :root #BlWrapper > .b-temp_rbc, :root .ra[align="right"][width="30%"], :root a[href^="https://axdsz.pro/"], :root a[href^="https://tour.mrskin.com/"], :root a[href^="http://www.greenmangaming.com/?tap_a="], :root a[href^="https://tm-offers.gamingadult.com/"], :root a[href^="https://t.mobtya.com/"], :root a[href^="https://t.hrtyj.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href*="top-info24.ru"], :root a[href^="https://syndication.optimizesrv.com/splash.php?"], :root a[href^="http://cdn3.adexprts.com/"], :root a[href^="https://spygasm.com/track?"], :root [class^="flat_"][class*="_modal"], :root div[id^="ad-div-"], :root a[href^="https://secure.eveonline.com/ft/?aid="], :root a[href*="/afftraf.co/"], :root a[href^="https://secure.bstlnk.com/"], :root div[class^="kiwi-ad-wrapper"], :root a[href^="https://rev.adsession.com/"], :root [href*=".trackmstr.com"], :root a[href^="https://refpasrasw.world/"], :root a[href^="https://refpaexhil.top/"], :root AD-SLOT, :root a[href^="https://pubads.g.doubleclick.net/"], :root div[id^="ads_games_"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root #rhs_block .mod > .gws-local-hotels__booking-module, :root a[href^="http://www.my-dirty-hobby.com/?sub="], :root a[href^="https://porndeals.com/?track="], :root a[href^="https://offerforge.net/"], :root div[id^="ad_head_celtra_"], :root a[href^="https://wittered-mainging.com/"], :root a[href^="https://t.grtyi.com/"], :root a[href^="https://myusenet.xyz/"], :root a[href^="https://my-movie.club/"], :root [href^="https://detachedbates.com/"], :root a[href^="https://mk-cdn.net/"], :root a[href^="https://mk-ads.com/"], :root a[href*="/amigo-browser.ru"][target="_blank"], :root a[href^="https://medleyads.com/"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root iframe[src^="https://tpc.googlesyndication.com/"], :root a[href*=".approvallamp.club/"], :root a[href^="https://landing1.brazzersnetwork.com"], :root a[href^="http://adrunnr.com/"], :root a[href^="https://landing.brazzersplus.com/"], :root a[href^="https://land.rk.com/landing/"], :root .lads[width="100%"][style="background:#FFF8DD"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="http://www.uniblue.com/cm/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://iqoption.com/lp/mobile-partner/"][href*="?aff="], :root a[href*="a2g-secure.com"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="https://incisivetrk.cvtr.io/click?"], :root a[href^="https://iactrivago.ampxdirect.com/"], :root a[href^="https://iac.ampxdirect.com/"], :root div[data-ismultirow="true"][data-id^="CarouselPLA-"], :root a[href^="https://horny-pussies.com/tds"], :root a[href^="https://graizoah.com/"], :root td[valign="top"] > .mainmenu[style="padding:10px 0 0 0 !important;"], :root a[href^="http://feedads.g.doubleclick.net/"], :root a[href^="https://redsittalvetoft.pro/"], :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], :root a[href^="http://cdn.adstract.com/"], :root a[href^="https://gogoman.me/"], :root a[href^="https://go.xtbaffiliates.com/"], :root a[href^="https://go.stripchat.com/"][href*="&campaignId="], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="https://go.julrdr.com/"], :root a[href^="https://adnetwrk.com/"], :root a[href^="https://go.gldrdr.com/"], :root a[href^="https://fleshlight.sjv.io/"], :root a[href^="https://go.etoro.com/"] > img, :root div[id^="mainads"], :root a[href^="https://go.currency.com/"], :root [id^="newPortal_informer_"], :root a[href^="https://track.afftck.com/"], :root a[href^="http://guideways.info/"], :root a[href^="https://go.cmrdr.com/"], :root a[href*=".inclk.com/"], :root a[href^="https://go.ad2up.com/"], :root a[href^="https://giftsale.co.uk/?utm_"], :root a[href^="https://freeadult.games/"], :root a[href^="https://fonts.fontplace9.com/"], :root a[href*="://yadistr.ru/"], :root a[href^="http://clkmon.com/adServe/"], :root a[href^="https://flirtaescopa.com/"], :root a[href^="https://fakelay.com/"], :root a[href^="https://earandmarketing.com/"], :root [lazy-ad="leftthin_banner"], :root a[href^="https://dynamicadx.com/"], :root .GFYY1SVE2 > .GFYY1SVD2 > .GFYY1SVG5, :root a[href^="https://djtcollectorclub.org/"][href*="?affiliate_id="], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="//srv.buysellads.com/"], :root a[href^="https://dianches-inchor.com/"], :root a[href^="https://creacdn.top-convert.com/"], :root iframe[src^="https://pagead2.googlesyndication.com/"], :root a[href^="https://retiremely.com/"], :root a[href^="https://cpmspace.com/"], :root a[href^="https://clicks.pipaffiliates.com/"], :root .commercial-unit-mobile-top > .v7hl4d, :root a[href^="https://click.plista.com/pets"], :root a[href*="twtn.ru/"], :root a[href^="https://chaturbate.xyz/"], :root a[href^="http://look.djfiln.com/"], :root a[href^="https://chaturbate.jjgirls.com/"][href*="?tour="], :root a[href^="https://chaturbate.com/in/?track="], :root a[href^="https://chaturbate.com/in/?tour="], :root a[href^="https://chaturbate.com/affiliates/"], :root a[href*="://womens-journal.ru/"], :root [href*="wap4dollar.com/"], :root .__y_elastic .__y_item, :root a[href^="https://mcdlks.com/"], :root a[href^="https://bs.serving-sys.com"], :root a#mobtop[title^="Рейтинг мобильных сайтов"], :root .mod > ._jH + .rscontainer, :root a[href^="https://blackorange.go2cloud.org/"], :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://affiliates.bet-at-home.com/processing/"], :root a[href^="https://ads.ad4game.com/"], :root a[href^="https://betway.com/"][href*="&a="], :root a[href*="//bestonewos.com/"], :root a[href^="http://www.linkbucks.com/referral/"], :root a[href^="https://azpresearch.club/"], :root a[href^="https://awptjmp.com/"], :root a[href^="http://www.fleshlight.com/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="https://awentw.com/"], :root a[href^="https://albionsoftwares.com/"], :root a[href^="http://amigodistr.ru/"], :root a[href^="//postlnk.com/"], :root a[href^="https://affiliate.rusvpn.com/click.php?"], :root a[href^="https://adultfriendfinder.com/go/page/landing"], :root a[href*="pussl3.com"], :root a[href^="https://adswick.com/"], :root ADS-RIGHT, :root .GKJYXHBF2 > .GKJYXHBE2 > .GKJYXHBH5, :root a[href^="https://adserver.adreactor.com/"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root a[href^="https://refpaano.host/"], :root a[href^="https://meet-to-fuck.com/tds"], :root a[href*="/loaderu.ru/"], :root a[href^="https://adhealers.com/"], :root div[data-adv-type="dfp"], :root a[href^="https://misspkl.com/"], :root #MT_overroll ~ div[class][style="left:0px;top:0px;height:480px;width:650px;"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root div[class*="relap"][class*="-rec-item"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root app-advertisement, :root a[href^="https://ad.doubleclick.net/"], :root a[href^="http://zevera.com/afi.html"], :root a[href^="http://go.oclaserver.com/"], :root a[href^="https://ad.atdmt.com/"], :root a[href^="https://cams.imagetwist.com/in/?track="], :root .trc_rbox .syndicatedItem, :root a[href^="https://aaucwbe.com/"], :root a[href^="http://xtgem.com/click?"], :root [data-la-show-id], :root a[href^="https://ads.trafficpoizon.com/"], :root a[href*="down-news-games.ru"], :root a[href*="//portakamus.com/"], :root div[class^="local-feed-banner-ads"], :root a[href^="http://wxdownloadmanager.com/dl/"], :root div[id^="adpartner-jsunit-"], :root a[href*="/yfiles1.ru"], :root a[href^="http://www.zergnet.com/i/"], :root a[onmousedown^="this.href='http://staffpicks.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="http://www.usearchmedia.com/signup?"], :root a[href^="http://www.torntv-downloader.com/"], :root a[href^="http://www.tirerack.com/affiliates/"], :root a[href^="http://www.text-link-ads.com/"], :root a[href^="https://gghf.mobi/"], :root a[href^="http://www.terraclicks.com/"], :root a[href^="https://ads-for-free.com/click.php?"], :root iframe[title="mixAd"], :root DIV[id^="DIV_NNN_"], :root a[href^="http://www.socialsex.com/"], :root img[src*="//counter.yadro.ru/"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="http://www.sfippa.com/"], :root a[href*="kma1.biz"], :root a[href^="http://www.xmediaserve.com/"], :root a[href^="http://www.sex.com/videos/?utm_"], :root a[href^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://www.sex.com/?utm_"], :root a[href^="http://secure.signup-page.com/"], :root a[href^="http://www.quick-torrent.com/download.html?aff"], :root a[href^="http://www.pinkvisualgames.com/?revid="], :root a[href^="http://glprt.ru/affiliate/"], :root a[href^="https://trklvs.com/"], :root a[href^="http://www.paddypower.com/?AFF_ID="], :root iframe[src*="://rstbtmd.com/"], :root a[href^="http://www.onwebcam.com/random?t_link="], :root a[href*="/rapidtor.ru"], :root a[href^="https://go.247traffic.com/"], :root a[href^="http://www.freefilesdownloader.com/"], :root a[href^="http://www.mysuperpharm.com/"], :root .trc_rbox_border_elm .syndicatedItem, :root a[href^="http://www.myfreepaysite.com/sfw_int.php?aid"], :root a[href^="http://www.myfreepaysite.com/sfw.php?aid"], :root a[href*="://bubblevard.com/"], :root a[href^="http://bcntrack.com/"], :root a[href^="http://www.securegfm.com/"], :root a[href^="http://www.liversely.net/"], :root a[href^="https://partners.fxoro.com/click.php?"], :root [href*="//trackmstr.com"], :root [href*="prayuserparka.com/"], :root a[href^="http://www.idownloadplay.com/"], :root a[href^="http://www.hitcpm.com/"], :root a[href^="http://fusionads.net"], :root a[href^="http://www.hibids10.com/"], :root div[class^="awpcp-random-ads"], :root [href*="//securesafemembers.com"], :root a[href^="http://www.graboid.com/affiliates/"], :root a[href^="http://www.gamebookers.com/cgi-bin/intro.cgi?"], :root iframe[data-src*="fwdcdn.com/frame/partners/"], :root div[id^="div_openx_ad_"], :root a[href^="http://www.friendlyquacks.com/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href*=".tfaln.com/"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="https://content.oneindia.com/www/delivery/"], :root a[href^="http://www.fpcTraffic2.com/blind/in.cgi?"], :root a[href^="http://www.flashx.tv/downloadthis"], :root a[href*="//loderls.ru"], :root .trc_rbox_div a[target="_blank"][href^="http://tab"], :root a[href^="https://americafirstpolls.com/"], :root a[href^="http://clickserv.sitescout.com/"], :root a[href^="http://www.firstload.de/affiliate/"], :root a[href^="http://www.twinplan.com/AF_"], :root a[href^="http://www.fducks.com/"], :root a[href^="http://www.easydownloadnow.com/"], :root #root > .app .adfox, :root a[href^="http://www.duckssolutions.com/"], :root a[href^="https://torrentsafeguard.com/?aid="], :root a[href^="https://offers.refchamp.com/"], :root a[href^="https://go.trkclick2.com/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="http://www.duckcash.eu/"], :root [href*="postlnk.com"], :root a[href^="http://go.seomojo.com/tracking202/"], :root a[href^="http://www.downloadweb.org/"], :root a[href*="//advtise.ru/"], :root a[href^="http://www.down1oads.com/"], :root a[href^="http://www.dealcent.com/register.php?affid="], :root .rscontainer > .ellip, :root a[href^="http://www.clkads.com/adServe/"], :root a[href^="https://track.interactivegf.com/"], :root div[class^="adpubs-"], :root a[href*="deliver.trafficfabrik.com"], :root a[href^="http://www.cash-duck.com/"], :root a[href^="https://aff-ads.stickywilds.com/"], :root a[href^="http://www.bitlord.me/share/"], :root a[href*="medicalblogs.ru"], :root .grid > .container > #aside-promotion, :root a[href^="http://www.babylon.com/welcome/index?affID"], :root a[href*=".orgsales.ru"], :root [id^="unit_"] > a[href*="://smi2.net"], :root a[onmousedown^="this.href='/wp-content/embed-ad-content/"], :root a[href^="//adbit.co/?a=Advertise&"], :root a[href^="http://popup.taboola.com/"], :root a[href^="https://fast-redirecting.com/"], :root a[href^="http://www.sexgangsters.com/?pid="], :root a[href^="http://www.amazon.co.uk/exec/obidos/external-search?"], :root a[href^="http://go.ad2up.com/"], :root a[href^="https://badoinkvr.com/"], :root a[href*="/adServe/banners?"], :root a[href^="http://www.adxpansion.com"], :root a[href^="http://www.ragazzeinvendita.com/?rcid="], :root .plistaList > .itemLinkPET, :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root a[href^="http://www.adbrite.com/mb/commerce/purchase_form.php?"], :root a[href^="http://www.TwinPlan.com/AF_"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="http://www.1clickdownloader.com/"], :root a[href*="//loderna.ru"], :root a[href^="http://www.123-reg.co.uk/affiliate2.cgi"], :root div[itemtype="http://www.schema.org/WPAdBlock"], :root a[href^="http://wopertific.info/"], :root a[href^="http://bodelen.com/"], :root a[href^="http://wgpartner.com/"], :root div[class^="block_fortress"], :root a[href^="http://web.adblade.com/"], :root a[href*="://analyticsq.com"], :root a[href^="https://go.onclasrv.com/"], :root img[src*="top.mail.ru/counter?"], :root a[href^="http://wct.link/"], :root a[href^="http://us.marketgid.com"], :root a[href^="http://ul.to/ref/"], :root a[href^="http://ucam.xxx/?utm_"], :root a[href^="http://traffic.tc-clicks.com/"], :root a[href*="retagapp.com"], :root a[href^="http://www.liutilities.com/"], :root a[href^="http://www.dl-provider.com/search/"], :root a[href^="http://tc.tradetracker.net/"] > img, :root a[href^="http://tracking.deltamediallc.com/"], :root [data-leadlink*="admitlead."][data-leadlink*="/sb/clk/"], :root div[aria-label="Ads"], :root a[href^="http://axdsz.pro/"], :root a[href^="https://go.ebrokerserve.com/"], :root a[href^="http://galleries.securewebsiteaccess.com/"], :root a[href^="http://stateresolver.link/"], :root a[href^="http://sharesuper.info/"], :root a[href^="https://awecrptjmp.com/"], :root img[src^="/stat/"][width="88"][height="31"], :root a[href*="rapidtor.ru/sb/clk/"], :root a[href^="http://server.cpmstar.com/click.aspx?poolid="], :root div[id^="rtn4p"], :root a[href^="http://see.kmisln.com/"], :root a[href*="//offergate.pro/"], :root a[href^="//db52cc91beabf7e8.com/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root a[href^="http://secure.vivid.com/track/"], :root a[href*="://news.mirtesen.ru/newdata/"], :root a[href^="http://www.downloadthesefiles.com/"], :root a[href^="http://secure.cbdpure.com/aff/"], :root aside[id^="advads_ad_widget-"], :root a[href^="http://lp.ezdownloadpro.info/"], :root a[href^="http://uploaded.net/ref/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="http://s9kkremkr0.com/"], :root a[href^="http://azmobilestore.co/"], :root a[href^="http://s5prou7ulr.com/"], :root a[href*="adpool.bet/"], :root a[href^="https://easygamepromo.com/ef/custom_affiliate/"], :root a[href^="http://record.betsafe.com/"], :root a[onclick*="//msetup.pro/"], :root a[href^="http://mo8mwxi1.com/"], :root a[href^="https://bnsjb1ab1e.com/"], :root a[href*="/onvix.co/promo/"][target=_blank], :root a[href^="//oardilin.com/"], :root a[href^="http://pwrads.net/"], :root a[href*="top.24smi.info"], :root a[href^="http://promos.bwin.com/"], :root a[href*="//12traffic.ru/"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root a[href^="http://play4k.co/"], :root a[href*="//ezofferz.com/"], :root a[href^="https://dltags.com/"], :root a[href^="http://onclickads.net/"], :root a[href*="admitlead."][href*="/sb/clk/"], :root a[href^="http://n.admagnet.net/"], :root a[href^="//awejmp.com/"], :root a[href^="http://mob1ledev1ces.com/"], :root a[href^="http://mmo123.co/"], :root iframe[src*="traffic-media.co"], :root a[href^="http://media.paddypower.com/redirect.aspx?"], :root a[href^="https://fileboom.me/pr/"], :root a[href*="/rlink/simptizer/"], :root a[href^="http://marketgid.com"], :root a[href^="http://liversely.net/"], :root div[id^="drudge-column-ads-"], :root a[href^="http://tour.mrskin.com/"], :root a[href*="//tranqvilius.com/"], :root [src^="/Redirect.a2b?"], :root a[href^="http://linksnappy.com/?ref="], :root a[href*="feellights.ru"], :root a[data-redirect^="http://click.plista.com/pets"], :root .section-subheader > .section-hotel-prices-header, :root a[href^="http://landingpagegenius.com/"], :root a[href*="re-directme.com"], :root a[href^="http://keep2share.cc/pr/"], :root [src*="https://cdn.cloudimagesb.com/"], :root a[href^="http://k2s.cc/pr/"], :root a[href^="http://k2s.cc/code/"], :root div[id^="criteo-"][style], :root a[href*="://edugrampromo.com/"], :root a[href^="http://www.revenuehits.com/"], :root a[href^="http://install.securewebsiteaccess.com/"], :root .widget-pane-section-result[data-result-ad-type], :root a[href^="http://imads.integral-marketing.com/"], :root div[id^="crt-"][style], :root a[href^="http://igromir.info/"], :root a[href^="https://intrev.co/"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root a[href^="http://goldmoney.com/?gmrefcode="], :root a[href*=".purple6401.com/"], :root a[href^="https://oackoubs.com/"], :root #root > .app .adfox-top, :root a[href*="joycasino.com/?partner="], :root a[href*="idealmedia.io"], :root div[id^="advads-"], :root a[href^="http://www.myfreecams.com/?co_id="][href*="&track="], :root a[href*="/universallnk.net/"], :root a[href^="//00ae8b5a9c1d597.com/"], :root a[href^="http://go.fpmarkets.com/"], :root a[href^="http://freesoftwarelive.com/"], :root a[href^="http://t.wowtrk.com/"], :root a[href^="//syndication.dynsrvtbg.com/splash.php?"], :root a[href^="http://extra.bet365.com/"][href*="?affiliate="], :root a[href^="http://ethfw0370q.com/"], :root a[href^="https://bongacams"][href*="com/track?"], :root [id^="bunyad_ads_"], :root a[href^="http://elitefuckbook.com/"], :root a[href*="kinqon.ru"], :root a[href^="http://eclkmpsa.com/"], :root a[href^="http://earandmarketing.com/"], :root a[href*=".mfroute.com/"], :root #content > #center > .dose > .dosesingle, :root a[href^="http://campaign.bharatmatrimony.com/track/"], :root a[href*="3wr110.xyz/"], :root a[href^="http://d2.zedo.com/"], :root body > div[style="position: fixed; z-index: 999999; width: 400px; height: 308px; right: 5px; bottom: 5px;"], :root a[href^="http://codec.codecm.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="http://www.downloadplayer1.com/"], :root a[href^="http://clicks.binarypromos.com/"], :root a[href^="https://dediseedbox.com/clients/aff.php?"], :root [href^="/ucmini.php"], :root a[href^="http://www.wantstraffic.com/"], :root a[href^="http://databass.info/"], :root div[data-test-id="AdBannerWrapper"], :root div[class^="AdCard_"], :root a[href^="http://www.urmediazone.com/signup"], :root a[href^="http://click.plista.com/pets"], :root a[href^="http://chaturbate.com/affiliates/"], :root [href^="https://secure.bmtmicro.com/servlets/"], :root a[href^="http://amzn.to/"] > img[src^="data"], :root a[href^="http://bs.serving-sys.com/"], :root a[href^="http://cpaway.afftrack.com/"], :root a[href^="http://cdn.adsrvmedia.net/"], :root [lazy-ad="top_banner"], :root a[href^="http://360ads.go2cloud.org/"], :root a[href^="http://dftrck.com/"], :root a[href^="http://casino-x.com/?partner"], :root a[href^="https://meet-sexhere.com/"], :root a[href*="ex.24smi.info"], :root a[href^="http://record.sportsbetaffiliates.com.au/"], :root a[href^="http://campeeks.com/"][href*="&utm_"], :root div[class^="index_displayAd_"], :root a[href^="http://adultgames.xxx/"], :root a[href^="https://s.zlink2.com/"], :root a[href^="http://semi-cod.com/clicks/"], :root a[href^="https://prime.rambler.ru/promo/"], :root a[href*="/installpack.net"], :root a[href^="http://campaign.bharatmatrimony.com/cbstrack/"], :root a[href^="http://istri.it/?"], :root a[href^="https://gamescarousel.com/"], :root a[href*="fortedrow.pro"], :root a[href^="http://yads.zedo.com/"], :root a[href^="https://bullads.net/get/"], :root a[href^="http://down1oads.com/"], :root a[href^="http://buysellads.com/"], :root a[href*="onclkds."], :root [href^="https://shiftnetwork.infusionsoft.com/go/"], :root div[id^="smi_teaser_"], :root div[id^="vuukle-ad-"], :root a[href^="http://betahit.click/"], :root a[href^="https://torguard.net/aff.php"] > img, :root a[href^="http://bestorican.com/"], :root a[href^="http://bcp.crwdcntrl.net/"], :root a[href^="http://bc.vc/?r="], :root a[href^="https://windscribe.com/promo/"], :root a[href^="http://farm.plista.com/pets"], :root a[href^="http://www.fbooksluts.com/"], :root a[href^="http://www.cdjapan.co.jp/aff/click.cgi/"], :root a[href^="http://intent.bingads.com/"], :root a[href*="//ridingintractable.com/"], :root a[href^="http://c.actiondesk.com/"], :root a[href^="http://affiliate.glbtracker.com/"], :root a[onclick*="/link-fes.ru"], :root a[href^="https://transfer.xe.com/signup/track/redirect?"], :root a[href^="http://anonymous-net.com/"], :root aside[itemtype="https://schema.org/WPAdBlock"], :root a[href^="https://watchmygirlfriend.tv/"], :root a[href^="https://ovb.im/"], :root div[style="width: 252px; height: 450px; position: fixed; right: 0px; top: 0px; overflow: hidden; z-index: 10000;"], :root a[href^="http://hotcandyland.com/partner/"], :root a[href^="http://affiliates.thrixxx.com/"], :root a[href^="http://affiliate.coral.co.uk/processing/"], :root a[href^="http://aff.ironsocket.com/"], :root a[href*="://takenewsoft.ru/"], :root span[title="Ads by Google"], :root a[href^="http://finaljuyu.com/"], :root a[href^="http://adtrackone.eu/"], :root a[href^="http://adsrv.keycaptcha.com"], :root a[href^="http://adserver.adreactor.com/"], :root a[href^="//go.onclasrv.com/"], :root .GHOFUQ5BG2 > .GHOFUQ5BF2 > .GHOFUQ5BG5, :root #\5f _mom_ad_2, :root a[href^="http://ads.sprintrade.com/"], :root a[href^="http://amigodistrib.ru/dkit-hps/"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="http://adserver.adtech.de/"], :root a[href*="//universalie.info/"], :root a[href^="http://cwcams.com/landing/click/"], :root a[href^="http://ads.betfair.com/redirect.aspx?"], :root a[href^="http://reallygoodlink.extremefreegames.com/"], :root a[href^="http://adlev.neodatagroup.com/"], :root a[href^="http://ad.doubleclick.net/"], :root a[href^="https://k2s.cc/pr/"], :root a[href^="http://ad.au.doubleclick.net/"], :root body > iframe[style^="position"][style*="fixed"][id^="iFb"][src^="/?"], :root a[href*=".directtl.xyz/"], :root a[href^="http://websitedhoome.com/"], :root a[href^="https://clickadilla.com/"], :root .ob_container .item-container-obpd, :root a[href^="http://www.adskeeper.co.uk/"], :root a[href^="https://understandsolar.com/signup/?lead_source="][href*="&tracking_code="], :root a[href^="http://ad-emea.doubleclick.net/"], :root a[href^="http://srvpub.com/"], :root a[href*="/ulike.farm"], :root [data-dynamic-ads], :root a[href^="http://a.adquantix.com/"], :root a[href^="http://NowDownloadAll.com"], :root object[data*="ads.com/clk.swf"], :root a[href*="/eversaree.bid"], :root a[href^="http://adtrack123.pl/"], :root ad-desktop-sidebar, :root [id*="MGWrap"], :root [src^="//am15.net/?"], :root a[href^="http://9amq5z4y1y.com/"], :root a[href^="http://1phads.com/"], :root [alt="Rambler's Top100"], :root a[href^="https://ismlks.com/"], :root a[href^="//zenhppyad.com/"], :root a[href^="//www.pd-news.com/"], :root div[id^="ads250_250-widget"], :root [href^="https://go.astutelinks.com/"], :root [href*=".doubleclick-net.com"], :root a[href^="//www.mgid.com/"], :root a[href^="http://lp.ncdownloader.com/"], :root a[href^="//pubads.g.doubleclick.net/"], :root a[href^="https://www.travelzoo.com/oascampaignclick/"], :root a[href^="https://see.kmisln.com/"], :root [src^="//adtorio.com/"], :root a[href^="http://refer.webhostingbuzz.com/"], :root body > div[style="position: fixed; z-index: 999999; width: 400px; height: 308px; left: 5px; bottom: 5px;"], :root a[href*="info-blog24.ru"], :root a[onmousedown^="this.href='http://staffpicks.outbrain.com/network/redir?"][target="_blank"], :root a[href^="//nlkdom.com/"], :root a[href^="//medleyads.com/spot/"], :root a[href*="kodielinktrust.ru"], :root a[href*="//universalin.info/"], :root a[href^="https://trappist-1d.com/"], :root a[href^="http://go.247traffic.com/"], :root a[href^="https://bestcond1tions.com/"], :root a[href*="muz-loader.site"], :root a[href^="http://greensmoke.com/"], :root a[href*="://et-cod.com/"], :root a[href^="http://searchtabnew.com/"], :root a[href*="?adlivk="][href*="&refer="], :root a[href^="//look.djfiln.com/"], :root [href^="https://mylead.global/stl/"] > img, :root a[href^="https://ilovemyfreedoms.com/"][href*="?affiliate_id="], :root a[href*="/vkout.ru"], :root [href*=".afftracks.online/"], :root div[class^="Component-dfp-"], :root a[href^="//healthaffiliate.center/"], :root [onclick*="content.ad/"], :root a[href^="https://clixtrac.com/"], :root a[href*="/kshop3.biz"], :root a[href^="https://look.utndln.com/"], :root #tads[aria-label], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root a[href^="//5e1fcb75b6d662d.com/"], :root a[href^="//4f6b2af479d337cf.com/"], :root a[href*="/ribnadzo.ru"], :root a[href^="//4c7og3qcob.com/"], :root a[href^="http://tezfiles.com/pr/"], :root #rhs_block > ol > .rhsvw > .kp-blk > .xpdopen > ._OKe > ol > ._DJe > .luhb-div, :root a[href^=".vddfe.club/"], :root [href^="/ucdownloader.php"], :root a[href^="https://awejmp.com/"], :root [href*="//go2page.net"], :root a[href^=" http://www.sex.com/"][href*="&utm_"], :root .GPMV2XEDA2 > .GPMV2XEDP1 > .GPMV2XEDJBB, :root [href^="https://mysbitl.com"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href*=".intab.fun/"], :root a[href*="get-express-vpn.xyz"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href*="=adscript"], :root #mn #center_col > div > h2.spon:first-child, :root a[href*="realgoodies.ru"], :root a[href*="/onvix.me/promo/"][target=_blank], :root a[href*="=Adtracker"], :root a[href^="http://4c7og3qcob.com/"], :root a[href^="https://members.linkifier.com/public/affiliateLanding?refCode="], :root a[href^="https://jmp.awempire.com/"], :root a[href^="http://deloplen.com/afu.php?zoneid="], :root [href^="https://www.hostg.xyz/aff_c"], :root a[href^="http://ad-apac.doubleclick.net/"], :root div[class^="bidvol-widget-"], :root c-wiz[jsrenderer="YnuqN"] > div > div > .Rn1jbe, :root a[href*="/servlet/click/zone?"], :root a[href^="http://track.trkvluum.com/"] { display: none !important; }
:root #atvcap + #tvcap > .mnr-c > .commercial-unit-mobile-top, :root a[href*="/adrotate-out.php?"], :root a[href^="https://www.chngtrack.com/"], :root a[href*="=exoclick"], :root div[id^="ad-position-"], :root a[data-redirect^="this.href='http://paid.outbrain.com/network/redir?"], :root a[href^="http://liversely.com/"], :root a[href^="http://www.firstclass-download.com/"], :root a[href*="//bongacams7.com/track?"], :root a[href^="https://track.afcpatrk.com/"], :root a[href*="webdiana.ru/click"], :root a[href*=".ad-center.com/"], :root a[href*=".udncoeln.com/"], :root a[href*=".surfmdia.com/"], :root .ob-widget > .ob-first.ob-widget-section, :root a[href*=".smartadserver.com"], :root a[href*=".revimedia.com/"], :root .commercial-unit-desktop-rhs > div[jscontroller="YD5eo"], :root dile-cookies-consent, :root [id^="div-gpt-ad"], :root .__ywvr .__y_item, :root #flowplayer > div[style="position: absolute; width: 300px; height: 275px; left: 222.5px; top: 85px; z-index: 999;"], :root a[href^="http://www.on2url.com/app/adtrack.asp"], :root a[href^="http://download-performance.com/"], :root a[href^="https://farm.plista.com/pets"], :root a[href^="http://trk.mdrtrck.com/"], :root a[href^="https://adsrv4k.com/"], :root div[class*="td-a-rec-id-"], :root a[href*=".red90121.com/"], :root a[href*=".opskln.com/"], :root a[href*="//yojlf.com"], :root a[href^="http://z1.zedo.com/"], :root a[href*=".irtyc.com/"], :root a[href^="http://www.firstload.com/affiliate/"], :root a[href^="http://www.friendlyadvertisements.com/"], :root div[id^="div_ad_stack_"], :root a[href*=".ichlnk.com/"], :root a[href*="//newbrowser.me/"], :root div[id^="ad_bigbox_"], :root #content > #right > .dose > .dosesingle, :root a[href^="http://eaplay.ru/"], :root a[href*="://riaccaw.com/"], :root #assetsListings[style="display: block;"], :root a[href^="http://9nl.es/"], :root [lazy-ad="leftbottom_banner"], :root a[href*=".fwd28.com/"], :root img[src*="://r.i.ua/"], :root div[id^="yandex_ad"], :root a[href^="https://www.pornhat.com/"][rel="nofollow"], :root a[href^="https://www.hotgirls4fuck.com/"], :root a[href^="http://y1jxiqds7v.com/"], :root a[href*=".frtyl.com/"], :root a[href^="http://api.content.ad/"], :root a[href*=".clkcln.com/"], :root a[href^="http://click.payserve.com/"], :root iframe[src^="http://ad.yieldmanager.com/"], :root a[href^="http://pubads.g.doubleclick.net/"], :root a[href^="http://serve.williamhill.com/promoRedirect?"], :root a[href*="n47adshostnet.com/"], :root a[href*=".cfm?fp="][href*="&prvtof="], :root a[href*="ultrabit.ws"], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://join3.bannedsextapes.com/track/"], :root #topstuff > #tads, :root a[href*=".bang.com/"][href*="&aff="], :root a[href*=".allsports4you.club"], :root .mw > #rcnt > #center_col > #taw > #tvcap > .c, :root a[href^="https://playuhd.host/"], :root [href^="https://go.affiliatexe.com/"], :root a[href^="http://mgid.com/"], :root a[href*=".adsrv.eacdn.com/"] > img, :root div[id^="traffim-widget"], :root a[href^="https://m.do.co/c/"] > img, :root [href*=".ltroute.com/"], :root div[class*="margin-Advert"], :root #tads + div + .c, :root a[href^="//jsmptjmp.com/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > .vci, :root a[href^="https://financeads.net/tc.php?"], :root #ssmiwdiv[jsdisplay], :root a[href*=".adform.net/"], :root a[href*=".axdsz.pro/"], :root a[href^="http://a63t9o1azf.com/"], :root a[href^="http://tds-2.ru"], :root [href*="//etracking.pro"], :root a[href^="http://www.fonts.com/BannerScript/"], :root div[class^="hp-ad-rect-"], :root a[href^="http://dwn.pushtraffic.net/"], :root a[href$="/vghd.shtml"], :root .GB3L-QEDGY .GB3L-QEDF- > .GB3L-QEDE-, :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root #resultspanel > #topads, :root a[href^="http://admrotate.iplayer.org/"], :root a[href^="http://espn.zlbu.net/"], :root [href^="https://www.reimageplus.com/"], :root a[href*="://topclicks.club/"], :root a[href^="http://affiliates.score-affiliates.com/"], :root .icons-rss-feed + .icons-rss-feed div[class$="_item"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href*="tdstrk.ru"], :root a[href^="http://refpa.top/"], :root a[data-oburl^="http://paid.outbrain.com/network/redir?"], :root a[href*="lifenews24x7.ru"], :root .base-page_container > .banerRight, :root div[id^="cns_ads_"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[data-nvp*="'trafficUrl':'https://paid.outbrain.com/network/redir?"], :root a[href*="//universalini.info/"], :root a[href^="http://www.badoink.com/go.php?"], :root a[class="RBAd"], :root [src^="http://api.lanistaads.com/ServeAd?"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root a[href^="http://banners.victor.com/processing/"], :root a[href^="http://www.getyourguide.com/?partner_id="], :root [onclick^="window.open('https://www.brazzersnetwork.com/landing/"], :root div[class^="mixadvert"], :root [id*="MarketGid"], :root iframe[id^="marketgid_"], :root a[onclick*="n284adserv.com"], :root a[href^="https://scurewall.co/"], :root .commercial-unit-desktop-rhs > .iKidV > .Ee92ae + .P2mpm + .hp3sk, :root a[href*="goext.info"], :root div[class*="_browserAdOuterContainer_"], :root [name^="google_ads_iframe"], :root a[href^="http://c.ketads.com/"], :root a[href^="http://6kup12tgxx.com/"], :root [href*="//trackout.business"], :root [href^="https://veepn.g2afse.com/"], :root a[href*="//bongacams.com/track?"], :root a[href^="https://servedbyadbutler.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root a[href^="https://mob1ledev1ces.com/"], :root a[data-redirect^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://explore.findanswersnow.net/"], :root [id^="adframe_wrap_"], :root div[jsdata*="CarouselPLA-"][data-id^="CarouselPLA-"], :root a[href^="https://go.trackitalltheway.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root div[class^="adUnit_"], :root a[href^="https://deliver.tf2www.com/"], :root a[href*="//loderla.online"], :root a[href^="http://spygasm.com/track?"], :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root a[href*="tvks.ru"], :root [src*="//www.dianomi.com/smartads.epl"], :root a[href*=".adk2x.com/"], :root [data-ad-manager-id], :root a[href^="http://www.sex.com/pics/?utm_"], :root a[href^="http://vo2.qrlsx.com/"], :root a[href^="http://engine.newsmaxfeednetwork.com/"], :root [href^="https://stvkr.com/"], :root a[href^="http://www.roboform.com/php/land.php"], :root a[href*="//webbrowser.club/"], :root a[href^="http://refpaano.host/"], :root a[href*="/cmd.php?ad="], :root .content_rb[id^="content_rb_"], :root a[href^="http://ads2.williamhill.com/redirect.aspx?"], :root #center_col > #res > #topstuff + #search > div > #ires > #rso > #flun, :root a[href*=".xromp.com/landing/click/"], :root a[href*="browser-ru.site"], :root div[role="navigation"] + c-wiz > div > .kxhcC, :root a[href^="http://www.download-provider.org/"], :root a[href^="https://10dfkuvbdkfv.club/"], :root AD-TRIPLE-BOX, :root a[href*="nhebd.xyz"], :root a[href^="http://online.ladbrokes.com/promoRedirect?"], :root a[href^="//mob1ledev1ces.com/"], :root [href^="https://go.4rabettraff.com/"], :root a[href^="https://www.popads.net/users/"], :root a[href^="http://adultfriendfinder.com/p/register.cgi?pid="], :root #\5f _nq__hh[style="display:block!important"], :root a[href*="turbotraf.com"], :root div[data-flt-ve="sponsored_search_ads"], :root [href^="https://affect3dnetwork.com/track/"], :root div[id^="M"][id*="Composite"], :root a[href^="https://mmwebhandler.aff-online.com/"], :root #PopWin[onmousemove], :root [href^="https://r.kraken.com/"], :root .GFYY1SVD2 > .GFYY1SVC2 > .GFYY1SVF5, :root [href^="https://join3.bannedsextapes.com"], :root [href^="https://bulletprofitsmartlink.com/"], :root a[href*="wow-partners.com/click.php"], :root [class^="flat_"][class*="_cross"], :root a[href^="http://www.pinkvisualpad.com/?revid="], :root a[href^="https://www.oneclickroot.com/?tap_a="] > img, :root DFP-AD, :root a[href^="//porngames.adult/?SID="], :root a[href*="//refpabjgth.top/"], :root a[href^="https://www.friendlyduck.com/AF_"], :root [href^="http://advertisesimple.info/"], :root [onclick^="window.open('window.open('//delivery.trafficfabrik.com/"], :root div[id^="admixer_"], :root a[href^="https://wantopticalfreelance.com/"], :root [href^="/ucdownload.php"], :root [href*=".revrtb.com/"], :root .mod > .gws-local-promotions__border, :root a[href^="http://secure.hostgator.com/~affiliat/"], :root a[href*=".braun634.com/"], :root [onclick^="window.open('http://adultfriendfinder.com/search/"], :root [href^="/admdownload.php"], :root .base-page_center > .banerBottom, :root a[href^="https://tracking.gitads.io/"], :root #rhs_block .xpdopen > ._OKe > div > .mod > ._yYf, :root a[href^="http://allaptair.club/"], :root a[href^="http://affiliates.pinnaclesports.com/processing/"], :root .vid-present > .van_vid_carousel__padding, :root #header + #content > #left > #rlblock_left, :root a[href^="http://partners.etoro.com/"], :root [id^="google_ads_iframe"], :root a[href^="https://www.g4mz.com/"], :root a[href^="http://webgirlz.online/landing/"], :root [href*="cadsecs.com/"], :root a[href^="http://adserving.unibet.com/"], :root #rhs_block .mod > .luhb-div > div[data-async-type="updateHotelBookingModule"], :root a[href^="http://adclick.g.doubleclick.net/"], :root [href*="//mclick.net"], :root a[href*=".trust.zone"], :root [href^="https://shrugartisticelder.com"], :root a[href*="katuhus.com"], :root a[data-href*="recreativ.ru"], :root [href^="https://refpahrwzjlv.top/"], :root a[href^="http://czotra-32.com/"], :root a[href*=".qertewrt.com/"], :root [href*="//doubleclick-net.com"], :root a[href^="http://putanapartners.com/go."], :root [id*="ScriptRoot"], :root [href*=".xiloy.site/"], :root a[href^="http://webtrackerplus.com/"], :root a[href^="https://ad13.adfarm1.adition.com/"], :root a[href^="http://clickandjoinyourgirl.com/"], :root [href*=".trackout.business"], :root [href*=".jetx.info/"], :root div[id^="beroll_rotator"], :root #center_col > #taw > #tvcap > .rscontainer, :root [href*=".securesafemembers.com"], :root a[href^="https://a.bestcontentfood.top/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > div > .vci, :root a[href*="delivery.trafficfabrik.com"], :root #ads > .dose > .dosesingle, :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="http://hpn.houzz.com/"], :root a[href*="//universalies.info/"], :root a[href^="http://45eijvhgj2.com/"], :root [href*=".mclick.net"], :root [data-link*="/sb/clk/"], :root .header-banner > #moneyback[target="_blank"], :root [href*=".grtya.com/"], :root .gbfwa > div[class$="_item"], :root a[href^="https://goraps.com/"], :root div[id^="gnezdo_ru_"], :root [href*=".etracking.pro"], :root a[href*="://installpack.ru"], :root a[href^="https://secure.adnxs.com/clktrb?"], :root a[href^="http://adserver.adtechus.com/"], :root a[href^="https://topoffers.com/"][href*="/?pid="], :root a[href*="://dafeb.ru/"], :root a[href^="http://vinfdv6b4j.com/"], :root .min-width-normal > #popup_container ~ #fade, :root [href^="https://dooloust.net/"], :root [href^="https://pulsetrack.biz/"], :root #main-content > [style="padding:10px 0 0 0 !important;"], :root #center_col > #resultStats + div[style="border:1px solid #dedede;margin-bottom:11px;padding:5px 7px 5px 6px"], :root a[href^="https://www.oboom.com/ad/"], :root [href*=".adcampo.com/"], :root a[href^="http://duckcash.eu/"], :root a[href^="http://www.mobileandinternetadvertising.com/"], :root a[href^="https://track.themadtrcker.com/"], :root a[href^="http://hyperlinksecure.com/go/"], :root a[href^="http://get.slickvpn.com/"], :root [data-ad-module], :root a[href*="bestforexplmdb.com"], :root a[href^="https://msecure117.com/"], :root [href^="http://stvkr.com/"], :root a[href^="https://keep2share.cc/pr/"], :root a[href^="http://xads.zedo.com/"], :root a[href^="http://www.affiliates1128.com/processing/"], :root a[href^="http://c.jumia.io/"], :root [class^="div-gpt-ad"], :root [class*="auto-bottom-advertising-"], :root [href^="http://raboninco.com/"], :root div[id^="taboola-stream-"], :root .ra[align="left"][width="30%"], :root [class*="-slot_ad-placements-"], :root [href*=".go2page.net"], :root a[href^="http://hd-plugins.com/download/"], :root a[href^="//voyeurhit.com/cs/"], :root [href*="/uni-tds.com/"], :root a[href^="http://www.afgr3.com/"], :root [ad-id^="googlead"], :root [data-link*="://topclicks.club/"], :root a[href^="http://go.mobisla.com/"], :root a[href^="https://relap.io/"][href*="promo_ad_link"], :root AFS-AD, :root [id^="ad-wrap-"], :root a[href*="://clickstats.pw/"], :root div[id^="ad-gpt-"], :root a[href^="http://pan.adraccoon.com?"], :root [href^="http://www.star-clicks.com/"], :root #center_col > #\5f Emc, :root #center_col > div[style="font-size:14px;margin-right:0;min-height:5px"] > div[style="font-size:14px;margin:0 4px;padding:1px 5px;background:#fff8e7"], :root div[class$="_b-ad-main"], :root a[href*=".trck5.com/"], :root .trc_rbox_div .syndicatedItem, :root a[href^="http://www.streamate.com/exports/"], :root [data-href^="https://download.cdn.yandex.net/yandex-tag/weboffer/"], :root [href^="https://traffserve.com/"], :root [href*="maskip.co/"], :root a[href^="http://luckiestclick.com/goto."], :root a[href*="//bongacams2.com/track?"], :root div[id^="tms-ad-dfp-"], :root a[href^="https://trust.zone/go/r.php?RID="], :root a[href^="http://c43a3cd8f99413891.com/"], :root div[id^="advertur_"], :root a[href*="://lapina.xyz/"], :root a[href^="https://www.firstload.com/affiliate/"], :root .trc_related_container div[data-item-syndicated="true"], :root a[href^="http://aflrm.com/"], :root div[id^="google_dfp_"], :root [href*="get-download.club/"], :root .section-result[data-result-ad-type], :root a[href^="https://syndication.exoclick.com/splash.php?"], :root a[href^="https://track.totalav.com/"], :root [href^="https://wct.link/"], :root #mn div[style="position:relative"] > #center_col > div > ._dPg, :root .rhsvw[style="background-color:#fff;margin:0 0 14px;padding-bottom:1px;padding-top:1px;"], :root a[href^="http://www.coiwqe.site/"], :root iframe[id^="google_ads_frame"], :root a[href^="http://www.bet365.com/"][href*="affiliate="], :root a[href^="http://www.bluehost.com/track/"] > img, :root a[data-url^="http://paid.outbrain.com/network/redir?"], :root a[href*="kshop2.biz"], :root .ra[width="30%"][align="right"] + table[width="70%"][cellpadding="0"], :root a[href*="//bongacams5.com/track?"], :root FBS-AD, :root a[href^="http://see-work.info/"], :root .inlineNewsletterSubscription + .inlineNewsletterSubscription div[class$="_item"], :root a[href*=".orange2258.com/"], :root #taw > .med + div > #tvcap > .mnr-c:not(.qs-ic) > .commercial-unit-mobile-top, :root .plista_widget_belowArticleRelaunch_item[data-type="pet"], :root a[href*=".clksite.com/"], :root a[href^="http://www.webtrackerplus.com/"], :root .GJJKPX2N1 > .GJJKPX2M1 > .GJJKPX2P4, :root a[href^="https://ads.planetwin365affiliate.com/redirect.aspx?"], :root a[href^="http://g1.v.fwmrm.net/ad/"], :root [href^="https://www.xvbelink.com/"], :root a[href^="http://papi.mynativeplatform.com:80/pub2/"], :root LEADERBOARD-AD, :root #mn #center_col > div > h2.spon:first-child + ol:last-child, :root #center_col > #taw > #tvcap > .commercial-unit-desktop-top, :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root a[href^="http://servicegetbook.net/"], :root [lazy-ad="lefttop_banner"], :root a[href*="tvkw.ru"], :root a[href*="://etcodes.com/"], :root a[href^="http://www.mrskin.com/tour"], :root div[class^="sp-adslot-"], :root .jobs-information-call-to-action + .jobs-information-call-to-action div[class$="_item"], :root a[href*="://lapina.best/"], :root a[href^="https://go.hpyjmp.com/"], :root .vi-lb-placeholder[title="ADVERTISEMENT"], :root a[href^="http://www.menaon.com/installs/"], :root a[href^="http://taboola-"][href*="/redirect.php?app.type="], :root .mw > #rcnt > #center_col > #taw > .c, :root a[href*="/ber-ter.com"], :root .commercial-unit-mobile-top > div[data-pla="1"], :root #rhs_block > script + .c._oc._Ve.rhsvw, :root #\5f _mom_ad_12, :root a[href*="//adretarget.net/"], :root .__zinit .__y_item, :root .ch[onclick="ga(this,event)"], :root img[width="120"][height="600"], :root .__ywl .__y_item, :root div[id^="div-ads-"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="http://at.atwola.com/"], :root a[href*="media-rotate.com"], :root div[id^="banner-ad-"], :root #center_col > #resultStats + #tads, :root .__yinit .__y_item, :root a[href^="https://a.adtng.com/"], :root a[href*="://loderkkis.ru"], :root a[href^="http://static.fleshlight.com/images/banners/"], :root a[href^="https://www.adskeeper.co.uk/"], :root [href^="https://www.highrevenuecpm.com"], :root a[href^="https://secure.cbdpure.com/aff/"], :root div[style*="am15.net/img/player_skins"], :root AMP-AD, :root a[href^="https://cpartner.bdswiss.com/"], :root iframe[src*="mellowads.com"], :root .__y_inner > .__y_item, :root a[href^="https://affiliate.geekbuying.com/gkbaffiliate.php?"], :root #cnt #center_col > #res > #topstuff > .ts, :root a[href^="https://landing.brazzersnetwork.com/"], :root #cnt #center_col > #taw > #tvcap > .c._oc._Lp, :root #rhswrapper > #rhssection[border="0"][bgcolor="#ffffff"], :root .Mpopup + #Mad > #MadZone, :root a[href^="http://ads.expekt.com/affiliates/"], :root a[href^="http://www.streamtunerhd.com/signup?"], :root a[href^="http://www.seekbang.com/cs/"], :root a[href^="http://syndication.exoclick.com/"], :root a[href^="http://bluehost.com/track/"], :root a[href^="http://fsoft4down.com/"], :root a[href*="ad2upapp.com/"], :root a[href*="m1cpl.ru"], :root #rhs_block > #mbEnd, :root a[href*="makegreat.website"], :root a[href^="https://track.bruceads.com/"], :root a[id^="ads_banner_"], :root a[href^="https://porngames.adult/?SID="], :root a[href^="http://findersocket.com/"], :root div[data-adservice-param-tagid="contentad"], :root #MAIN.ShowTopic > .ad, :root a[href*="//promo-bc.com/track?"], :root a[href^="https://sexsimulator.game/tab/?SID="], :root .rc-cta[data-target], :root #rhs_block > .ts[cellspacing="0"][cellpadding="0"][style="padding:0"], :root a[href*="://r.advmusic.com/"], :root a[href*="/clubleads.ru"], :root div[data-ad-underplayer], :root #mbEnd[cellspacing="0"][cellpadding="0"], :root a[href^="http://www.ducksnetwork.com/"], :root a[href^="http://3wr110.net/"], :root a[href^="https://secure.starsaffiliateclub.com/C.ashx?"], :root a[href*="verismediya.ru/sb/clk/"], :root .trc_rbox_div .syndicatedItemUB, :root a[href*=".adsbid.ru"], :root a[href^="https://www.im88trk.com/"], :root a[href^="http://ffxitrack.com/"], :root #center_col > #main > .dfrd > .mnr-c > .c._oc._zs, :root a[href^="https://squren.com/rotator/?atomid="], :root a[href^="//40ceexln7929.com/"], :root a[href*="gpclick.ru"], :root #center_col > #resultStats + div + #res + #tads, :root [data-link*="://ubar-pro"], :root a[href^="http://go.xtbaffiliates.com/"], :root .nrelate .nr_partner, :root a[href^="//88d7b6aa44fb8eb.com/"], :root a[href^="http://www.afgr2.com/"], :root div[data-id^="div-gpt-ad-"], :root a[href*="//tekaners.com/"], :root #mn div[style="position:relative"] > #center_col > ._Ak, :root .l-container > #fishtank, :root a[href*="blogi-novosti.ru"], :root a[href^="https://uncensored3d.com/"], :root a[href^="http://adf.ly/?id="], :root a[href^="https://usenetxs.website/"], :root a[href^="http://pokershibes.com/index.php?ref="], :root #tadsb[aria-label], :root a[href^="https://deliver.ptgncdn.com/"], :root a[href^="http://latestdownloads.net/download.php?"], :root #center_col > #resultStats + #tads + #res + #tads, :root a[href^="//z6naousb.com/"], :root a[href*="/sarimsolus.com/"], :root a[href^="https://reachtrgt.com/"], :root div[class^="Ad__container"], :root a[href^="http://adprovider.adlure.net/"], :root #root > .app .brand-widget__right-cl, :root div[id^="adspot-"], :root #\5f _admvnlb_modal_container, :root [data-freestar-ad], :root a[href^="http://rs-stripe.wsj.com/stripe/redirect"], :root #main_col > #center_col div[style="font-size:14px;margin:0 4px;padding:1px 5px;background:#fff7ed"], :root a[href^="http://ad.yieldmanager.com/"], :root [href*="://simpalsid.com/ad/click?id"], :root a[href^="http://www.plus500.com/?id="], :root #adv_unisound ~ #ad_module_cont > [id^="ad_module"], :root #flowplayer > div[style="z-index: 208; position: absolute; width: 300px; height: 275px; left: 222.5px; top: 85px;"], :root a[href^="https://syndication.dynsrvtbg.com/splash.php?"] { display: none !important; }</style></head>

<body dir="ltr">
    <a class="exit_btn" href="https://rgqwdj.flndmyiove.net/c/da57dc555e50572d?s1=136572&s2=1309953&s3=EXIT&j1=1&j3=1">
        <i class="fas fa-arrow-left"></i>
        Exit
    </a>
    <main class="wrapper background-backgroundcolor">
        <section class="section">
            <header> 
            <img class="image-url" src="/app/views/landing/new/TopLogo.svg" width="200" height="150" alt="tiktok"> 
            <!-- <span class="circle"></span> -->
            </header>
            <!-- <h1 class="headline-text headline-fontcolor">Age verification</h1> -->
            <div class="message-text message-fontcolor"><?= $text ?></div>
            <div class="call-to-action">
                <section class="button-section"> <a class="btn" data-type="colusion" href="<?=$redirect?>"><?= $btn ?></a>
                </section>
            </div>
            <!-- <div class="btn" data-type="colusion">
                button 06
              </div> -->
        </section>
    </main>
    <div class="ws-root">
        <!-- react-empty: 1 -->
    </div>


</body></html>