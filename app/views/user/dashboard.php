<?php 
$url = explode('/', filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_STRING));

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/navigation.php';

$profit_last7days = 0;
for($i = 0; $i < 7; $i++){
    $profit_last7days = $profit_last7days + $data['stats'][$i]['profit'];
}

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

    <div class="all_links-wrap">

        <div class="last7days">Profit last 7 days: <b>$<?= round($profit_last7days, 2) ?></b></div>
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