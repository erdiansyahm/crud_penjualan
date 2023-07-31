<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	
	$nama_barang	=$_POST['nama_barang'];
	$kode_barang	=$_POST['kode_barang'];
	$harga			=$_POST['harga'];
	$stok			=$_POST['stok'];
	

	
	$input = mysqli_query($db,"INSERT INTO barang(nama_barang,kode_barang,harga,stok) VALUES ('$nama_barang','$kode_barang','$harga','$stok')") or die(mysqli_error($db));
	
	if($input){
		echo '<script>window.alert("Data Berhasil Ditambahkan")
			
				window.location="barang.php"</script>';

	} else {
		
		echo 'Gagal menambahkan data!';
		echo '<a href="barang.php">Kembali</a>';
	}

}else{
	echo '<script>window.location="barang.php"</script>';
}

?>