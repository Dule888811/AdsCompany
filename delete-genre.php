<?php
require_once 'core/init.php';
$id = $_GET['id'];
DeleteGanreAndAllMoviesFromIt::removeGanre($id);
header("Location: {$_SERVER['HTTP_REFERER']}");?>
