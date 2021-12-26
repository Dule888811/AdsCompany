<?php

require_once 'core/init.php';
class UpdateUser
{
    private static $_pdo;

    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }

    public static function ChangeUsersInfo($id,$username, $password, $first_name, $last_name)
    {

        $query = self::$_pdo->prepare('UPDATE video_club.users SET  video_club.users.username = :username, video_club.users.password = :password, video_club.users.first_name = :first_name,video_club.users.last_name= :last_name  WHERE video_club.users.id =' . $id);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
       $query->bindParam(':first_name', $first_name);
        $query->bindParam(':last_name', $last_name);

        $query->execute();

    }
}
UpdateUser::init();