<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/popup.php';

$preland = $data['user']['preland'];
?>

<div class="container">
    
    <div class="all_links-wrap">
        <form action="/link/shorten" method='post' id="shortener_form">
            <label for="link">Link:</label>
            <textarea name='link' wrap="hard" onkeyup="textAreaAdjust(this)" class="link_textarea"></textarea>
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
                <label class="radio_label"><input class="radio" type="radio" value="blisshub.fun" name='domain' checked> blisshub.fun </label>
                <label class="radio_label"><input class="radio" type="radio" value="chicshub.fun" name='domain' > chicshub.fun </label>
                <label class="radio_label"><input class="radio" type="radio" value="babeshub.fun" name='domain' > babeshub.fun </label>
                <label class="radio_label"><input class="radio" type="radio" value="yourhub.fun" name='domain' > yourhub.fun </label>
                <label class="radio_label"><input class="radio" type="radio" value="nighthub.fun" name='domain' > nighthub.fun </label>
            </div>
            <select name="geo" id="geo">
                <option value="">Choose country</option>
                <option value="Germany" <?php if( $data['lang'] == 'DE') echo 'selected'; ?>>Germany</option>
                <option value="New Zealand" <?php if( $data['lang'] == 'NZ') echo 'selected'; ?>>New Zealand</option>
                <option value="France" <?php if( $data['lang'] == 'FR') echo 'selected'; ?>>France</option>
                <option value="Netherlands" <?php if( $data['lang'] == 'NL') echo 'selected'; ?>>Netherlands</option>
                <option value="Spain" <?php if( $data['lang'] == 'ES') echo 'selected'; ?>>Spain</option>
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
                <div class="copy_btn" onclick="copyLink('#shortlink')"><img src="/public/img/copy_icon.png" alt=""></div>
                <div class="copy_success">copied</div>
            </div>
            <div class="shortlink_line shortlink_line_https">
                <p id="shortlink_http">https://<?= $_SESSION['shortlink'] ?></p>
                <div class="copy_btn" onclick="copyLink('#shortlink_http')"><img src="/public/img/copy_icon.png" alt=""></div>
                <div class="copy_success">copied</div>
            </div>
            
        </div>        
            <?php 
                
                $usr_arr = ['londofff','andrii','makeover','emannon'];
                if(in_array($_COOKIE['login'], $usr_arr)){
                    echo '<div id="users_btn">Users</div>';
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