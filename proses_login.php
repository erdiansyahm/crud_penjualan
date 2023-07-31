<?php
include 'koneksi.php';
$username = $_POST ['username'];
$password = $_POST ['password'];

$query=mysqli_query($db,"Select * from user where username = '$username' and password = '$password'");
$cek=mysqli_num_rows($query);

if($cek > 0){
	echo"<script>window.alert('Berhasil Login')
	window.location='beranda.php'</script>";
	
}else{
	echo"<script>window.alert('Login Gagal')
	window.location='index.php'</script>";
}

?>