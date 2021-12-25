<?php

require_once 'core/init.php';
class GetMovieById
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }

    public static function MovieId( $id)
    {


        self::$_pdo = Connect::getInstance();

        $statement = self::$_pdo->prepare('SELECT * FROM video_club.movies WHERE movies.id=:movie_id  ');

        $statement->bindParam(':movie_id', $id);
        $statement->execute();
        return  $statement->fetch(PDO::FETCH_ASSOC);
            
    }
   
}


