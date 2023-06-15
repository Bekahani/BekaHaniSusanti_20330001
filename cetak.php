<?php
// memanggil library FPDF
require('fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'REKAPITULASI PENGELOLAAN KAS OP2N',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(25,7,'TANGGAL' ,1,0,'C');
$pdf->Cell(55,7,'KETERANGAN',1,0,'C');
$pdf->Cell(35,7,'MASUK',1,0,'C');
$pdf->Cell(30,7,'JENIS',1,0,'C');
$pdf->Cell(35,7,'KELUAR',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM kas");
$jumlah_pemasukan = 0 ;
$jumlah_pengeluaran = 0 ;
$saldo_akhir = 0 ;
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(25,6, $d['tgl'],1,0);
  $pdf->Cell(55,6, $d['keterangan'],1,0);  
  $pdf->Cell(35,6, $d['jumlah'],1,0, 'R');
  $pdf->Cell(30,6, $d['jenis'],1,0, 'C');
  $pdf->Cell(35,6, $d['keluar'],1,1, 'R');
  $jumlah_pemasukan += $d['jumlah'];
  $jumlah_pengeluaran += $d['keluar'];
  $saldo_akhir += $d['jumlah']+$d['keluar'];

}

$pdf->Cell(0,0,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(90,6,'TOTAL KAS MASUK :',1,0,);
$pdf->Cell(0,0,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(125,6, $jumlah_pemasukan ,1,0,'R');
$pdf->Cell(0,0,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(155,6,'',1,0,);
$pdf->Cell(0,6,'',1,0,);

$pdf->Cell(0,6,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(155,6,'TOTAL KAS KELUAR :',1,0,);
$pdf->Cell(0,6, $jumlah_pengeluaran ,1,1, 'R');

$pdf->Cell(0,0,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(125,6,'SALDO AKHIR :',1,0,);
$pdf->Cell(0,0,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(155,6, $saldo_akhir ,1,0, 'R');
$pdf->Cell(0,0,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(190,6,'',1,0,);
 
$pdf->Output();

