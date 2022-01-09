<?php 
date_default_timezone_set('Europe/Kiev');

    require_once '../app/core/DB.php';
    $db = DB::getInstence();

    $today = date("d.m");
    
    $query = $db->query("DELETE FROM `postback`");

    $query = $db->query("SELECT * FROM `users`");
    $row = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($row as $user){
        $query = $db->query("INSERT INTO `statistics` (`login`, `date`) VALUES ('$user[login]', '$today') ");
    }
?>
