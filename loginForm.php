<?php
  include "koneksi.php";
  session_start();
  if (isset($_SESSION['email'])){
    header ("location:index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <title>Login</title>
</head>
<body>
<form class="sign-in" action="login_process.php" method="POST">
    <img class="images" src="images/tugumuda.jpg" alt="images">
    <label for="email">Email</label>
    <input type="text" class="sign-in-input" id="email"><br>

    <label for="password">Password</label>
    <input type="password" class="sign-in-input" id="password"><br>

    <a href="reset-password">Forget Your Password</a><br><br>
    <input type="submit" value="login" class="sign-in-button">
    <input type="submit" value="Sign Up" class="sign-up-button" a href="signupForm.php">
  </form>
</body>
</html>