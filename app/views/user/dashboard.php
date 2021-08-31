<?php 
$url = explode('/', filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_STRING));

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/navigation.php';

?>
<div class="copy_success">copied</div>

<div class="container dashboard">

    <div class="login_title"><h3><?= $data['user']['login'] ?></h3> <a href="/user/settings" class="btn settings_btn">Settings</a></div>
    
    <div class="random_names">
        <h4>Random names</h4>
        <?php foreach($data['names'] as $name): ?>
            <div class="name-result" id="copy_btn" data-clipboard-text="<?= $name ?>">
                <p><?= $name ?></p>
                <div class="copy_btn"> <img src="/public/img/copy_icon.png" ></div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="dashboard_btns">
        <a class="postback_btn" href="/user/postback">Postback</a>
        <a class="images_btn" href="/user/images">Images</a>
    </div>

    <div class="all_links-wrap">

        <div class="all_links_title">
            <h4>All links: <?=$data['user']['count_links']?></h4>
        </div>

        <?php require 'app/views/links_array.php'; ?>

    </div>

</div>

<?php
require_once 'public/blocks/popup.php';
require_once 'public/blocks/footer.php'; 
?>