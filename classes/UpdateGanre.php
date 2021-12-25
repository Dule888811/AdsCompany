<?php
require_once 'core/init.php';
class UpdateGanre
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }


    public static function EditGanre($id,$name)
    {
        self::$_pdo = Connect::getInstance();
        $query = self::$_pdo->prepare('UPDATE video_club.genres SET genres.name = :name  WHERE genres.id = :g_id');
        $query->bindParam(':g_id', $id);
        $query->bindParam(':name', $name);
        $query->execute();





    }
}
UpdateMovie::init();