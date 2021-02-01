<?php
include  "db_connect.php";
$NPM  =  $_POST['NPM'];
$nama  =  $_POST['nama'];
$tempat_lahir  =  $_POST['tempat_lahir'];
$tanggal_lahir  =  $_POST['tanggal_lahir'];
$jenis_kelamin  =  $_POST['jenis_kelamin'];
$alamat  =  $_POST['alamat'];
$kode_pos  =  $_POST['kode_pos'];

$query=mysqli_query($kon,  "INSERT  INTO  Mahasiswa  (NPM,  nama,  tempat_lahir,  tanggal_lahir,  jenis_kelamin,  alamat,  kode_pos)
VALUES  ('$NPM','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin',' $alamat','$kode_pos')");

if($query)  {
?>
<script  language="JavaScript"> document.location='form_mahasiswa.php'</script>
<?php
}
?>
