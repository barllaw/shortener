<?php

class DB{
    private static $_db = null;

    public static function getInstence()
    {
        if(self::$_db == null){
            self::$_db = new PDO('mysql:host=localhost;dbname=ywgyjdgk_shortener1;charset=utf8', 'ywgyjdgk_admin', 'andriy12', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }return self::$_db;
    }
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}