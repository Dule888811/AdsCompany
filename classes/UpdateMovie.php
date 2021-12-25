<?php

require_once 'core/init.php';
class UpdateMovie
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }


    public static function EditMovie($id,$title, $year, $genre_id)
    {
        $query = self::$_pdo->prepare('UPDATE video_club.movies SET movies.title = :a_title, movies.year = :a_year, movies.genre_id = :a_genre  WHERE movies.id = :a_id');
        $query->bindParam(':a_id', $id);
        $query->bindParam(':a_title', $title);
        $query->bindParam(':a_year', $year);
        $query->bindParam(':a_genre', $genre_id);
        $query->execute();
    }
}
UpdateMovie::init();