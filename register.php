<?php
require_once 'core/init.php';
?>

<head>
    <title>Index</title>
    <link rel='stylesheet' type="text/css" href="css/stlye.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div class="register-form-center">
    <form action ="register-new-user.php" method="post" id="register-new-user" enctype="multipart/form-data">
    <div class="form-input ">
        <label for="username">username:
            <input type="text"  name="username" id="username"></label>
    </div>
    <div class="form-input">
        <label for="password">Password </label>
        <input type="password" id="password" name="password"
               minlength="4" required>
    </div>
    <div class="form-input">
        <label for="first_name">First name:
            <input type="text" class="align-content-center" name="first_name" id="first_name" required></label>
    </div>
    <div class="form-input">
        <label for="last_name">Last name:
            <input type="text" class="align-content-center" name="last_name" id="last_name" required></label>
    </div>

    <div class="form-input">
        <label for="image">image:
            <input type="file" name="image"></label>
    </div>
    <input type="submit" namw="btn"   value="Create"><br/>
        <p id="form-messege"></p>
    </form>
</div>
<script type="text/javascript">
    $("#register-new-user").submit(function(event){
        event.preventDefault();
        var username = $("#username").val();
        $.ajax({
            type: 'GET',
            url: 'usernames.php?username=' + username,
            dataType: "json",
            success: function(response) {
                if(response == true){
                    console.log(response);
                    $("#form-messege").text("username already exist");
                }else{
                    $("#register-new-user")[0].submit();
                }
            }
        });
    });
</script>
