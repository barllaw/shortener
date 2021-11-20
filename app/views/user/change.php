<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
?>
<div class="container change">
    <p>Change login</p>
    <div class="login">
        <form action="/user/change" method="post">
            <input type="text" name="new_login" class="login_input" onkeyup="checkInput('login_input')" autofocus>
            <button type="submit">Change</button>
        </form>
    </div>
</div>
<?php require_once 'public/blocks/footer.php'; ?>
