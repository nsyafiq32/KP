<?php
	
	session_start();
	include "koneksi.php";

	$username = $_POST['username'];
	// $password = md5($_POST['Password']);
	$password = $_POST['password'];

	$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password=md5('$password')");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		$data = mysqli_fetch_assoc($login);

		if($data['pilih']=="Developer"){
			$_SESSION['username']=$username;
			$_SESSION['pilih']="Develeoper";

			header("location:./developer/developer.php");
		}else if($data['pilih']=="Tester"){
			$_SESSION['username']=$username;
			$_SESSION['pilih']="Tester";

			header("location:tester.php");
		}else if($data['pilih']=="PM"){
			$_SESSION['username']=$username;
			$_SESSION['pilih']="PM";

			header("location:index.php");
		}else{
			header("location:loginForm.php?pesan=gagal");
		}
	}else{
		header("location:loginForm.php?pesan=gagal");
	}

	// if (isset($_POST['login'])) {
	// 	$e = $_POST['email'];
	// 	$p = $_POST['password'];
	// 	$data = mysqli_connect($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
	// 	$cek = mysqli_fetch_assoc($data);
	// 	$email = $cek['email'];
	// 	$password = $cek['password'];
	// 	$pilih = $cek['pilih'];
	// 	if ($e == $email && $p == $password) {
	// 		$_SESSION['pilih'] = $pilih;
	// 		header('location:signupForm.php');
	// 	}else{
	// 		echo "location:loginForm.php?pesan=gagal";
	// 	}
	// }
?>