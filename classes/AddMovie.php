<?php

require_once 'core/init.php';
class AddMovie
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }

    public static function add_new_movie($title,$year,$genre_id){
        $query = self::$_pdo->prepare('INSERT INTO video_club.movies(movies.title, movies.year,movies.genre_id) VALUES (?, ?, ?)');
        $query->bindParam(1, $title);
        $query->bindParam(2, $year);
        $query->bindParam(3, $genre_id);

        $query->execute();
    }
}
AddMovie::init();