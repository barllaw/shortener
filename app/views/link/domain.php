<?php 
require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
?>
<div class="container">
    <div class="new_domain">
        <form action="/link/domain" method="post">
            <label for="domain">Domain</label>
            <input type="text" name="domain" autofocus>
            <label for="users">Users</label>
            <input type="text" name="users">
            <button type="submit">add</button>
        </form>
    </div>
</div>
<?php require_once 'public/blocks/footer.php'; ?>
