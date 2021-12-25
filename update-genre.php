<?php
require_once 'core/init.php';
UpdateGanre::EditGanre($_POST['genreId'],$_POST['name']);
var_dump($_POST['genreId'],$_POST['name']);
header("Location: {$_SERVER['HTTP_REFERER']}");
