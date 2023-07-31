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
$pdf->Cell(190,7,'LAPORAN PENJUALAN BARANG',0,1,'C');
$pdf->Cell(190,7,'',0,1,'C');
$pdf->Cell(190,7,'Periode : '.$_POST['dari'].' s/d '.$_POST['sampai'],0,1,'L');


//Judul Table
$pdf-> SetFont('Arial','B',10);
$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(40,6,'Kode Barang',1,0,'C');
$pdf->Cell(40,6,'Nama Barang',1,0,'C');
$pdf->Cell(36,6,'Jumlah',1,0,'C');
$pdf->Cell(40,6,'Harga',1,0,'C');
$pdf->Cell(27,6,'Total',1,1,'C');

$pdf-> SetFont('Arial','',10);
$total=0;
$gt=0;
$no=1;
$tampil=mysqli_query($db,"Select * from barang,penjualan Where barang.kode_barang = 
penjualan.kode_barang and tgl_jual between '$_POST[dari]' and '$_POST[sampai]'");
while($hasil =mysqli_fetch_array($tampil)){
$pdf->Cell(8,6,$no++,1,0,'C');
$pdf->Cell(40,6,$hasil['kode_barang'],1,0,'C');
$pdf->Cell(40,6,$hasil['nama_barang'],1,0,'L');
$pdf->Cell(36,6,$hasil['jumlah'],1,0,'C');
$pdf->Cell(40,6,'Rp. '.number_format($hasil['harga'],2,",","."),1,0,'C');
$total=$hasil['jumlah']*$hasil['harga'];
$pdf->Cell(27,6,'Rp. '.number_format($total,2,",","."),1,1,'C');
$gt += $total;

}
$pdf->SetFont('Arial','B',10);
$pdf->Cell(164,7,'Grand Total','LBR',0,'C','0');
$pdf->Cell(27,7,'Rp. '.number_format($gt,2,",","."),1,1,'C');

$pdf->Output();



?>