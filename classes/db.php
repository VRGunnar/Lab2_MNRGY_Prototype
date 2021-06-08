<?php
abstract class Db
{
    private static $conn;

    public static function getConnection(){
        include_once (__DIR__ . "../settings/settings.php");

        if (self::$conn === null) {
            self::$conn = new PDO('mysql:host=localhost:3307;dbname=db_mnrgy', "root", "root");
//            self::$conn = new PDO('mysql:host=' . SETTINGS['db']['host'] . ":" . SETTINGS['db']['port'] . ';dbname=' . SETTINGS['db']['dbname'], SETTINGS['db']['user'], SETTINGS['db']['password']);
            echo "db connected";
            return self::$conn;
        } else {
            echo "db connected";
            return self::$conn;
        }

    }
}