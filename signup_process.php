<?php
    include "koneksi.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $as = $_POST['as'];

    if (empty($email)){
        echo "<script>alert('Email belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
    }else if (empty($password)){
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
    }else if(empty($as)){
        echo "<script>alert('Sebagai belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
    }else{
        $daftar = mysqli_query("INSERT INTO data_user ('email','password','as') values ('$email',$password','$as')");
        if ($daftar){
            echo "<script>alert('Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
        }else{
            echo "<script>alert('Gagal')</script>";
            echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
        }
    }
?>