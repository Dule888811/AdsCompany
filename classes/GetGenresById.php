<?php
require_once 'core/init.php';
class GetGenresById
{
private static $_pdo;
public static function init()
{
self::$_pdo = Connect::getInstance();
}

public static function GenreId( $id)
{

$statement = self::$_pdo->prepare('SELECT * FROM video_club.genres WHERE genres.id=:genres_id  ');

$statement->bindParam(':genres_id', $id);
$statement->execute();
return  $statement->fetch(PDO::FETCH_ASSOC);

}

}
GetGenresById::init();