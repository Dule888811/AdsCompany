<div class ="login-user" style="
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

<h1>Login</h1>
	<div class="login">
	<form action="#" method="POST">
		<label>Username</label></br>
		<input type="text" name="username"></br>
		<label>Password</label></br>
		<input type="text" name="password" /></br>
		<input type="submit" value="Login" />
	</form>
	<a href="register.php">Register here</a>
	</div>
</div>
<?php
require 'core/init.php';
if(isset($_POST['username'], $_POST['password'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if(!empty($username) && !empty($password)){
        $pdo = Connect::getInstance();
        $stmtUserCheck = $pdo->prepare("SELECT * FROM video_club.users WHERE username=? AND password=?");
        $stmtUserCheck->bindValue(1,$username);
        $stmtUserCheck->bindValue(2,$password);
        $stmtUserCheck->execute();
        if($stmtUserCheck->rowCount() == 0){
            echo "Unknown user";
        }else {
            $user = $stmtUserCheck->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['username'] = $user[0]['username'];
            $_SESSION['image'] = $user[0]['image'];
            $_SESSION['first_name'] = $user[0]['first_name'];
            $_SESSION['last_name'] = $user[0]['last_name'];
            header("Location:index.php");
        }
    }else {
        echo "Enter all data";
    }
}