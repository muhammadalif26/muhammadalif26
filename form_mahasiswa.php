<?php
include "db_connect.php";
$query=mysqli_query ($kon, "SELECT * FROM mahasiswa")or die (mysqli_error());
$jumlah = mysqli_num_rows($query);
echo "<html>";
echo "<head>";
echo "</head>";
echo "<title> MAHASISWA </title>";
echo "<body>";
echo "<font color='red' face='Arial' size=5><b><br>Data Mahasiswa</b></font><br><b
r>";
echo "<a href='add_mahasiswa.php' style=\"textdecoration: none\"><font face='tahoma' size='3'>Masukkan Data Mahasiswa Baru</font
></a><br>";
echo "<br><table border=\"0\" cellpadding=\"3\" cellspacing=\"3\" bordercolor=
\"blue\" bgcolor=\"white\">
<tr bgcolor='blue' height=\"50\"><font color='white'>
<th align='center'><font color='white' face='Arial' size=3>No</font></th>
<th align='center'><font color='white' face='Arial' size=3>NPM</font></th>
<th align='center'><font color='white' face='Arial' size=3>Nama</font></th>
<th align='center'><font color='white' face='Arial' size=3>Tempat Lahir</font>
</th>
<th align='center'><font color='white' face='Arial' size=3>Tanggal Lahir</font
></th>
<th align='center'><font color='white' face='Arial' size=3>Jenis Kelamin</font
></th>
<th align='center'><font color='white' face='Arial' size=3>Alamat</font></th>
<th align='center'><font color='white' face='Arial' size=3>Kode Pos</font></th>
</tr>";
$j=0;
while ($row=mysqli_fetch_array($query)) {
echo "<tr><td align='center' bgcolor='#657FFF'>";
echo "<font face='Arial' size=2>";
echo $j+1;
echo "</font>";
echo "</td>";
echo "<td align='left=' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["NPM"];
echo"</font>";
echo"</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["nama"];
echo "</font>";
echo "</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["tempat_lahir"];
echo "<td align='left=' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["tanggal_lahir"];
echo"</font>";
echo"</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["jenis_kelamin"];
echo "</font>";
echo "</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["alamat"];
echo"</font>";
echo"</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["kode_pos"];
echo "</font>";
echo "</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo "<a href='delete_mahasiswa.php?NPM=".$row['NPM']."' style=\"textdecoration: none\" title=\"Hapus\"><font face='tahoma' size='2'>Hapus</font></a>
<a href='edit_mahasiswa.php?NPM=".$row['NPM']."' style=\"textdecoration: none\" title=\"Edit\"><font face='tahoma' size='2'>Edit</font></a>
"; $j++; }
echo "</table><br>";
echo "<a href='print_mahasiswa.php' style=\"textdecoration: none\"><font face='tahoma' size='3'>Cetak Data Mahasiswa</font></a><br>";
echo " <font face='Tahoma' color='green' size='3'><a href='index.php' style='text-decoration:none'> Kembali</font></a>";
echo "</body>";
echo "</html>";
?>