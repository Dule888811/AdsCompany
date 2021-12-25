<?php

require_once 'core/init.php';
class GetMovies
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }
    public static function getAllUMovies(){
        $query =self::$_pdo->query("SELECT * FROM video_club.movies");
        return	$results = $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
GetMovies::init();
