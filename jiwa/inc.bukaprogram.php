<?php
error_reporting(~E_NOTICE);

$page= @$_REQUEST['page'];
if ($page=="") {
	if(file_exists ("data/home/home.php")) {
		include "data/home/home.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}

// ... Link Menu Penyakit ... //

elseif ($page=="dafsakit") {
	if(file_exists ("data/penyakit/PenyakitTampil.php")) {
		include "data/penyakit/PenyakitTampil.php";
	}
	else {
		echo "FILE HALAMAN PENYAKIT TIDAK ADA";
	}
}

// ... End Link Menu Penyakit ... //

// ... Link Menu Konsultasi ...//

elseif ($page=="daftar") {
	if(file_exists ("data/konsul/PasienAddFm.php")) {
		include "data/konsul/PasienAddFm.php";
	}
	else {
		echo "FILE PROGRAM DAFTAR PASIEN TIDAK ADA";
	}
}

elseif ($page=="daftarsim") {
	if (file_exists ("data/konsul/PasienAddSim.php")) {
		include "data/konsul/PasienAddSim.php";
	}
	else {
		echo "FILE PROGRAM SIMPAN DAFTAR PASIEN TIDAK ADA";
	}
}

elseif ($page=="konsul") {
	if(file_exists ("data/konsul/KonsultasiFm.php")) {
		include "data/konsul/KonsultasiFm.php";
	}
	else {
		echo "FILE PROGRAM KONSULTASI TIDAK ADA";
	}
}

elseif($page=="konsulcek") {
	if(file_exists ("data/konsul/KonsultasiPeriksa.php")) {
		include "data/konsul/KonsultasiPeriksa.php";
	}
	else {
		echo"FILE PROGRAM CEK KONSULTASI TIDAK ADA";
	}
}

elseif ($page=="hasil") {
	if(file_exists ("data/konsul/AnalisaHasil.php")) {
		include "data/konsul/AnalisaHasil.php";
	}
	else {
		echo "FILE PROGRAM ANALISA HASIL TIDAK ADA";
	}
}

elseif ($page=="back") {
	if(file_exists ("data/konsul/back.php")) {
		include "data/konsul/back.php";
	}
	else {
		echo "FILE PROGRAM ANALISA HASIL TIDAK ADA";
	}
}

// ... End Link Menu Konsultasi ... //

// ... Link Menu Pencarian ... //

elseif ($page=="cari") {
	if(file_exists ("data/cari/cari.php")) {
		include "data/cari/cari.php";
	}
	else {
		echo "FILE PROGRAM PENCARIAN TIDAK ADA";
	}
}

	elseif ($page=="viw") {
	if(file_exists ("data/cari/datail.php")) {
		include "data/cari/datail.php";
	}
	else {
		echo "FILE PROGRAM DETAIL TIDAK ADA";
	}
}

// ... Ebd Link Pencarian ... //