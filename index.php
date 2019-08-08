<?php
	include "koneksi.php";
	session_start();
	if (!isset($_SESSION['email'])){
		header ("location:loginForm.php");
	}
?>
Berhasil Login, <a href="logout.php">Logout</a>