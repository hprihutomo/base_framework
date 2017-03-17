<?php
	include "../librari/inc.koneksidb.php";

	#Baca variabel Form (If Register Global ON)
	$TxtKodeH  = $_REQUEST['TxtKodeH'];
	$TxtGejala = $_REQUEST['TxtGejala'];

	# Validasi Form
	if (trim($TxtKodeH)==""){
		echo "Kode Belum Terbentuk, Ulangi Kembali";
		include "gejala_tambah.php";
	}
	elseif (trim($TxtGejala)=="") {
		echo "Gejala masih kosong, ulangi kembali";
		include "gejala_tambah.php";
	}
	else {
		$sql =" INSERT INTO gejala (kd_gejala,nm_gejala)";
		$sql .=" VALUES ('$TxtKodeH','$TxtGejala')";
		mysql_query($sql, $koneksi) 
		or die ("SQL Error".mysql_error());
		echo "Data Berhasil disimpan";
		include "gejala.php";
	}
?>