<?php  foreach($data['stats'] as $row):  ?>
    <?php 
        $date = $row['date'];
        $day = explode('.',$row['date']);
        $day = '2021-'.$day[1].'-'.$day[0]; 
        $leads = ($row['leads']) ? ' Leads ' . $row['leads'] : '' ;
        $profit = ($row['profit']) ? ' Profit $' . round($row['profit'], 2) : '' ;
    ?>

    <div class="links_top">

        <div class="day">
            <?php echo date("l d.m", strtotime($day)) ?>
        </div>

        <div class="day_stats">
            <?php echo "<span>Links $row[links]</span><span>Clicks $row[clicks]</span><span>$leads</span><span>$profit</span>" ; ?>
        </div>

    </div>
    <?php foreach($data['links'] as $link): ?>
            <?php if($link['date_created'] == $date): ?>
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
                    <div class="edit_btn" onclick="editShortlink(<?= '\''.$link['link'].'\',\''.$link['short_link'].'\',\''.$link['tiktok'].'\',\''.$link['id'].'\',\''.$link['date_created'].'\''?>)">edit</div>
                </div>
            <?php endif; ?>
    <?php endforeach; ?>

<?php endforeach; ?>