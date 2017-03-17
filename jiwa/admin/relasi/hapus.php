<?php 
include "../librari/inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$kd_p = $_REQUEST['kd_p'];

if ($kd_p !="") {	
	$sql = "DELETE FROM relasi WHERE kd_penyakit='$kd_p'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());
		
	echo "DATA GEJALA BERHASIL DIHAPUS";
	include "relasi_2.php";
}
else {
	echo "DATA Relasi PEBLUM DIPILIH";
	include "relasi_2.php";
}
?>
