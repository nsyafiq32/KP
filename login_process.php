<?php
	include "koneksi.php";
	$email = $_POST['email'];
	$password = $_POST['password'];
	if (empty($username)){
		echo "<script>alert('Email belum diisi');document.getElementById(sign-in)</script>";
		echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
	}else if (empty($password)){
		echo "<script>alert('Password belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
	}else{
		session_start();
		$login = mysql_query("select * from users where email='$email' and password='$password'");
		if (mysql_num_rows($login) > 0){
			$_SESSION['email'] = $email;
			header("location:index.php");
		}else{
			echo "<script>alert('Email atau Password salah')</script>";
			echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
		}
	}	
?>