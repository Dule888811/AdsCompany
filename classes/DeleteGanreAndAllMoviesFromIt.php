<?php

require_once 'core/init.php';
class DeleteGanreAndAllMoviesFromIt
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }


    public static function removeGanre($id)
        {

            $deleteMoviesQuery = self::$_pdo->prepare("DELETE FROM video_club.movies WHERE video_club.movies.genre_id = :genre_id");
            $deleteMoviesQuery->bindParam(':genre_id', $id);
            $deleteMoviesQuery->execute();

            $deleteGenreQuery = self::$_pdo->prepare("DELETE FROM video_club.genres WHERE video_club.genres.id = :id");
            $deleteGenreQuery->bindParam(':id', $id);
            $deleteGenreQuery->execute();

        }

}
DeleteGanreAndAllMoviesFromIt::init();