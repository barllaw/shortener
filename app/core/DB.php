<?php

class DB{
    private static $_db = null;

    public static function getInstence()
    {
        if(self::$_db == null){
            self::$_db = new PDO('mysql:host=localhost;dbname=byochwhn_shortener;charset=utf8', 'byochwhn_admin', 'eG0dA2gR6auC6x', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }return self::$_db;
    }
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}