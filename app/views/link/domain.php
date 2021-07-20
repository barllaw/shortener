<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
?>
<div class="container">
    <div class="new_domain">
        <form action="/link/domain" method="post">
            <input type="text" name="domain" autofocus>
            <input type="text" name="users">
            <button type="submit">add</button>
        </form>
    </div>
</div>
<?php require_once 'public/blocks/footer.php'; ?>
