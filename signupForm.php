<?php
  function tambah($data){
  //ambil dari variable globak
    global $conn;
  //ambil data dari tombol submit form
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $as = htmlspecialchars($_POST["as"]);

    $query = "INSERT INTO user VALUES('','$email',.md5['$password'],'$as')";
    mysqli_query($conn,"$query");

    return mysqli_affected_rows($conn);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <title>Sign Up</title>
</head>
<body>
<form class="sign-in" action="signupForm.php" method="POST">
    <img class="images" src="images/tugumuda.jpg" alt="images">
    <h1 class="sign-up-title">Sign Up</h1>
    <label for="email">Email</label>
    <input type="text" name="email" class="sign-up-input" id="email"><br>

    <label for="password">Password</label>
    <input type="password" name="password" class="sign-up-input" id="password"><br>

    <label for="as">Sign Up As</label>
    <select name="pilih" id="" class="sign-up-input">
      <option value=""></option>
      <option value="Developer">Developer</option>
      <option value="Tester">Tester</option>
      <option value="PM">PM</option>
    </select><br>

    <input type="submit" value="Sign Up" class="sign-up-button">
  </form>
</body>
</html>