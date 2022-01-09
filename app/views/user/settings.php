<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 

$preland = $data['settings']['preland'];
$custom = $data['settings']['input_custom'];
$stairs = $data['settings']['stairs'];
$bot = $data['settings']['telegram_bot'];

$user_domains = explode(',', $data['settings']['domains']);
?>

<div class="container dashboard">

    <div class="login_title"><h3><?= $data['user']['login'] ?> Settings</h3> <?php if($_COOKIE['login'] == 'londofff') echo '<a href="/user/change/login" class="change_login_btn">Change login</a>';?> </div>
    
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
        <a href="/user/update/input_custom/<?=$custom?>" class="btn  <?=$custom?>">Custom: <?=$custom?></a>
        <?php if($_COOKIE['login'] == 'londofff' or $_COOKIE['login'] == 'fanjq'): ?>
            <a href="/link/domain/" class="btn preland_btn">add domain</a>
        <?php endif; ?>
        <?php if($_COOKIE['login'] == 'londofff' or $_COOKIE['login'] == 'fanjq'): ?>
            <a href="/user/reg/" class="btn preland_btn">add user</a>
        <?php endif; ?>
    </div>
    
    <div class="themes_wrap">
        <h3>Theme</h3>
        <form action="/user/settings/" method="post">
            <input type="hidden" value="true" name="change_theme">
            <select name="theme" id="theme">
                <option value="light" <?php if($data['settings']['theme'] == 'light') echo 'selected'; ?> >Light</option>
                <option value="dark" <?php if($data['settings']['theme'] == 'dark') echo 'selected'; ?> >Dark</option>
            </select>
            <button type="submit" class="btn" >Change</button>    
        </form>
    </div>

    <?php if($_COOKIE['login'] != 'test' ): ?>
    <div class="preland">
        <div class="preland_title">
            <h4>Preland</h4>
            <a href="/user/update/preland/<?=$preland?>" class="btn  <?=$preland?>"><?=$preland?></a>
        </div>
        <div class="preland_list">

            <select name="landing" id="landing">

            <?php foreach($data['landings'] as $land): ?>
                <option value="<?=$land['name']?>" <?php if($land['name'] == $data['settings']['landing']) echo 'selected'; ?> ><?=$land['name']?></option>
            <?php endforeach; ?>
            </select>
            <a href="/" id="link_to_land"><i class="far fa-eye"></i> View</a>
        </div>
        <div class="btn_land_save">Save</div>
    </div>
    <?php endif; ?>

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
        <a href="/user/update/stairs/<?=$stairs?>" class="btn  <?=$stairs?>">Stairs: <?=$stairs?></a>
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

    <div class="telegram_bot_wrap">
        <div class="bot_title">
            <h4>Telegram Bot</h4>
            <a href="/user/update/telegram_bot/<?=$bot?>" class="btn  <?=$bot?>"><?=$bot?></a>
        </div>
        <form action="/user/update_tg_bot" id="telegram_bot_form" method="post">
            <label for="bot_token">Token</label>
            <input type="text" name="bot_token" value="<?=$data['settings']['bot_token']?>">
            <label for="bot_chat_id">Chat id</label>
            <input type="text" name="bot_chat_id" value="<?=$data['settings']['bot_chat_id']?>">
            <button class="btn">Save</button>
        </form>
    </div>
    <div class="change_password_wrap">
        <a href="/user/change/password">Change Password</a>
    </div>

</div>

<?php
require_once 'public/blocks/popup.php';
require_once 'public/blocks/footer.php'; 
?>