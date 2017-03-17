<?php
//koneksi
include("../../librari/inc.koneksidb.php");
//variabel
$p = $_POST['penyakit'];
$g = $_POST['gejala'];

if (isset($_GET['simpan'])){
	//Validasi
	if ($p =="" AND $g ==""){
		echo "<div class='info'>Data Belum Dipilih</div>";
		//include("relasi_2.php");
	}elseif (empty($p)) {
		echo "<div class='info'>Penyakit Belum Dipilih</div>";
		//include("relasi_2.php");
	}elseif (empty($g)) {
		echo "<div class='info'>Gejala Belum Dipilih</div>";
		//include("relasi_2.php");
	}else{
		$q = mysql_query("INSERT INTO relasi(kd_penyakit,kd_gejala)
					      VALUES ('$p','$g')");
		if ($q){
			 echo "<div class='info'>Sukses Simpan Data</div>";
			 //include("relasi_2.php");
		}else{
			echo "<div class='info'>Gagal Simpan Data</div>";
			//include("relasi_2.php");
		}
	}
}elseif (isset($_GET['normal'])) {
		if (empty($p)) {
		echo "<div class='info'>Penyakit Belum Dipilih</div>";
		}else{
		$q  = mysql_query("DELETE FROM relasi Where kd_penyakit ='$p'");
			if ($q){
				echo "<div class='info'>Sukses Hapus Relasi</div>";
			}else{
				echo "<div class='info'>Gagal Hapus Relasi</div>";
			}
		}
	
}
?>