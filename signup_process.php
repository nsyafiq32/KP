<?php
    include "koneksi.php";
    
    if(isset($_POST['sign_up'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $pilih = $_POST['pilih'];

        if(isset($_POST['sign_up'])){
            $password = $_POST['password'];
            if (strlen($password) <= 12){
              echo "<script>alert('Password harus antara 6-12 huruf')</script>";
              echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
            }else if (empty($email)){
                    echo "<script>alert('Email belum diisi')</script>";
                    echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
            }else if (empty($password)){
                    echo "<script>alert('Password belum diisi')</script>";
                    echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
            }else if(empty($pilih)){
                    echo "<script>alert('Sebagai belum diisi')</script>";
                    echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";    
            }else{
            echo "<meta http-equiv='refresh' content='1 url=signup_process.php'>";
            }
    
          }
        
    
        $query = mysqli_query($koneksi, "INSERT INTO user VALUES('$email','$password','$pilih')");
    }
    // $id = $_POST['id'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $pilih = $_POST['pilih'];

    // $sql = "INSERT INTO user VALUES ('$email', '$password', '$pilih')";
   

    //mysqli_close($koneksi);
?>