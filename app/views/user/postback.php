<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 

$sum = 0;
foreach ($data['postback'] as $key) {
    $sum += $key['sum'];
}

?>

<div class="container postback">

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
require_once 'public/blocks/footer.php'; 
?>