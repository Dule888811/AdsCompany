<?php
require_once 'core/init.php';
UpdatePhotoUser::UpdatePhoto($_POST['idUser'],$_FILES["image"], $_POST['userImg']);
header ('Location: index.php');

?>