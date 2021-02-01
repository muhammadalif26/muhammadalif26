<html>
<head>

<title>Tambah  Data  Mahasiswa</title>
</head>
<body>
<tr>
<form  action="insert_mahasiswa.php"  method="POST">
<font  face="Tahoma"  color="green"  size="5"><b><br>Masukkan  Mahasiswa Baru</b><br></font>
<table align="left">
<tr>
<td><font  face="Tahoma"  color="black"  size="3">NPM</font></td>
<td>:</td>
<td><input  type="text"  name="NPM"  size="30"></td>
</tr>

<tr>
<td><font  face="Tahoma"  color="black"  size="3">Nama</font></td>
<td>:</td>
<td><input  type="text"  name="nama"  size="30"></td>
</tr>

<tr>
<td><font  face="Tahoma"  color="black"  size="3">Tempat  Lahir</font></td>
<td>:</td>
<td><input  type="text"  name="tempat_lahir"  size="30"></td>
</tr>

<tr>
<td><font  face="Tahoma"  color="black"  size="3">Tanggal	Lahir</font></td>
<td>:</td>
<td><input  type="date"  name="tanggal_lahir"  size="30"></td>
</tr>

<tr>
<td><font  face="Tahoma"  color="black"  size="3">Jenis  Kelamin</font></td>
<td>:</td>
<td><select  name="jenis_kelamin"  id="jenis_kelamin">
<option  value="Laki-laki">Laki-laki</option>
<option  value="Perempuan">Perempuan</option>
</select>
</td>
</tr>
<tr>
<td><font  face="Tahoma"  color="black"  size="3">Alamat</font></td>
<td>:</td>
<td><input  type="text"  name="alamat"  size="30"></td>
</tr>

<tr>
<td><font  face="Tahoma"  color="black"  size="3">Kode pos</font></td>
<td>:</td>
<td><input  type="text"  name="kode_pos"  size="30"></td>
</tr>

<tr>
<td></td><td></td>
<td><input  type="submit"  value="Tambah">
<font  face="Tahoma"  color="green"  size="3">
<a  href="form_dosen.php"  style="text-decoration:none">Kembali</font></a>
</td>
</tr>
</table>
</form>
</body>
</html>
