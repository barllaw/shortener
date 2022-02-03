<?php  foreach($data['stats'] as $row):  ?>
    <?php 
        $date = $row['date'];
        $day = explode('.',$row['date']);
        $day = '2022-'.$day[1].'-'.$day[0]; 
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
                <div class="link_row soft_<?=$link['soft']?>">
                    <a href="/link/tag/tag_<?=$link['tag']?>/<?=$link['id']?>" class="tag tagged_<?=$link['tag']?>"></a>
                    <?php if((!$link['soft'] or $link['tag'] == 1) and !$link['main_acc']):?>
                    <div class="link"><textarea wrap="hard" disabled><?=$link['link'] ?></textarea></div>
                    <p class="shortlink"> <?=$link['short_link'] ?> </p>
                    <?php endif;?>
                    <p class="account"> <a target="blank" href="https://www.<?=$link['account'] ?>"><?=$link['account'] ?></a><small> <?=$link['geo'] ?></small> 
                        <?php 
                            if($link['main_acc']) {echo "<a class='links_main_acc' href='/user/dashboard/account/$link[main_acc]'>$link[main_acc]</a>";}
                            else if($link['accs_under']){
                                $nickname = explode('/', $link['account']);
                                $nickname = ltrim($nickname[1], '@');
                                echo "<a class='accs_under' href='/user/dashboard/accs_under/$nickname'>accs $link[accs_under]</a>";}
                        ?>
                    </p>
                    <?php if($link['clicks']):?>
                        <div class="clicks">
                            <p> <b>Clicks</b> <?=$link['clicks']?> 
                            <?php  if($link['last_click'] != '')
                                echo "<span class='last_click'> Last click: <span>$link[last_click]</span></span>"; 
                            ?></p>
                        </div>
                    <?php endif;?>
                    <p class="profit"> <?php if($link['profit'] != '0') echo "<span class='profit'>Profit <b>$$link[profit] </b></span><span class='leads'> Leads $link[leads]</span>"; ?> </p>
                    <div class="edit_btn" onclick="editShortlink(<?= '\''.$link['link'].'\',\''.$link['short_link'].'\',\''.$link['account'].'\',\''.$link['id'].'\',\''.$link['date_created'].'\''?>)">edit</div>
                    <p class="time_created"><?=$link['time_created'] ?></p>
                </div>
            <?php endif; ?>
    <?php endforeach; ?>

<?php endforeach; ?>