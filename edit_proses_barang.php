<?php
if(isset($_POST['edit'])){
	include('koneksi.php');
	
	
	$nama_barang	=$_POST['nama_barang'];
	$kode_barang	=$_POST['kode_barang'];
	$harga			=$_POST['harga'];
	$stok			=$_POST['stok'];
	
	
	$input = mysqli_query($db,"UPDATE barang SET nama_barang='$nama_barang', kode_barang='$kode_barang',harga='$harga',stok='$stok' WHERE id='$_POST[id]'") or die(mysqli_error($db));
	
	if($input){
		echo '<script>window.alert("Data Berhasil Diedit")
			
				window.location="barang.php"</script>';

	}else{
		
		echo 'Gagal edit data barang !';
		echo '<a href="barang.php">Kembali</a>';
	}
}
?>