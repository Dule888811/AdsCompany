<?php
require_once 'core/init.php';
$_pdo = Connect::getInstance();
if(isset($_FILES['image']) && $_FILES['image']['error']== UPLOAD_ERR_OK) {
      $target_dir ="images/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if($check !== false) {
          $uploadOk = 1;
      } else {
          echo "The selected file is not a photo.";
          $uploadOk = 0;
      }

      if ($_FILES["image"]["size"] > 500000) {
          echo "photo can be max 0.5 MB .";
          $uploadOk = 0;
      }

      if($imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
          && $imageFileType != "GIF" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
          echo "Only JPG, PNG, JPEG and GIF files are allowed to be uploaded.";
          $uploadOk = 0;
      }

      if ($uploadOk == 0) {
          echo "error uploaded file";
      } else {
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              echo "Photo successfully uploaded.";
          } else {
              echo "Photo not successfully entered.";
          }
      }
  }else{
      echo "<br/>Photo not entered!";

}

    RegisterUser::register_new_user($_POST["username"],$_POST["password"],$_POST["first_name"],$_POST["last_name"],$target_file);
echo "</br></br><a href='index.php'>Back to admin panel</a>";

?>