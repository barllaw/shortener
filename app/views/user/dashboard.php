<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 



?>
<div class="copy_success">copied</div>

<div class="container dashboard">

    <div class="login_title"><h3><?= $data['user']['login'] ?></h3> <a href="/user/settings" class="btn settings_btn">Settings</a></div>
    
    <div class="random_names">
        <h4>Random names</h4>
        <?php foreach($data['names'] as $name): ?>
            <div class="name-result" id="copy_btn" data-clipboard-text="<?= $name ?>">
                <p><?= $name ?></p>
                <div class="copy_btn"> <span class="copy_img"></span> </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="week_statistic">
        <div><p>Week statistic</p></div>
        <div class="w_stats_wrap">
            <span>Links <?= $data['week_stats']['links'] ?></span>
            <span>Clicks <?= $data['week_stats']['clicks'] ?></span>
            <span>Leads <?= $data['week_stats']['leads'] ?></span>
            <span>Profit <?= round($data['week_stats']['profit'], 2) ?></span>
        </div>
        <div class="all_links_title">
            <p>All links: <?=$data['user']['count_links']?></p>
        </div>
    </div>


    <div class="all_links-wrap">

        <?php require 'app/views/links_array.php'; ?>

    </div>

</div>

<?php
require_once 'public/blocks/popup.php';
require_once 'public/blocks/footer.php'; 
?>