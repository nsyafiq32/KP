<?php
	$koneksi = mysqli_connect("localhost","root","","login");

	if(mysqli_connect_errno()){
		echo "Koneksi Error : " . mysqli_connect_error();
	}
?>