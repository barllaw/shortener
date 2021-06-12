<?php 

$url = explode('/', filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_STRING));

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 
require_once 'public/blocks/navigation.php';



$user_domains = explode(',', $data['settings']['domains']);

?>

<div class="copy_success">copied</div>
<div class="container">
    
    <div class="shortlink_stats">
        <div class="titles">
            <div class="geo_title">Country</div>
            <div class="clicks_title">Clicks</div>
        </div>
        <div class="stats_wrap">
            <?php foreach($data['stats'] as $country => $clicks): ?>
                <div class="visitor">
                    <div class="geo"><?= $country ?></div>
                    <div class="clicks"> <?= $clicks ?> </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
        
</div>

<?php require_once 'public/blocks/footer.php'; ?>