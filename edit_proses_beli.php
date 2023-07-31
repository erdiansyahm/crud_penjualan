<?php
if(isset($_POST['edit'])){
	include('koneksi.php');
	
	
	
	$stok			=$_POST['jumlah'];
	
	
	$input = mysqli_query($db,"UPDATE pembelian SET kode_barang='$kode_barang', harga='$jumlah',jumlah='$jumlah' WHERE id='$_POST[id_beli]'") or die(mysqli_error($db));
	
	if($input){
		echo '<script>window.alert("Data Berhasil Diedit")
			
				window.location="pembelian.php"</script>';

	}else{
		
		echo 'Gagal edit data barang !';
		echo '<a href="pembelian.php">Kembali</a>';
	}
}
?>