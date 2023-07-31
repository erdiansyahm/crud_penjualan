<?php
//memulai proses hapus data

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['id_beli'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$id = $_GET['id_beli'];
	
	//cek ke database apakah ada data barang dengan id='$id'
	$cek = mysqli_query($db,"FROM barang,pembelian where barang.kode_barang=pembelian.kode_barang order by id_beli DESC'") or die(mysqli_error());
	
	//jika data barang tidak ada
	if(mysqli_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table barang dengan kondisi WHERE id='$id'
		$del = mysqli_query($db,"DELETE FROM FROM barang,pembelian where barang.kode_barang=pembelian.kode_barang order by id_beli DESC'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo '<script>window.alert("Data berhasil dihapus")

				window.location="pembelian.php"</script>';		//Pesan jika proses delete sukses
			
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>