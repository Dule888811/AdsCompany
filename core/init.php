<?php
if(!isset($_SESSION)){
    session_start();
}
$GLOBALS['config'] = array(
    'DB' => array(
        'host' => '127.0.0.1' ,
        'user' => 'root' ,
        'password' => '' ,
        'db_name' => 'video_club'
    ),
    'status' => true,
    'app_dir' => 'C:/xampp/htdocs/TestForCompsny/' ,
    'session' => array()
);
spl_autoload_register(function($className){
    require_once "classes/{$className}.php";
});
ob_start();

$pdo = Connect::getInstance();
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );