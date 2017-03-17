<?php 
 
include "../librari/inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$kdhapus = $_REQUEST['kdhapus'];

if ($kdhapus !="") {	
	$sql = "DELETE FROM analisa_hasil WHERE id='$kdhapus'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());
	
	echo "DATA PESIEN BERHASIL DIHAPUS";
	include "lapkon.php";
}
else {
	echo "DATA PASIEN BELUM DIPILIH";
}
?>
