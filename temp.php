<?php 
require_once 'app/core/DB.php';

$db = DB::getInstence();
$query = $db->query("SELECT * FROM `statistics` WHERE `login` = 'londofff' ORDER BY `id` DESC");
$result = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row){
    $profit = $profit + $row['profit'];
    echo $row['date'].' '.$row['profit'].'<br>';
}

echo '<br> Profit '.$profit.'<br>';
echo '<br>';


echo '<br>';
echo '<br>';

$week_start = date("d", strtotime('monday this week'));
$week_end = date("d", strtotime('today'));
$day = ($week_end - $week_start) + 1;

$query = $db->query("SELECT * FROM `statistics` WHERE `login` = 'londofff' ORDER BY `id` DESC LIMIT $day");
$result = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row){
    $profit2 = $profit2 + $row['profit'];
    echo $row['profit'].'<br>';
}

echo '<br> Profit '.$profit2.'<br>';
?>