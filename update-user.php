<?php

require_once 'core/init.php';
UpdateUser::ChangeUsersInfo($_POST['userId'],$_POST['username'], $_POST['password'], $_POST['first_name'], $_POST['last_name']);
header('Location: index.php');