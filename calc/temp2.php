<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
    <link rel="stylesheet" href="/calc/style.css">
</head>
<body>
<?php 
require_once '../app/core/DB.php';

$db = DB::getInstence();
$query = $db->query("SELECT `login` FROM `users`");
$users = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $db->query("SELECT `login`, `percent`, `ref` FROM `settings`");
$settings = $query->fetchAll(PDO::FETCH_ASSOC);
echo '<div class="calc_users_wrap">';
for ($i=0; $i < count($users); $i++) { 
    echo '<div class="calc_user">';
    if($users[$i]['login'] == 'londofff' or $users[$i]['login'] == 'emannon') $settings[$i]['percent'] = 100;
    echo '<h4>'.$users[$i]['login'].'</h4>'.'<br>';
    echo '<p>Percent <input type="text" class="percent" value="'.$settings[$i]['percent'].'" disabled></p><br>';
    echo '<p>Ref <input type="text" class="ref" value="'.$settings[$i]['ref'].'" disabled></p><br>';
    echo '<p>Result: <input type="text" class="'.$users[$i]['login'].'_result result" value="0" disabled></p><br>';
    echo '</p><input type="text" class="user_sum '.$users[$i]['login'].'" value="0"  >'.'</p><br>';
    echo '</div>';
}
echo'</div>';
?>
<span class="span_total_sum">Total sum <input type="text" value="" class="total_sum"></span>
<div class="result_str_wrap"></div>
<div id="btn_calc" onclick="calc()">Calculate</div>


<script src="/public/js/jquery.min.js"></script>
<script src="/calc/calc.js"></script>

</body>
</html>