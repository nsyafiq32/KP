<?php
	session_start();

	include "koneksi.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$login = mysqli_query($koneksi, "select * from user where email='$email' and password='$password'");

	$cek = mysqli_num_rows($login);

	if($cek > 0){
		$data = mysqli_fetch_assoc($login);

		if($data['as']=="Developer"){
			$_SESSION['email']=$email;
			$_SESSION['as']="Develeoper";

			header("location:");
		}else if($data['as']=="Tester"){
			$_SESSION['email']=$email;
			$_SESSION['as']="Tester";

			header("location:");
		}else if($data['as']=="PM"){
			$_SESSION['email']=$email;
			$_SESSION['as']="PM";

			header("location:");
		}else{
			header("location:index.php?pesan=gagal");
		}
	}else{
		header("location:index.php?pesan=gagal");
	}

	// if (empty($email)){
	// 	echo "<script>alert('Email belum diisi')</script>";
	// 	echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
	// }else if (empty($password)){
	// 	echo "<script>alert('Password belum diisi')</script>";
	// 	echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
	// }else{
	// 	session_start();
	// 	$login = mysqli_query("select * from user where email='$email' and password='$password'");
	// 	if (mysqli_num_rows($login) > 0){
	// 		$_SESSION['email'] = $email;
	// 		header("location:index.php");
	// 	}else{
	// 		echo "<script>alert('Email atau Password salah')</script>";
	// 		echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
	// 	}
	// }
?>