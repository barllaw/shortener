<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
?>

<div class="container">

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