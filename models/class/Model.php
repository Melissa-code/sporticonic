<?php

abstract class Model{
    private static $pdo;

    private static function setDb(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=sporticonic;charset=utf8", "root", "root");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function getDb(){
        if(self::$pdo === null){
            self::setDb();
        }
        return self::$pdo;
    }
}