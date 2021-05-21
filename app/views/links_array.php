<?php  foreach($data['links'] as $date => $links):  ?>

    <?php 
        $sum_clicks = 0;
        foreach ($links as $link){ $sum_clicks += $link['clicks']; }
        $count = count($links);
        $profit = ($data['profit'][$date]) ? ' Profit $' . $data['profit'][$date] : '' ;
        $day = explode('.',$date);
        $day = '2021-'.$day[1].'-'.$day[0]; 
    ?>

    <div class="links_top">

        <div class="day">
            <?php echo date("l d.m", strtotime($day)) ?>
        </div>

        <div class="day_stats">
            <?php echo 'Links '.$count.' Clicks '.$sum_clicks . $profit ; ?>
        </div>

    </div>

    <?php foreach($links as $link):  ?>

            <div class="link_row">
                <div class="link"><textarea wrap="hard" disabled><?=$link['link'] ?></textarea></div>
                <p class="shortlink"> <?=$link['short_link'] ?> </p>
                <p class="tiktok"> <a target="blank" href="https://www.<?=$link['tiktok'] ?>"><?=$link['tiktok'] ?></a><small> <?=$link['geo'] ?></small></p>
                <div class="span">
                    <p> <b>Clicks</b> <?=$link['clicks']?> 
                    <?php  if($link['last_click'] != '')
                        echo "<span class='last_click'> Last click: <span>$link[last_click]</span></span>"; 
                    ?></p>
                </div>
                <p class="profit"> <?php if($link['profit'] != '0') echo "<span class='profit'>Profit <b>$$link[profit]</b></span>"; ?> </p>
                <p class="time_created"><?=$link['time_created'] ?></p>
                <div class="delete_btn" onclick="deleteShortlink(<?= '\''.$link['link'].'\',\''.$link['short_link'].'\',\''.$link['tiktok'].'\',\''.$link['id'].'\''?>)">Delete</div>
            </div>

    <?php endforeach; ?>    

<?php endforeach; ?>