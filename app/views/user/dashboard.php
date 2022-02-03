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

    <div class="search_dashboard">
            <div><a class="search_tagged_wrap" href="/user/dashboard/tagged">Tagged</a></div>
            <div><a class="clear_search_btn" href="/user/dashboard/">Clear</a></div>
            <div class="search_date_wrap">
                <label for="date">Search by date</label>
                <select name="date" id="val_date">
                    <option value="none">*</option>

                    <?php foreach($data['dates'] as $item):?>
                        <option value="<?=$item['date']?>" <?php if($item['date'] == $data['date']) echo 'selected';?>><?=$item['date']?></option>
                    <?php endforeach;?>

                </select>
                <div id="search_by_date" class="search_btn_date">Search</div>
            </div>
            <div class="search_acc_wrap">
                <label for="date">Search by account</label>
                <input type="text" class="search_val" id="val_account" value="<?= $data['account']?>">
                <div id="search_by_account" class="search_btn">Search</div>
            </div>
    </div>

    <div class="all_links-wrap">

        <?php require 'app/views/links_array.php'; ?>

    </div>
    <a href="/user/dashboard/more/<?php if($data['count_dates']==''){echo '9';}else{echo $data['count_dates'] + 3;}?>" class="btn more_btn">more</a>
</div>

<?php
require_once 'public/blocks/popup.php';
require_once 'public/blocks/footer.php'; 
?>