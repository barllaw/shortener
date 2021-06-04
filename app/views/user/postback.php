<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 


?>

<div class="container dashboard">

    <div class="login_title"><h3><?= $data['postback'][0]['login'] ?></h3></div>
    
    <div class="postback_wrap">
        <div class="postback_title postback_row">
        <div>PP</div>
        <div>GEO</div>
        <div>NICKNAME</div>
        <div>SUM</div>
        <div>DATE</div>
        </div>
        <?php foreach($data['postback'] as $postback): ?>

            <div class="postback_row">
                <div class="pp"><?= $postback['pp'] ?></div>
                <div class="geo"><?= $postback['geo'] ?></div>
                <div class="nickname"><?= $postback['nickname'] ?></div>
                <div class="sum"><?= $postback['sum'] ?></div>
                <div class="date"><?= date("d.m H:i", $postback['date']) ?></div>
            </div>

        <?php endforeach; ?>
    </div>

</div>

<?php
require_once 'public/blocks/popup.php';
require_once 'public/blocks/footer.php'; 
?>