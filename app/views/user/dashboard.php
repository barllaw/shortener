<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/popup.php';

$preland = $data['user']['preland'];
$custom = $data['user']['input_custom'];
$stairs = $data['user']['stairs'];

$user_domains = explode(',', $data['user']['domains']);
?>

<div class="container">

    <div class="login_title"><h3><?= $data['user']['login'] ?></h3></div>
    
   <div class="new_mainlink_btn" onclick="addLink('mainlink')">Add new mainlink</div>
   <div class="mainlink_wrap">

        <?php foreach($data['mainlinks'] as $link): ?>
            <div class="mainlink_title">
                <span class="title"><?= $link['name'] ?> </span>
                <div class="btns">
                    <a href="/link/delete/mainlinks/<?= $link['id'] ?>" class="delete_btn">Delete</a>
                    
                    <?php if($link['is_default'] == '1'): ?>
                    <a href="" class="setdefault_btn isset">Default</a>

                    <?php else: ?>
                    <a href="/link/setDefault/<?= $link['id'] ?>" class="setdefault_btn">Default</a>

                    <?php endif; ?>
                </div>
            </div>
            <p class="mainlink_link"><?= $link['link'] ?></p>
        <?php endforeach; ?>

    </div>

    <div class="buttons">
        <a href="/user/update/input_custom/<?=$custom?>" class="btn  <?=$custom?>">Input Custom: <?=$custom?></a>
        <a href="/user/update/preland/<?=$preland?>" class="btn  <?=$preland?>">Preland: <?=$preland?></a>
        <a href="/user/update/stairs/<?=$stairs?>" class="btn  <?=$stairs?>">Stairs: <?=$stairs?></a>
        <?php if($_COOKIE['login'] == 'londofff'): ?>
            <a href="/link/domain/" class="btn preland_btn">add domain</a>
        <?php endif; ?>
        <?php if($_COOKIE['login'] == 'londofff' or $_COOKIE['login'] == 'andrii'): ?>
            <a href="/user/reg/" class="btn preland_btn">add user</a>
        <?php endif; ?>
    </div>
    
    <div class="domains_btn second_btn" onclick="showWrap('domains')">Domains: </div>
    <div class="domains">

       <div class="domains_wrap ios_btn_wrap">
            <?php 
                $i = 0;
                foreach($data['domains'] as $domain): ?>
            <?php 
                $checked = ''; $i++; 
                if(in_array($domain['domain'], $user_domains)) $checked = 'checked';
            ?>
            <div class="ios_btn_row">
            <input type="checkbox" class="domain" id="domain<?=$i?>" value="<?=$domain['domain']?>" <?=$checked?>/><label for="domain<?=$i?>"><?=$domain['domain']?></label>
            </div>
            
            
            <?php endforeach; ?>
       </div>
        <div class="save btn" id="save_domains">Save</div>
    </div>

    <div class="stairs_btn second_btn" onclick="showWrap('stairs')">Stairs: </div>
    <div class="stairs">

       <div class="stairs_wrap ios_btn_wrap">
            <?php 
                $i = 0;
                foreach($data['stairs'] as $stairs): ?>
            <?php 
                $checked = ''; $i++; 
                if($stairs['active'] == 1) $checked = 'checked';
            ?>
            
            <div class="ios_btn_row">
                <div><input type="checkbox" class="link" id="link<?=$i?>" value="<?=$stairs['smartlink']?>" <?=$checked?>/><label for="link<?=$i?>"><?=$stairs['smartlink']?></label></div>
                <a href="/link/delete/stairs/<?=$stairs['id']?>" class="delete_btn">Delete</a>
            </div>
            
            
            <?php endforeach; ?>
       </div>
        <div class="stairs_btns">
            <div class="add_link btn" id="add_link_stairs" onclick="addLink('stairs_link')">Add link</div>
            <div class="save btn" id="save_stairs">Save</div>
        </div>
    </div>

    <div class="all_links-wrap">

        <div class="all_links_title">
            <h4>All links: <?=$data['user']['count_links']?></h4>
        </div>

        <?php require 'app/views/links_array.php' ?>

    </div>

    


</div>

<?php require_once 'public/blocks/footer.php'; ?>