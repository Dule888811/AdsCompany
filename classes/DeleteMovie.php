<?php

require_once 'core/init.php';
class DeleteMovie
{
    private static $_pdo;
    public static function init()
    {
        self::$_pdo = Connect::getInstance();
    }
    public static function removeMovie($id)
    {
       // $q = self::$_pdo->query("DELETE * FROM video_club.movies  WHERE movies.id = $id");
        $sql = "DELETE FROM video_club.movies WHERE id=?";
        $stmt= self::$_pdo->prepare($sql);
        $stmt->execute([$id]);
    }

}
DeleteMovie::init();