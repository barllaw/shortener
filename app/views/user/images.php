<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 

?>

<div class="container images">

    <form id="add_image" action="/user/addImages" method="post" enctype="multipart/form-data">

            <label for="images" class="choose">Select...</label>
            <input id="images" type="file" name='images[]' multiple >

            <button type='submit' class="btn">Add</button>

    </form>

    <?php 
    $path = "./public/img/users_img/$_COOKIE[login]/"; // задаем путь до сканируемой папки с изображениями
    
    if(is_dir($path)):?>

        <?php $images = scandir($path); // сканируем папку
        echo '<div class="images_wrap">';
        foreach($images as $image): ?>
            <?php  if($image != '.' and $image!='..'): ?>
                <div class='image'>
                    <img src='<?= "/public/img/users_img/$_COOKIE[login]/" . $image ?>'>
                    <a href="/user/images/download/<?= $image ?>" class="download_img"><i class="fas fa-download"></i> Download</a>
                    <a href="/user/images/remove/<?= $image ?>" class="remove_img"><i class="fas fa-trash-alt"></i></a>
                </div>
            <?php endif; ?>
        <?php endforeach;
        echo '</div>';
        ?>
    <?php endif; ?>
    
</div>

<?php
require_once 'public/blocks/footer.php'; 
?>