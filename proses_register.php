<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "INSERT INTO register (username, password, email) VALUES ('$username','$password','$email')";
$result = mysqli_query($koneksi, $query);

if (!$result){
	die ("Tidak dapat diakses").mysqli_errno($koneksi).'-'.mysqli_error($koneksi);
}else{
	echo "<script>alert('Berhasil Terdaftar ! Silahkan Login Untuk Masuk Website');window.location='login_register.php';</script>";
}