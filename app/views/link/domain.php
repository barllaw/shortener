<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
?>
<div class="container">
    <div class="login">
        <form action="/link/domain" method="post">
            <input type="text" name="domain" class="login_input" onkeyup="checkInput('login_input')" autofocus>
            <button type="submit">add</button>
        </form>
    </div>
</div>
<?php require_once 'public/blocks/footer.php'; ?>
