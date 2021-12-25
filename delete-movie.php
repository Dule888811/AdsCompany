<?php
require_once 'core/init.php';
DeleteMovie::removeMovie($_GET['id']);
header("Location: {$_SERVER['HTTP_REFERER']}");?>