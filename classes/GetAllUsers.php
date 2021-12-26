<?php

require_once 'core/init.php';
class GetAllUsers
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }

    public static function GetUsers()
    {
       $query =self::$_pdo->query("SELECT * FROM video_club.users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
GetAllUsers::init();