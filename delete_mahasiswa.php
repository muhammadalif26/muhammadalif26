<?php
include "db_connect.php";
$NPM = $_GET['NPM'];
$query = "DELETE FROM mahasiswa WHERE NPM = '$NPM' ";
mysqli_query($kon, $query);
?>
<script language="JavaScript">
document.location='form_mahasiswa.php'</script>
<?php
?>