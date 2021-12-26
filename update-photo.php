<?php
require_once 'core/init.php';
UpdatePhotoUser::UpdatePhoto($_POST['idUser'],$_FILES["image"]);
