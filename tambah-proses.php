<?php

if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama_barang	= $_POST['nama_barang'];	//membuat variabel $nama_barang dan datanya dari inputan Nama Barang
	$kode_barang	= $_POST['kode_barang'];	//membuat variabel $kode_barang dan datanya dari  Kode Barang
	$harga	= $_POST['harga'];	//membuat variabel $harga dan datanya dari Harga Barang
	$stok	= $_POST['stok'];	//membuat variabel $stok dan datanya dari Harga Barang
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($db,"INSERT INTO barang VALUES('','$nama_barang','$kode_barang','$harga','$stok','')") or die(mysqli_error());
	
	//jika query input sukses
	if($input){
		
		echo '<script>window.alert("Data berhasil d tambahkan")

				window.location="index.php"</script>';		//Pesan jika proses tambah sukses
		
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.location="index.php"</script>';

}
?>