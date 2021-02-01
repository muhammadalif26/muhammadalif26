<?php
include "db_connect.php";
$NPM=$_GET['NPM'];
$query=mysqli_query($kon, "SELECT * FROM mahasiswa WHERE NPM='$NPM' ");
while ($row=mysqli_fetch_array($query)){
$NPM = $row['NPM'];
$nama= $row['nama'];
$tempat_lahir = $row['tempat_lahir'];
$tanggal_lahir = $row['tanggal_lahir'];
$jenis_kelamin= $row['jenis_kelamin'];
$alamat = $row['alamat'];
$kode_pos = $row['kode_pos'];
echo "<html>";
echo "<body>";
echo "<font face='tahoma' color='green' size=5><b>Ubah Data Mahasiswa</b><br></font>";
echo "<table align='left'>";
echo "<form method=\"post\" action=\"update_mahasiswa.php?NPM=$NPM\" enctype='multipart/form-data'>";
echo "<br>";
echo "<tr><td><font face='Tahoma' color='black' size=3>NPM</font></td><td>:</td><td><input type='text' name='NPM' readonly value='$NPM' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=3>Nama</font></td><td>:</
td><td><input type='text' name='nama' value='$nama' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=3>Tempat Lahir</font></td><td>:</td><td><input type='text' name='tempat_lahir' value='$tempat_lahir' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=3>Tempat Lahir</font></td><td>:</td><td><input type='date' name='tanggal_lahir' value='$tanggal_lahir' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=3>Jenis Kelamin</font></td><td>:</td><td><input type='text' name='jenis_kelamin' value='$jenis_kelamin'
size='30'>&nbsp;</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=3>Alamat</font></td><td>:</td><td><input type='text' name='alamat' value='$alamat' size='60'>&nbsp;</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=3>No HP</font></td><td>:</td><td><input type='text' name='kode_pos' value='$kode_pos' size='30'>&nbsp;</td></tr>";
echo "<tr><td></td><td></td><td><font size='3'><input type='submit' name='submit' value='Update'/><a href='form_mahasiswa.php' style='text-decoration:none'> Kembali</a></font></td></tr>";
echo "</table></form></body></html>"; }
?>