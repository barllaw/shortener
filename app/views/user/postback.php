<?php 
$url = explode('/', filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_STRING));

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/navigation.php';

$sum = 0;
foreach ($data['postback'] as $key) {
    $sum += $key['sum'];
}

?>

<div class="container dashboard">

    <div class="login_title"><h3><?= $data['postback'][0]['login'] ?></h3></div>
    
    <div class="postback_wrap">
        <div class="postback_title postback_row">
        <div>PP</div>
        <div>GEO</div>
        <div>NICKNAME</div>
        <div>SUM $<?= round($sum, 2) ?></div>
        <div>DATE <?= date("d.m", $postback['date']) ?></div>
        </div>
        <?php foreach($data['postback'] as $postback): ?>

            <div class="postback_row">
                <div class="pp"><?= $postback['pp'] ?></div>
                <div class="geo"><?= $postback['geo'] ?></div>
                <div class="nickname"><?= $postback['nickname'] ?></div>
                <div class="sum"><?= round($postback['sum'], 2) ?></div>
                <div class="date"><?= date("H:i", $postback['date']) ?></div>
            </div>

        <?php endforeach; ?>
    </div>

</div>

<?php
require_once 'public/blocks/popup.php';
require_once 'public/blocks/footer.php'; 
?>