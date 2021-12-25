<?php
require_once 'core/init.php';
AddMovie::add_new_movie($_POST["title"], $_POST["year"],  $_POST["genre_id"]);
header("Location: {$_SERVER['HTTP_REFERER']}");?>