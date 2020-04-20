<?php

	session_start();

		include'koneksi.php';

	define("INDEX", true);

  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi,"select * from register where username='$username' and password='$password'");

  $cek = mysqli_num_rows($login);

  if ($cek > 0){
      $data=mysqli_fetch_assoc($login);

        if($data["level"]== "admin"){
          $_SESSION['username'] = $username;
          $_SESSION['level'] = "admin";
          header("location:regis.php");

        }elseif ($data["level"]== "user"){
          $_SESSION['username'] = $username;
          $_SESSION['level'] = "user";
          echo "<script>alert('Selamat, Anda Berhasil Masuk!');window.location='mak.html';</script>";
          .
        }else{
          echo "Login Error!";
        }
  }else{
    echo "<script>alert('Usename atau Password Anda Salah! Mohon Coba Lagi');window.location='Login.php';</script>";
  }


  //   echo "<script>alert('Selamat, Anda Berhasil Masuk!');window.location='HomeUser.php';</script>";
  // }else{
  //   echo "<script>alert('Usename atau Password Anda Salah! Mohon Coba Lagi');window.location='Login.php';</script>";
  // }

?>