<?php 
include "../librari/inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtKodeH 	= $_REQUEST['TxtKodeH'];
$TxtGejala 	= $_REQUEST['TxtGejala'];

#validasi form na
if (trim($TxtKodeH)=="") {
	echo "Kode Belum Terbentuk, Silahkan Ulangi Lagi";
	include "gejala_edit.php";
	}
elseif (trim($TxtGejala)=="") {
	echo "Gejala Masih Kosong, Silahkan Ulangi Kembali";
	include "gejala_edit.php";
}
else {
	$sql = "UPDATE gejala SET nm_gejala='$TxtGejala' ";
	$sql .= " WHERE kd_gejala='$TxtKodeH'";
	mysql_query($sql, $koneksi)
		or die ("SQL Error".mysql_error());
		
	echo "DATA TELAH BERHASIL DIUBAH";
	include "gejala.php";
	}
?>
