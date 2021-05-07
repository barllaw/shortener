<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/popup.php';

$preland = $data['user']['preland'];
$user_domains = explode(',', $data['user']['domains']);



?>

<div class="container">
    
    <div class="all_links-wrap">
        <?php if($data['user']['domains']==''): ?>
            <div class="alert">
                <h3>Warning</h3>
                <p>Не вибрано домена для скорочення. <br> Зайдіть в профіль, нажміть DOMAINS:,
                     виберіть домени для скорочення і нажміть SAVE</p>
            </div>
        <?php else: ?>
            <form action="/link/shorten" method='post' id="shortener_form">
                <label for="link">Link:</label>
                <textarea name='link' wrap="hard" onkeyup="textAreaAdjust(this)" class="link_textarea"></textarea>
                <div class="links_radio_btn second_btn" onclick="showWrap('links_radio')">Mainlinks:</div>
                <div class="radio-wrap links_radio">
                    <?php 
                        foreach($data['mainlinks'] as $link){
                            $default = '';
                            if($link['is_default'] == '1') $default = 'checked';
                            echo '<div class="mainlink"><label class="radio_label"><input class="radio" type="radio" value="'.$link['link'].'" name="mainlink" '.$default.'> '.$link['name'].'</label></div>';
                        }
                    ?>
                </div>
                <label for="nickname">Nickname</label>
                <div class="nickname_row">
                    <input type="text" name="nickname" class="nickname" onkeyup="checkInput('nickname')">
                    <!-- <div class="img" onclick="pasteText()"></div> -->
                </div>
                <?php if($data['user']['input_custom'] == 'On'): ?>
                <label for="custom_link">Custom:</label>
                <input type="text" name="custom_link" class="custom_link" onkeyup="checkInput('custom_link')">
                <?php endif; ?>
                <div class="radio-wrap">
                    <div class="domains_btn second_btn" onclick="showWrap('domains')">Domains: </div>
                    <div class="domains">
                        <?php foreach($user_domains as $domain): ?>
                            <label class="radio_label"><input class="radio" type="radio" value="<?= $domain ?>" name='domain' > <?= $domain ?> </label>
                        <?php endforeach; ?>
                    </div>
                    
                </div>
                <select name="geo" id="geo">
                    <option value="">Choose country</option>
                    <option value="Germany" <?php if( $data['lang'] == 'DE') echo 'selected'; ?>>Germany</option>
                    <option value="New Zealand" <?php if( $data['lang'] == 'NZ') echo 'selected'; ?>>New Zealand</option>
                    <option value="France" <?php if( $data['lang'] == 'FR') echo 'selected'; ?>>France</option>
                    <option value="Netherlands" <?php if( $data['lang'] == 'NL') echo 'selected'; ?>>Netherlands</option>
                    <option value="Spain" <?php if( $data['lang'] == 'ES') echo 'selected'; ?>>Spain</option>
                    <option value="United State" <?php if( $data['lang'] == 'US') echo 'selected'; ?>>United State</option>
                    <option value="Portugal" <?php if( $data['lang'] == 'PT') echo 'selected'; ?>>Portugal</option>
                    <option value="Italy" >Italy</option>
                    <option value="Czech Republic" >Czech Republic</option>
                    <option value="Poland" >Poland</option>
                    <option value="Greece" >Greece</option>
                    <option value="Croatia" >Croatia</option>
                    <option value="Latvia" >Latvia</option>
                </select>
                <button type='submit' class="btn" id="shorten_btn">Shorten</button>
            </form>

            <div class="shortlink-wrap">
                <h4>Your short link:</h4>
                <div class="shortlink_line">
                    <p id="shortlink"><?= $_SESSION['shortlink'] ?></p>
                    <div class="copy_btn" data-clipboard-text="<?=$_SESSION['shortlink']?>"><img src="/public/img/copy_icon.png" onclick="copyLink('.copy_btn', '.copy_success')"></div>
                    <div class="copy_success">copied</div>
                </div>
                <div class="shortlink_line shortlink_line_https">
                    <p id="shortlink_http">https://<?= $_SESSION['shortlink'] ?></p>
                    <div class="copy_btn_http" data-clipboard-text="https://<?=$_SESSION['shortlink']?>" onclick="copyLink('.copy_btn_http', '.copy_success_http')"><img src="/public/img/copy_icon.png" alt=""></div>
                    <div class="copy_success_http">copied</div>
                </div>
            </div>        
        <?php endif; ?>
            <?php 
                
                $usr_arr = ['londofff','andrii','makeover','emannon', 'moom'];
                if(in_array($_COOKIE['login'], $usr_arr)){
                    echo '<div class="second_btn " onclick="showWrap(\'users-wrap\')">Users</div>';
                    echo '<div class="users-wrap">';
                    foreach($data['users_links'] as $user => $links){
                        $sum_clicks = 0;
                        foreach($links as $link){  $sum_clicks += $link['clicks'];    }
                        $user_links = count($links);
                        echo "<div class='user_row'><div class='user_today'>$user : links $user_links clicks $sum_clicks</div><a href='/user/statistics/$user'>statistics</a></div>";
                    }
                    echo '</div>';
                }
            
            foreach($data['links'] as $date => $links):  ?>
            <p class="date_created"><?php 
                $sum_clicks = 0;
                foreach($links as $link){
                    $sum_clicks += $link['clicks'];
                }

                $count = count($links);

                if($data['profit'] != '') $profit = ' Profit <b>$' . $data['profit'] . '</b>';
                echo '<b>'.$date.'</b> links '.$count.' clicks '.$sum_clicks . $profit ;  

                ?></p>
            <?php
            foreach($links as $link):  ?>

                    <div class="link_row">
                        <div class="link"><textarea wrap="hard" disabled><?=$link['link'] ?></textarea></div>
                        <p class="shortlink"> <?=$link['short_link'] ?> </p>
                        <p class="tiktok"> <a target="blank" href="https://www.<?=$link['tiktok'] ?>"><?=$link['tiktok'] ?></a> <?php if($link['ban'] != '') echo '<span class="ban">'.$link['ban'].'</span>'; ?> <small> <?=$link['geo'] ?></small></p>
                        <div class="span">
                            <p> <b>Clicks</b> <?=$link['clicks']?> 
                            <?php if($link['profit'] != '0') echo "<span class='profit'>$$link[profit]</span>"; if($link['last_click'] != '') echo "<span class='last_click'> Last click: <span>$link[last_click]</span></span>"; ?></p>
                            <p class="time_created"><?=$link['time_created'] ?></p>
                        </div>
                    </div>
            
            <?php endforeach; ?>

        <?php endforeach; ?>
    </div>

</div>

<?php require_once 'public/blocks/footer.php'; ?>