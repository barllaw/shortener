<?php  foreach($data['links'] as $date => $links):  ?>

    <?php 
    
        $sum_clicks = 0;
        foreach ($links as $link){ $sum_clicks += $link['clicks']; }
        $count = count($links);
        $profit = ($data['profit'][$date]) ? ' Profit $' . round($data['profit'][$date], 2) : '' ;
        $day = explode('.',$date);
        $day = '2021-'.$day[1].'-'.$day[0]; 
    ?>

    <div class="links_top">

        <div class="day">
            <?php echo date("l d.m", strtotime($day)) ?>
        </div>

        <div class="day_stats">
            <?php echo "<span>Links $count</span><span>Clicks $sum_clicks</span><span>$profit</span>$ref" ; ?>
        </div>

    </div>

    <?php foreach($links as $link):  ?>

            <div class="link_row">
                <div class="link"><textarea wrap="hard" disabled><?=$link['link'] ?></textarea></div>
                <p class="shortlink"> <?=$link['short_link'] ?> </p>
                <p class="tiktok"> <a target="blank" href="https://www.<?=$link['tiktok'] ?>"><?=$link['tiktok'] ?></a><small> <?=$link['geo'] ?></small></p>
                <div class="clicks">
                    <p> <b>Clicks</b> <?=$link['clicks']?> 
                    <?php  if($link['last_click'] != '')
                        echo "<span class='last_click'> Last click: <span>$link[last_click]</span></span>"; 
                    ?></p>
                </div>
                <p class="profit"> <?php if($link['profit'] != '0') echo "<span class='profit'>Profit <b>$$link[profit] </b></span><span class='leads'> Leads $link[leads]</span>"; ?> </p>
                <p class="time_created"><?=$link['time_created'] ?></p>
                <div class="edit_btn" onclick="editShortlink(<?= '\''.$link['link'].'\',\''.$link['short_link'].'\',\''.$link['tiktok'].'\',\''.$link['id'].'\''?>)">edit</div>
                <a href="/link/statistics/<?= $link['id'] ?>" class="stats_link_btn">stats</a>
            </div>

    <?php endforeach; ?>    

<?php endforeach; ?>