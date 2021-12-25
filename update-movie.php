<?php
require_once 'core/init.php';
UpdateMovie::EditMovie($_POST['movieId'],$_POST['title'],$_POST['year'],$_POST['genre_id']);
header ('Location: index.php');
