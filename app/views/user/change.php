<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 

if($data['param'] == 'login' and $_COOKIE['login'] != 'londofff') header('location: /');

?>
<div class="container change">
    <p>Change <?=$data['param']?></p>
    <div class="login">
        <form action="" method="post">
            <input type="hidden" name="param" value="<?=$data['param']?>">
            <div>
                <label for="current_<?=$data['param']?>">Current <?=$data['param']?></label>
                <input type="<?php if($data['param'] == 'login'){ echo 'text';}else{ echo $data['param'];}?>" name="current" class="login_input" autofocus>
            </div>
            <div>
                <label for="new_<?=$data['param']?>">New <?=$data['param']?></label>
                <input type="<?php if($data['param'] == 'login'){ echo 'text';}else{ echo $data['param'];}?>" name="new" class="login_input">
            </div>
            <p class="msg_error"></p>
            <button type="submit">Change</button>
        </form>
    </div>
</div>
<?php require_once 'public/blocks/footer.php'; ?>
