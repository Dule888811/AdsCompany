<?php

require_once 'core/init.php';
class AddNewGenres
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }
    public static function AddGannre($name)
    {
        $query = self::$_pdo->prepare('INSERT INTO video_club.genres(genres.name) VALUES (?)');
        $query->bindParam(1, $name);
        $query->execute();

    }
}
AddNewGenres::init();