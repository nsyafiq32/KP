<?php
  include "koneksi.php";
  session_start();
  if (isset($_SESSION['email'])){
    if(isset($_POST['login'])){
      $email = htmlspecialchars($_POST["email"]);
      $password = htmlspecialchars($_POST["password"]);
      $as = htmlspecialchars($_POST["as"]);

      header ("location:index.php");
    }
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
    <input type="submit" name="login" class="sign-in-button" value="login">
    <!-- <input type="submit" a href="signupForm.php" class="sign-up-button" value="sign up"> -->
    <a href="signupForm.php" class="btn-sign">Sign Up</a> 
  </form>
</body>

<script type="text/javascript">
  function validasi(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if(email != "" && password != ""){
      return true;
    }else{
      alert('Email dan Password harus diisi');
      return false;
    }
  }
</script>
</html>