<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
?>
<div class="container">
    <div class="login">
        <form action="/user/auth" method="post">
            <div>
                <label for="login">Login</label>
                <input type="text" name="login" class="login_input" onkeyup="checkInput('login_input')" autofocus>
            </div>
           <div>
                <label for="pass">Password</label>
                <input type="password" name="pass" class="login_input pass_input" onkeyup="checkInput('pass_input')">
           </div>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
<?php require_once 'public/blocks/footer.php'; ?>
