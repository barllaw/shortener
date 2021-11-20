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
        
        //RANDOM IMAGE
        $random_images = [];
        $num_array = [];
        for($i = 0; $i < 10; $i++){
            $max = count($images) - 1;
            $num = random_int(0, $max);
            if(!in_array($num, $num_array)){
                $random_images[] = $images[$num];
                $num_array[] = $num; 
            }
        }        
        echo '<div class="r_img_title img_title"><h4>Random images</h4>';
        if($_COOKIE['login'] == "londofff") echo "<div id='r_img-download'>DOWNLOAD</div>";
        echo '</div><div class="images_wrap">';
        foreach($random_images as $image): ?>
            <?php  if($image != '.' and $image!='..'): ?>
                <div class='image'>
                    <img src='<?= "/public/img/users_img/$_COOKIE[login]/" . $image ?>'>
                    <a href="/user/images/download/<?= $image ?>" class="download_img r_img"><i class="fas fa-download"></i> Download</a>
                    <a href="/user/images/remove/<?= $image ?>" class="remove_img"><i class="fas fa-trash-alt"></i></a>
                </div>
            <?php endif; ?>
        <?php endforeach;
        echo '</div>';
        //END

        
        echo '<h4 class="img_title">All images</h4><div class="images_wrap">';
        foreach($images as $image): ?>
            <?php  if($image != '.' and $image!='..'): ?>
                <div class='image'>
                    <img src='<?= "/public/img/users_img/$_COOKIE[login]/" . $image ?>'>
                    <a href="/user/images/download/<?=$image?>" class="download_img"><i class="fas fa-download"></i> Download</a>
                    <a href="/user/images/remove/<?=$image?>" class="remove_img"><i class="fas fa-trash-alt"></i></a>
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