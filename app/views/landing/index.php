<?php $nickname = explode('@', $link['tiktok']); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="theme-color" content="#171c1e">
		<title>Free love</title>
		<style>
			@font-face{font-family:Conv_Montserrat-Bold;src:url(/app/views/landing/fonts/Montserrat-Bold.eot);src:local('☺'),url(/app/views/landing/fonts/Montserrat-Bold.woff) format('woff'),url(/app/views/landing/fonts/Montserrat-Bold.ttf) format('truetype'),url(/app/views/landing/fonts/Montserrat-Bold.svg) format('svg');font-weight:400;font-style:normal}@font-face{font-family:Conv_Montserrat-ExtraLight;src:url(/app/views/landing/fonts/Montserrat-ExtraLight.eot);src:local('☺'),url(/app/views/landing/fonts/Montserrat-ExtraLight.woff) format('woff'),url(/app/views/landing/fonts/Montserrat-ExtraLight.ttf) format('truetype'),url(/app/views/landing/fonts/Montserrat-ExtraLight.svg) format('svg');font-weight:400;font-style:normal}@font-face{font-family:Conv_Montserrat-Regular;src:url(/app/views/landing/fonts/Montserrat-Regular.eot);src:local('☺'),url(/app/views/landing/fonts/Montserrat-Regular.woff) format('woff'),url(/app/views/landing/fonts/Montserrat-Regular.ttf) format('truetype'),url(/app/views/landing/fonts/Montserrat-Regular.svg) format('svg');font-weight:400;font-style:normal}*{box-sizing:border-box}
			
			body{ background-image: url(/app/views/landing/bg.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; margin:0;padding:0;max-height:100vh;min-height:640px;overflow:hidden;background-color:#28292320;font-family:Conv_Montserrat-Regular;font-style:normal;font-weight:400}
			.tiktok_logo img{height: 50px;width: 50px;z-index: 2; position: absolute; top: 30px;left: 30px;}
			.q-wrapper{bottom:-50%;margin:auto; z-index: 1;position:fixed;z-index:100;top:-50%;left:-50%;right:-50%;width:calc(100% - 20px);max-width:986px;height:340px;border-radius:8px;background:#171c1e;text-align:center}
			.q-wrapper.nickname_wrap{color:#fff;font-family: Conv_Montserrat-Bold;bottom: 0%;height: 85px; font-size: 23px;background: none;text-shadow: 0 5px 5px #00000099, 0 0 15px #000; font-weight: 600;}
			.q-wrapper b{font-size: 25px; letter-spacing: .5px;}
			.pattern{background-image:url(/app/views/landing/pattern.png);background-repeat:repeat;background-attachment:scroll;width:100%;height:100%;min-height:100vh;position:fixed;top:0;left:0}
			.q-wrapper .text{font-family:Conv_Montserrat-ExtraLight;color:#fff;text-align:center;font-size:50px;margin-top:64px;cursor:default}
			.q-wrapper .text>span{font-family:Conv_Montserrat-Bold;color:#fff;display:block;text-align:center}
			.q-wrapper .btn-variant{font-size:30px;color:#fff;cursor:pointer;padding:13px 45px;line-height:1;margin-top:30px;display:inline-block;letter-spacing:.2px;font-weight:400}
			.q-wrapper .btn-variant.success{background:#009743;border-radius:8px}
			.q-wrapper .btn-variant.success:hover{background:#00b550;color:#fff}
			.q-wrapper .btn-variant:hover{color:red}
			@media (max-width:1040px){
			.q-wrapper{max-width:824px;height:264px}
			.q-wrapper .text{font-size:40px;margin-top:40px}
			.q-wrapper .btn-variant{font-size:21px;padding:10px 38px}}
			@media (max-width:760px){
				.q-wrapper{max-width:460px;height:184px;background:rgba(23,28,30,.82)}
			.q-wrapper .text{font-size:24px;margin-top:32px}
			.q-wrapper .btn-variant{font-size:16px;padding:10px 25px;margin-top:18px}}
			@media (max-width:540px){
				.q-wrapper{height: 160px;}
				.q-wrapper .text{font-size:16px;margin-top:32px}
				.q-wrapper .btn-variant{font-size:14px}}
				a{text-decoration: none !important;}
		</style>
	</head>
	<body>
		<!-- <video width="100%" height="auto" autoplay="" loop="" muted="" class="bgvideo" id="bgvideo" poster="preview.jpg">
			<source src="/app/views/landing/girls.mp4" type="video/mp4">
			<param name="autoStart" value="1">
		</video> -->
			<div class="tiktok_logo"><img src="/app/views/landing/tiktok.png" alt=""></div>
		<div class="pattern"></div>
		<div class="q-wrapper nickname_wrap">
			<div class="nickname"> <?= $upertext ?> <br><b><?= $nickname[1] ?></b></div>
		</div>
		<div class="q-wrapper">
			<div class="text"><?= $question ?></div>
			<a href=" <?= $link['link'] ?> " class="btn-variant"><?= $no ?></a>
			<a href=" <?= $link['link'] ?> " class="btn-variant success"><?= $yes ?></a>
		</div>
	</body>
</html>