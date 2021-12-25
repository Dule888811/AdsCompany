<?php

require_once 'core/init.php';
class Genres
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }
    public static function getAllGenres()
        {
           $query =self::$_pdo->query("SELECT * FROM video_club.genres");
			return	$results = $query->fetchAll(PDO::FETCH_ASSOC);
        }

}
Genres::init();