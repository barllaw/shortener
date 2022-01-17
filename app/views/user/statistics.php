<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/popup.php'; 
?>

<div class="container">

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

        <div class="all_links_title">
            <h4><?= $data['login'] ?></h4>
            <?php if($_COOKIE['login'] == 'londofff' or $_COOKIE['login'] == 'fanj77' or $_COOKIE['login'] == 'ihor'): ?>
                <div class="delete_user" onclick="deleteUser('<?=$data['login']?>')">Delete user</div>
            <?php endif; ?>
        </div>

        <?php require 'app/views/links_array.php' ?>

    </div>

</div>

<?php require_once 'public/blocks/footer.php'; ?>