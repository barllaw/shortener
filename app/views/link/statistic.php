<?php 

require_once 'public/blocks/head.php';
require_once 'public/blocks/header.php'; 

?>

<div class="container shortlink_stats">
    
    <div class="counties_clicks_wrap">
        <div class="shortlink_title">
            <?=$data['shortlink'];?>
        </div>
        <div class="titles">
            <div class="geo_title">Country</div>
            <div class="clicks_title">Clicks</div>
        </div>
        <div class="stats_wrap">
            <?php foreach($data['stats'] as $country => $clicks): ?>
                <div class="stats">
                    <div class="geo"><?= $country ?></div>
                    <div class="clicks"> <?= $clicks ?> </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="visitors_wrap">
        <div class="visitor_row">
            <div class="country_code">Country Code</div>
            <div class="city">City</div>
            <div class="date">Date</div>
        </div>
        <?php foreach($data['visitors'] as $visitor): ?>
        <div class="visitor_row">
            <div class="country_code"><?=$visitor['country_code']?></div>
            <div class="city"><?=$visitor['city']?></div>
            <div class="date"><?=date('d.m', $visitor['date'])?></br><?=date('h:i:s', $visitor['date'])?></div>
        </div>
        <?php endforeach; ?>
    </div>
        
</div>

<?php require_once 'public/blocks/footer.php'; ?>