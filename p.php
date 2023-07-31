<?php
require_once("fpdf/fpdf.php");
require_once("koneksi.php");
//membuat objek baru bernama pdf dari class FPDF
$pdf= new FPDF('P','mm','A4');

//membuat halaman baru
$pdf ->AddPage();
$pdf-> SetFont('Arial','B',16);

//judul
$pdf->Cell(190,7,'TOKO Erdiansyah_21081018',0,1,'C');
$pdf-> SetFont('Arial','B',12);
$pdf->Cell(190,7,'LAPORAN STOK BARANG',0,1,'C');
$pdf->Cell(190,7,'',0,1,'C');



//Judul Table
$pdf-> SetFont('Arial','B',10);
$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(30,6,'Kode Barang',1,0,'C');
$pdf->Cell(35,6,'Nama Barang',1,0,'C');

$pdf->Cell(25,6,'Harga',1,0,'C');
$pdf->Cell(25,6,'Stok',1,1,'C');

$pdf-> SetFont('Arial','',10);
$total=0;
$gt=0;
$no=1;
$tampil=mysqli_query($db,"Select * from barang");

while($hasil =mysqli_fetch_array($tampil)){
$pdf->Cell(8,6,$no++,1,0,'C');
$pdf->Cell(30,6,$hasil['kode_barang'],1,0,'C');
$pdf->Cell(35,6,$hasil['nama_barang'],1,0,'L');
$pdf->Cell(25,6,'Rp. '.number_format($hasil['harga'],0,",","."),1,0,'C');
$pdf->Cell(35,6,$hasil['stok'],1,0,'L');

$pdf->Cell(60,6,$data['harga'],1,0,'C');

}


$pdf->Output();



?>