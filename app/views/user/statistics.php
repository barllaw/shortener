<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/popup.php'; 
?>

<div class="container">

    <div class="all_links-wrap">

        <div class="all_links_title">
            <h4>All links: <?=$data['user']['count_links']?></h4>
            <h4><?= $data['login'] ?></h4>
            <?php if($_COOKIE['login'] == 'londofff' or $_COOKIE['login'] == 'andrii'): ?>
                <div class="delete_user" onclick="deleteUser('<?=$data['login']?>')">Delete user</div>
            <?php endif; ?>
        </div>

        <?php require 'app/views/links_array.php' ?>

    </div>

</div>

<?php require_once 'public/blocks/footer.php'; ?>