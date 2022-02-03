<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 

?>
<div class="copy_success">copied</div>

<div class="container texts">

    <div class="add_text">
        <form action="/user/addText" method="post">
            <textarea name="text" id="text"></textarea>
            <div class="text_geo">
                <select name="geo" id="geo">
                    <option value="">none</option>
                    <option value="ES">ES</option>
                    <option value="FR">FR</option>
                    <option value="DE">DE</option>
                    <option value="NL">NL</option>
                    <option value="CZ">CZ</option>
                </select>
            </div>
            <button class="add_new_text btn">add</button>
        </form>
        
    </div>    

    <div class="texts_wrap">

        <?php foreach($data['texts'] as $text): ?>
        <div class="text">
            <div class="geo_n_delete_btn">
                <span><?= $text['geo']; ?></span>
                <a href="/user/removeText/<?= $text['id']; ?>" class="delete_text_btn">delete</a>
            </div>
            <p><?= $text['text']; ?></p>
            <div class="copy_text" id="copy_btn" data-clipboard-text="<?=$text['text'];?>">copy</div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<?php
require_once 'public/blocks/footer.php'; 
?>