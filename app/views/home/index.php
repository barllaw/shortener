<?php 

$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $_SERVER['REMOTE_ADDR']));

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/popup.php';


$user_domains = explode(',', $data['settings']['domains']);

?>

<div class="copy_success">copied</div>
<div class="container">
    
    
        <?php if($data['settings']['domains']==''): ?>
            <div class="alert">
                <h3>Warning</h3>
                <p>No domains selected. </br>
                    Go to settings, press DOMAINS, select domains and press SAVE</p>
            </div>
        <?php else: ?>
        <div class="block">
            <form action="/link/shorten" method='post' id="shortener_form">
                <input type="text" value="0" name="soft" hidden>
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
                <div class="shortener_inputs">
                    <div>
                        <label for="nickname">Nickname</label>
                        <input type="text" name="nickname" class="nickname" onkeyup="checkInput('nickname')">
                    </div>

                    <div>
                        <?php if($data['settings']['input_custom'] == 'On'): ?>
                            <label for="custom_link">Custom:</label>
                            <input type="text" name="custom_link" class="custom_link" onkeyup="checkInput('custom_link')">
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="main_acc">Main account</label>
                        <input type="text" name="main_acc" class="main_acc">
                    </div>
                </div>

                <div class="service_radio_wrap">
                    <label class="container_service">Tiktok
                        <input type="radio" checked="checked" name="service" value="tiktok.com/@">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container_service">Instagram
                        <input type="radio" name="service" value="instagram.com/">
                        <span class="checkmark"></span>
                    </label>
                </div>

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
                    <?php require 'geo_options.php' ?>
                </select>
                <div class="tag_wrap">
                    <label for="tag" class="container_tag">
                        Tag
                        <input type="checkbox" name="tag" id="tag" value="1">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <button type='submit' class="btn" id="shorten_btn">Shorten</button>
            </form>

            <?php if($_SESSION['shortlink'] != ''): ?>
            <div class="shortlink-wrap">
                <h4>Your short link:</h4>
                <div class="shortlink_line">
                    <p id="shortlink"><?= $_SESSION['shortlink'] ?></p>
                    <div class="copy_btn" id="copy_btn" data-clipboard-text="<?=$_SESSION['shortlink']?>"> <span class="img_copy"></span></div>
                </div>
                <div class="shortlink_line shortlink_line_https">
                    <p id="shortlink_http">https://<?= $_SESSION['shortlink'] ?></p>
                    <div class="copy_btn_https" id="copy_btn" data-clipboard-text="https://<?=$_SESSION['shortlink']?>"> <span class="img_copy"></span></div>
                </div>
            </div>        
            <?php endif; ?>
        </div>
        <div class="block">
            <?php endif; ?>
                <?php 
                    
                    $usr_arr = ['fanjq','emannon', 'moom', 'ihor','londofff','makeover'];
                    if(in_array($_COOKIE['login'], $usr_arr)){
                        echo '<div class="second_btn " onclick="showWrap(\'users-wrap\')">Users</div>';
                        echo '<div class="users-wrap">';
                        foreach($data['users_links'] as $user => $links){
                            $sum_clicks = 0;
                            foreach($links as $link){  $sum_clicks += $link['clicks'];    }
                            $user_links = count($links);
                            $profit = ($data['users_profit'][$user]) ? 'Profit '.round($data['users_profit'][$user], 2) : '';

                            echo "<div class='user_row'>
                                    <div class='user_login'>
                                        $user   
                                    </div> 
                                    <div class='user_stats'>
                                    <span>Links $user_links Clicks $sum_clicks $profit</span>
                                    <a href='/user/statistics/$user'>stats</a>
                                    </div>
                                </div>";
                        }
                        echo '</div>';
                    }
                ?>
            <div class="all_links-wrap">
                <?php require 'app/views/links_array.php' ?>
            </div>
        </div>
</div>

<?php require_once 'public/blocks/footer.php'; ?>