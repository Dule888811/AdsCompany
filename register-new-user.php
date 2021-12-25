<?php
require_once 'core/init.php';

if(isset($_FILES['image']) && $_FILES['image']['error']== UPLOAD_ERR_OK) {
    $target_dir = "image";
    $target_file = $target_dir . "/" . basename($_FILES["image"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . "." . $imageFileType);
}else{
    $target_file = NULL;
}
RegisterUser::register_new_user($_POST["username"],$_POST["password"],$target_file,$_POST["first_name"],$_POST["last_name"]);
?>