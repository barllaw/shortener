<?php

class DB{
    private static $_db = null;

    public static function getInstence()
    {
        if(self::$_db == null){
            // self::$_db = new PDO('mysql:host=localhost;dbname=kptzufrw_shortener;charset=utf8', 'kptzufrw_root', 'o*j0<r{BrcX5', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            self::$_db = new PDO('mysql:host=localhost;dbname=kptzufrw_shortener;charset=utf8', 'londofff_admin', '9H0r9K9o', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }return self::$_db;
    }
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}