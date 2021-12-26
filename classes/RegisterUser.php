<?php

require_once 'core/init.php';
class RegisterUser
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }

    public static function register_new_user($username,$password,$first_name,$last_name){
        $query = self::$_pdo->prepare('INSERT INTO video_club.users(users.username, users.password,users.first_name, users.last_name) VALUES (?, ?, ?, ?)');
        $query->bindParam(1, $username);
        $query->bindParam(2, $password);
        $query->bindParam(3, $first_name);
        $query->bindParam(4, $last_name);
       $query->execute();
    }

}
RegisterUser::init();