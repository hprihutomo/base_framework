<?php  
include "../librari/inc.koneksidb.php";

#Baca Variabel Form
$TxtKodeH  = $_POST['TxtKodeH'];
$CekGejala = $_POST['CekGejala'];

#Validasi Form
if (trim($TxtKodeH)=="") {
	echo "Nama Penyakit belum dipilih, ulangi kembali";
	include "relasi.php";
	}
else {
	$jum = count($CekGejala);
	if ($jum==0) {
	echo "BELUM ADA GEJALA YANG DIPILIH";
	}
	else {
	#Untuk menghapus yang tidak dipilih lagi
		//kode mendata relasi
	$sqlpil = "SELECT * FROM relasi
		WHERE kd_penyakit='$TxtKodeH'";
		$qrypil = mysql_query($sqlpil);
		while ($datapil=mysql_fetch_array($qrypil)){
	//kode untuk mengurangi gejala yang dipilih
		for ($i = 0; $i < $jum; ++$i) {
	//perintah untuk menghapus relasi
		if ($datapil['kd_gejala'] != $CekGejala[$i]) {
			$sqldel = "DELETE FROM relasi ";
			$sqldel .= "WHERE kd_penyakit='$TxtKodeH' ";
			$sqldel .= "AND NOT kd_gejala IN ('CekGejala[$i]')";
			mysql_query($sqldel);
			}
			}
		}
		#Untuk Gejala Tambahan
	for ($i = 0; $i < $jum; ++$i) {
		// perintah untuk mendapatkan relasi
		$sqlr = "SELECT * FROM relasi ";
		$sqlr .= "WHERE kd_penyakit='TxtKodeH'";
		$sqlr .= "AND kd_gejala='$CekGejala[$i]'";
		$qryr = mysql_query($sqlr, $koneksi);
		$cocok = mysql_num_rows ($qryr) ;
			// Gejala baru yang akan disimpan
		if (! $cocok==1) {
		$sql = "INSERT INTO relasi (kd_penyakit,kd_gejala) ";
		mysql_query($sql, $koneksi)
			or die ("SQL Input Relasi Gagal" .mysql_error() );
			}
		}
		//pesan sebagai konfirmasi
	echo "SUKSES DISIMPAN";
	include "relasi.php";
	}
	}
	?>
