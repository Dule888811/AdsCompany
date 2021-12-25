<?php
require_once 'core/init.php';
AddNewGenres::AddGannre($_POST["name"]);
header("Location: {$_SERVER['HTTP_REFERER']}");?>
