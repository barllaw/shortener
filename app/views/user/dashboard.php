<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/popup.php';

$preland = $data['user']['preland'];
$custom = $data['user']['input_custom'];

$user_domains = explode(',', $data['user']['domains']);
?>

<div class="container">

    <div class="login_title"><h3><?= $data['user']['login'] ?></h3></div>
    
   <div class="new_mainlink_btn" onclick="saveLink()">Add new mainlink</div>
   <div class="mainlink_wrap">

        <?php foreach($data['mainlinks'] as $link): ?>
            <div class="mainlink_title">
                <span class="title"><?= $link['name'] ?> </span>
                <div class="btns">
                    <a href="/link/delete/<?= $link['id'] ?>" class="delete_link_btn">Delete</a>
                    
                    <?php if($link['is_default'] == '1'): ?>
                    <a href="" class="setdefault_btn isset">Default</a>

                    <?php else: ?>
                    <a href="/link/setDefault/<?= $link['id'] ?>" class="setdefault_btn">Default</a>

                    <?php endif; ?>
                </div>
            </div>
            <div class="mainlink_link"><?= $link['link'] ?></div>
        <?php endforeach; ?>

    </div>

    <div class="buttons">
        <a href="/user/custom/<?=$custom?>" class="btn preland_btn <?=$custom?>">Input Custom: <?=$custom?></a>
        <a href="/user/preland/<?=$preland?>" class="btn preland_btn <?=$preland?>">Preland: <?=$preland?></a>
        <a href="/link/domain/" class="btn preland_btn">add domain</a>
    </div>
    
    <div class="domains_btn second_btn" onclick="showWrap('domains')">Domains: </div>
    <div class="domains">

       <div class="domains_wrap">
            <?php 
                $i = 0;
                foreach($data['domains'] as $domain): ?>
            <?php 
                $checked = ''; $i++; 
                if(in_array($domain['domain'], $user_domains)) $checked = 'checked';
            ?>
            <label for="domain<?=$i?>"><input type="checkbox" class="domain" id="domain<?=$i?>" value="<?=$domain['domain']?>" <?=$checked?>/><?=$domain['domain']?></label>
            
            
            <?php endforeach; ?>
       </div>
        <div class="save btn" id="save_domains">Save</div>
    </div>

    <div class="all_links-wrap">

        <div class="all_links_title">
            <h4>All links: <?=$data['user']['count_links']?></h4>
        </div>

        <?php foreach($data['links'] as $date => $links):  ?>
            <p class="date_created"><?php 
                $sum_clicks = 0;
                foreach($links as $link){
                    $sum_clicks += $link['clicks'];
                }

                $count = count($links);

                echo '<b>'.$date.'</b> links '.$count.' clicks '.$sum_clicks ;  

                ?></p>
            <?php
            foreach($links as $link):  ?>

                    <div class="link_row">
                        <div class="link"><textarea wrap="hard" disabled><?=$link['link'] ?></textarea></div>
                        <p class="shortlink"> <?=$link['short_link'] ?> </p>
                        <p class="tiktok"> <a target="blank" href="https://www.<?=$link['tiktok'] ?>"><?=$link['tiktok'] ?></a> <?php if($link['ban'] != '') echo '<span class="ban">'.$link['ban'].'</span>'; ?> <small> <?=$link['geo'] ?></small></p>
                        <div class="span"><span> <b>Clicks</b> <?=$link['clicks'] ?></span><span class="time_created"><?=$link['time_created'] ?></span></div>
                    </div>
            
            <?php endforeach; ?>

        <?php endforeach; ?>

    </div>

    


</div>

<?php require_once 'public/blocks/footer.php'; ?>