<?php
require_once 'core/init.php';
?>

<head>
    <title>Index</title>
    <link rel='stylesheet' type="text/css" href="css/stlye.css">
</head>
<div class="register-form-center">
    <form action ="register-new-user.php" method="post" enctype="multipart/form-data">
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
            <input type="text" class="align-content-center" name="first_name" id="first_name"></label>
    </div>
    <div class="form-input">
        <label for="last_name">Last name:
            <input type="text" class="align-content-center" name="last_name" id="last_name"></label>
    </div>

    <div class="form-input">
        <label for="image">image:
            <input type="file" name="image"></label>
    </div>
    <input type="submit"    value="Create"><br/>
    </form>
</div>
<?php

?>

