<?php
if(isset($_POST['simpan'])){
	
	include('koneksi.php');
	
	$kode_barang	=$_POST['kode_barang'];
	$jumlah			=$_POST['jumlah'];
	$tgl_beli		=$_POST['tgl_beli'];
	//cek stok
	$cek=mysqli_query($db,"Select * From barang where kode_barang='$kode_barang'");
	$hsl_cek=mysqli_fetch_array($cek);
	$stokbaru=$hsl_cek['stok']+$jumlah;

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($db,"INSERT INTO pembelian(kode_barang,jumlah,tgl_beli) VALUES ('$kode_barang','$jumlah','$tgl_beli')") or die(mysqli_error($db));
	//update stok
	$update = mysqli_query($db,"Update barang set stok =$stokbaru where kode_barang = '$kode_barang' ") or die(mysqli_error($db));
	
	if($input){
		echo '<script>window.alert("Data Berhasil Ditambahkan")
			
				window.location="pembelian.php"</script>';

	} else {
		
		echo 'Gagal menambahkan data!';
		echo '<a href="pembelian.php">Kembali</a>';
	}

}else{
	echo '<script>window.location="barang.php"</script>';
}

?>