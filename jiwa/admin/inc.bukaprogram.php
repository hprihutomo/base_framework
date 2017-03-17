<?php
error_reporting(~E_NOTICE);

$page= @$_REQUEST['page'];
if ($page=="") {
	if(file_exists ("hom/home.php")) {
		include "hom/home.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
		elseif ($page=="home") {
			if(file_exists ("hom/home.php")) {
				include "hom/home.php";
			}
			else {
				echo "FILE HALAMAN UTAMA ADA";
			}
		}

// ... Link Menu Input, Edit, Hapus Penyakit ... //

elseif ($page=="inpenyakit") {
	if(file_exists ("penyakit/penyakit.php")) {
		include "penyakit/penyakit.php";
	}
	else {
		echo "FILE PROGRAM LIHAT PENYAKIT TIDAK ADA";
	}
}

		elseif ($page=="tambah_p") {
			if(file_exists ("penyakit/tambah_penyakit.php")) {
				include "penyakit/tambah_penyakit.php";
			}
			else {
				echo "FILE PROGRAM INPUT PENYAKIT TIDAK ADA";
			}
		}

		elseif ($page=="pproses") {
			if(file_exists ("penyakit/tambah_proses.php")) {
				include "penyakit/tambah_proses.php";
			}
			else {
				echo "FILE PROGRAM PROSES INPUT PENYAKIT TIDAK ADA";
			}
		}

		elseif ($page=="edit_p") {
			if(file_exists ("penyakit/edit.php")) {
				include "penyakit/edit.php";
			}
			else {
				echo "FILE PROGRAM EDIT PENYAKIT TIDAK ADA";
			}
		}

		elseif ($page=="p_edit") {
			if(file_exists ("penyakit/p_edit.php")) {
				include "penyakit/p_edit.php";
			}
			else {
				echo "FILE PROGRAM PROSES EDIT PENYAKIT TIDAK ADA";
			}
		}

		elseif ($page=="hapus_p") {
			if(file_exists ("penyakit/hapusp.php")) {
				include "penyakit/hapusp.php";
			}
			else {
				echo "FILE PROGRAM HAPUS PENYAKIT TIDAK ADA";
			}
		}

// ... End Link Menu Input, Edit, Hapus Penyakit ... //

// ... Link Menu Input, Edit, Hapus Gejala ... //

elseif ($page=="ingejala") {
	if(file_exists ("gejala/gejala.php")) {
		include "gejala/gejala.php";
	}
	else {
		echo "FILE PROGRAM LIHAT GEJALA TIDAK ADA";
	}
}

		elseif ($page=="edit") {
			if(file_exists ("gejala/gejala_edit.php")) {
				include "gejala/gejala_edit.php";
			}
			else {
				echo "FILE PROGRAM EDIT GEJALA TIDAK ADA";
			}
		}

		elseif ($page=="edit_proses") {
			if(file_exists ("gejala/edit_proses.php")) {
				include "gejala/edit_proses.php";
			}
			else {
				echo "FILE PROGRAM PROSES EDIT GEJALA TIDAK ADA";
			}
		}

		elseif ($page=="hapus") {
			if(file_exists ("gejala/GejalaHapus.php")) {
				include "gejala/GejalaHapus.php";
			}
			else {
				echo "FILE PROGRAM HAPUS GEJALA TIDAK ADA";
			}
		}

		elseif ($page=="tambah") {
			if(file_exists ("gejala/gejala_tambah.php")) {
				include "gejala/gejala_tambah.php";
			}
			else {
				echo "FILE PROGRAM INPUT GEJALA TIDAK ADA";
			}
		}

		elseif ($page=="tproses") {
			if(file_exists ("gejala/tambah_proses.php")) {
				include "gejala/tambah_proses.php";
			}
			else {
				echo "FILE PROGRAM PROSES INPUT GEJALA TIDAK ADA";
			}
		}

// ... End Link Menu Input, Edit, Hapus Gejala ... //

// ... Link Menu Input,  Hapus Relasi ... //

elseif ($page=="inrelasi") {
	if(file_exists ("relasi/relasi_2.php")) {
		include "relasi/relasi_2.php";
	}
	else {
		echo "FILE PROGRAM PROSES INPUT RELASI TIDAK ADA";
	}
}

			elseif ($page=="relasipros") {
			if(file_exists ("relasi/sv_relasi.php")) {
				include "relasi/sv_relasi.php";
			}
			else {
				echo "FILE PROGRAM PROSES INPUT RELASI TIDAK ADA";
			}
		}

		elseif ($page=="h_relasi") {
			if(file_exists ("relasi/hapus.php")) {
				include "relasi/hapus.php";
			}
			else {
				echo "FILE PROGRAM PROSES HAPUS RELASI TIDAK ADA";
			}
		}

// ... End Link Menu Input, Hapus Relasi ... //

// ... Link Menu Lihat Penyakit dan Gejala ... //

elseif ($page=="lap") {
	if(file_exists ("lap/LapGejalaPenyakit.php")) {
		include "lap/LapGejalaPenyakit.php";
	}
	else {
		echo "FILE PROGRAM LIHAT GEJALA PENYAKIT TIDAK ADA";
	}
}

			elseif ($page=="lappros") {
			if(file_exists ("lap/LapGejalaPenyakit2.php")) {
				include "lap/LapGejalaPenyakit2.php";
			}
			else {
				echo "FILE PROGRAM PROSES LIHAT GEJALA PENYAKIT TIDAK ADA";
			}
		}

// ... End Link Menu Lihat Penyakit dan Gejala ... //

// ... Link Menu Statistik Penyakit ... //

elseif ($page=="statis") {
			if(file_exists ("lappenyakit/grafik.php")) {
				include "lappenyakit/grafik.php";
			}
			else {
				echo "FILE PROGRAM STATISTIK PENYAKIT TIDAK ADA";
			}
		}

// ... End Link Menu Statistik Penyakit ... //

// ... Link Menu Laporan Konsultasi ... //

elseif ($page=="kon") {
			if(file_exists ("konsul/lap.php")) {
				include "konsul/lap.php";
			}
			else {
				echo "HALAMAN LAPORAN KONSULTASI TIDAK ADA";
			}
		}

		elseif ($page=="kon_l") {
			if(file_exists ("konsul/lihat.php")) {
				include "konsul/lihat.php";
			}
			else {
				echo "HALAMAN LAPORAN KONSULTASI TIDAK ADA";
			}
		}
?>