<?php
include  "db_connect.php";
$NPM=  $_GET['NPM'];

$NPM  =  $_POST['NPM'];
$nama  =  $_POST['nama'];
$tempat_lahir  =  $_POST['tempat_lahir'];
$tanggal_lahir  =  $_POST['tanggal_lahir'];
$jenis_kelamin  =  $_POST['jenis_kelamin'];
$alamat  =  $_POST['alamat'];
$kode_pos  =  $_POST['kode_pos'];

$query=mysqli_query  ($kon,  "UPDATE  mahasiswa  SET  NPM='$NPM',
nama='$nama',  tempat_lahir='$tempat_lahir',  tanggal_lahir='$tanggal_lahir',  jenis_kelamin='$jenis_kelamin',  alamat='$alamat',  kode_pos='$kode_pos'  WHERE  NPM='$NPM'")or  die  (mysqli_error());

if($query)  {
?>
<script  language="JavaScript"> document.location='form_mahasiswa.php'</script>
<?php
}
?>
