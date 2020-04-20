<?php 
session_start();

include 'koneksi.php';

$nama=$_POST['nama'];
$admin=$_POST['admin'];

$data = mysqli_query($koneksi,"SELECT * from owner where username='$nama' and password='$admin'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $admin;
	$_SESSION['status'] = "login";
	echo "<script>alert('Berhasil Login !')</script>";
}