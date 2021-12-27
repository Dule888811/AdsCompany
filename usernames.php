<?php
require_once 'core/init.php';
$usernames = array();
$users = GetAllUsers::GetUsers();
foreach($users as $user)
{
    $usernames[] = $user['username'];
}
if(in_array($_GET['username'],$usernames))
{
    echo "true";
}else {
    echo "false";
}