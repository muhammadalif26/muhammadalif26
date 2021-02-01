<?php
require  ('fpdf16/fpdf.php');

$pdf=new  FPDF('L','mm','A4');
$pdf->  SetLeftMargin(20);
$pdf-> Addpage ();
$pdf->  SetFont  ('Arial','B',16);
$pdf->  Cell  (0,10,'LAPORAN  DATA  MAHASISWA',0,10,'c');
$pdf->  Cell  (10,7,'',0,1,'C');
$pdf->  SetFont  ('Arial','B',12);
$pdf->  Cell  (10,8,'No.',1,0);
$pdf->  Cell  (25,8,'NIDN',1,0,'c');
$pdf->  Cell  (35,8,'Nama',1,0,'c');
$pdf->  Cell  (30,8,'Tempat  Lahir',1,0,'c');
$pdf->  Cell  (30,8,'Tanggal  Lahir',1,0,'c');
$pdf->  Cell  (30,8,'Jenis  Kelamin',1,0,'c');
$pdf->  Cell  (30,8,'Alamat',1,0,'c');
$pdf->  Cell  (30,8,'Kode Pos',1,1,'c');
$pdf->  SetFont  ('Arial','',12);

include  'db_connect.php';
$no  =  1;
$result=  mysqli_query  ($kon,  "  SELECT  *  FROM  mahasiswa"); while  ($data  =  mysqli_fetch_array($result))
{
$pdf->  Cell  (10,9,$no++  ,  1,0);
$pdf->  Cell  (25,9,$data['NPM']  ,  1,0);
$pdf->  Cell  (35,9,$data['nama']  ,  1,0);
$pdf->  Cell  (30,9,$data['tempat_lahir']  ,  1,0);
$pdf->  Cell  (30,9,$data['tanggal_lahir']  ,  1,0);
$pdf->  Cell  (30,9,$data['jenis_kelamin']  ,  1,0);
$pdf->  Cell  (30,9,$data['alamat']  ,  1,0);
$pdf->  Cell  (30,9,$data['kode_pos']  ,  1,1);
}
$pdf->Output();
?>
