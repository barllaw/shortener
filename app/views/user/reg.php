<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
?>
<div class="container">
    <div class="login">
        <form action="/user/reg" method="post">
            <input type="text" name="login" class="login_input" onkeyup="checkInput('login_input')" autofocus>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</div>
<?php require_once 'public/blocks/footer.php'; ?>
