<?php

	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}elseif($_GET['pesan']=="berhasil"){
      echo "<div class='alert-done'>Password Diperbaharui</div>";
    }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/index.css">
  <title>Login</title>
</head>
<body>
<form class="sign-in" action="login_process.php" method="POST">
    <img class="images" src="images/tugumuda.jpg" alt="images">
    <label for="username">Username</label>
    <input type="text" class="sign-in-input" name="username"><br>

    <label for="password">Password</label>
    <input type="password" class="sign-in-input" name="password"><br>

    <a href="resetPassword.php">Forget Your Password</a><br><br>
    <input type="submit" name="login" class="sign-in-button" value="Login">
    <!-- <input type="submit" a href="signupForm.php" class="sign-up-button" value="sign up"> -->
    <a href="signupForm.php" class="btn-sign">Sign Up</a> 
  </form>
</body>
</html>