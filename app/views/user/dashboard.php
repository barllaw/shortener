<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 

$preland = $data['user']['preland'];
$custom = $data['user']['input_custom'];
$stairs = $data['user']['stairs'];

$user_domains = explode(',', $data['user']['domains']);
?>

<div class="container dashboard">

    <div class="login_title"><h3><?= $data['user']['login'] ?></h3> <a href="/user/settings" class="btn settings_btn">Settings</a></div>
    
    <div class="all_links-wrap">

        <div class="all_links_title">
            <h4>All links: <?=$data['user']['count_links']?></h4>
        </div>

        <?php require 'app/views/links_array.php' ?>

    </div>

</div>

<?php
require_once 'public/blocks/popup.php';
require_once 'public/blocks/footer.php'; 
?>