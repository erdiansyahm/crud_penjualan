<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	
$username = $_POST ['username'];
$password = $_POST ['password'];
	
	

	
	$input = mysqli_query($db,"INSERT INTO user(username,password) VALUES ('$username','$password')") or die(mysqli_error($db));
	
	if($input){
		echo '<script>window.alert("Data Berhasil Ditambahkan")
			
				window.location="user.php"</script>';

	} else {
		
		echo 'Gagal menambahkan data!';
		echo '<a href="user.php">Kembali</a>';
	}

}else{
	echo '<script>window.location="user.php"</script>';
}

?>