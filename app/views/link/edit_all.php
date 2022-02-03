<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
?>
<div class="container">
    <div class="login">
        <form action="/link/editAllLink" method="post">
            <label for="link">Link</label>
            <input type="text" name="link" class="login_input" onkeyup="checkInput('login_input')" autofocus>
            <button type="submit">Edit</button>
        </form>
    </div>
</div>
<?php require_once 'public/blocks/footer.php'; ?>
