<?php
require_once 'core/init.php';
$user = GetUserByUsernsme::GetUser($_GET['username']);
?>
<head>
    <title>Index</title>
    <link rel='stylesheet' type="text/css" href="css/stlye.css">

</head>
<div class="movies-add">

    <form action="update-user.php"  method="post">

        <div class="movies">

                <input type="hidden" id="userId" name="userId" value= <?php echo GetUserByUsernsme::GetUser($_SESSION['username'])['id'];  ?>




            <label for="name">username:
            <input type="text"  name="username" value="<?php echo $user['username']?>" id="title"></label>
        </div>
        <br><br>
        <div class="movies">
            <label for="name">password:
                <input type="text"  name="password" value="<?php echo $user['password']?>" id="title"></label>
        </div>
        <br><br>


        <div class="movies">
            <label for="name">First Name:
                <input type="text"  name="first_name" value="<?php echo $user['first_name']?>" id="title"></label>
        </div>
        <br><br>
        <div class="movies">
            <label for="name">Last Name:
                <input type="text"  name="last_name" value="<?php echo $user['last_name']?>" id="title"></label>
        </div>
        <br><br>

        <div class="movies">
            <img src="<?php echo $user["image"]?>";
        </div>
    </form>
        <br><br>
        <br><br>
        <form action ="update-photo.php" method="post" enctype="multipart/form-data">
            <input type="hidden" id="idUser" name="idUser" value= '<?php echo GetUserByUsernsme::GetUser($_SESSION['username'])['id'];  ?>'>
            <input type="hidden" id="userImg" name="userImg" value=' <?php echo $user["image"];  ?>' >
            <label for="image">Change photo:</label>
            <input type="file" id="image" name="image">
            <input type="submit" value="Enter new images">
        </form>
        <br><br>



