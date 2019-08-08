<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo"<div class='alert'>Email atau Password Tidak Sesuai </div>";
		}
	}
?>