<?php 
 
include "../librari/inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$kdhapus = $_REQUEST['kdhapus'];

if ($kdhapus !="") {	
	$sql = "DELETE FROM penyakit WHERE kd_penyakit='$kdhapus'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());
	
	$sql2 = "DELETE FROM relasi WHERE kd_penyakit='$kdhapus'";
	mysql_query($sql2, $koneksi);
	
	echo "DATA PENYAKIT BERHASIL DIHAPUS";
	include "penyakit.php";
}
else {
	echo "DATA PENYAKIT BELUM DIPILIH";
}
?>
