<?php
	include "librari/inc.koneksidb.php";


    $NOIP = $_SERVER['REMOTE_ADDR'];

    $sqlhapus = "DELETE FROM tmp_penyakit WHERE noip='$NOIP'";
	mysql_query($sqlhapus, $koneksi) 
			or die ("SQL Error 1".mysql_error());
	
	$sqlhapus2 = "DELETE FROM tmp_analisa WHERE noip='$NOIP'";
	mysql_query($sqlhapus2, $koneksi) 
			or die ("SQL Error 2".mysql_error());

	$sqlhapus3 = "DELETE FROM tmp_gejala WHERE noip='$NOIP'";
	mysql_query($sqlhapus3, $koneksi) 
			or die ("SQL Error 3".mysql_error());

echo "<meta http-equiv='refresh' content='0; url=index.php?page=konsul'>";

?>