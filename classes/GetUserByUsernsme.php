<?php

require_once 'core/init.php';
class GetUserByUsernsme
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }
    public static function GetUser($username)
    {
        $statement = self::$_pdo->prepare("SELECT * FROM video_club.users where users.username=:username");
        $statement->bindParam(':username',$username);
        $statement->execute();
return  $statement->fetch(PDO::FETCH_ASSOC);
    }
}
GetUserByUsernsme::init();