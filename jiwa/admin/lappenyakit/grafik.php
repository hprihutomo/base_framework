<?php
	include "../librari/inc.koneksidb.php";

	// mencari P1
	$query = "SELECT count(*) jumP1 from analisa_hasil where kd_penyakit = 'P001'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$jumP1 = $data['jumP1'];

	// mencari P2
	$query = "SELECT count(*) jumP2 from analisa_hasil where kd_penyakit = 'P002'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP2 = $data['jumP2'];

	// mencari P3
	$query = "SELECT count(*) jumP3 from analisa_hasil where kd_penyakit = 'P003'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP3 = $data['jumP3'];

	// mencari P4
	$query = "SELECT count(*) jumP4 from analisa_hasil where kd_penyakit = 'P004'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP4 = $data['jumP4'];

	// mencari P5
	$query = "SELECT count(*) jumP5 from analisa_hasil where kd_penyakit = 'P005'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP5 = $data['jumP5'];

	// mencari P6
	$query = "SELECT count(*) jumP6 from analisa_hasil where kd_penyakit = 'P006'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP6 = $data['jumP6'];

	// mencari P7
	$query = "SELECT count(*) jumP7 from analisa_hasil where kd_penyakit = 'P007'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP7 = $data['jumP7'];

	// mencari P8
	$query = "SELECT count(*) jumP8 from analisa_hasil where kd_penyakit = 'P008'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP8 = $data['jumP8'];

	// mencari P9
	$query = "SELECT count(*) jumP9 from analisa_hasil where kd_penyakit = 'P009'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP9 = $data['jumP9'];

	// mencari P10
	$query = "SELECT count(*) jumP10 from analisa_hasil where kd_penyakit = 'P010'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP10 = $data['jumP10'];

	// mencari P11
	$query = "SELECT count(*) jumP11 from analisa_hasil where kd_penyakit = 'P011'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP11 = $data['jumP11'];

	// mencari P12
	$query = "SELECT count(*) jumP12 from analisa_hasil where kd_penyakit = 'P012'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP12 = $data['jumP12'];

	// mencari P13
	$query = "SELECT count(*) jumP13 from analisa_hasil where kd_penyakit = 'P013'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP13 = $data['jumP13'];

	// menghitung total
	$total = $jumP1 + $jumP2 + $jumP3 + $jumP4 + $jumP5 + $jumP6 + $jumP7 + $jumP8 + $jumP9 + $jumP10 + $jumP11 + $jumP12 + $jumP13;

	// menghitung persen
	$prosenP1 = $jumP1/$total * 100;
	$prosenP2 = $jumP2/$total * 100;
	$prosenP3 = $jumP3/$total * 100;
	$prosenP4 = $jumP4/$total * 100;
	$prosenP5 = $jumP5/$total * 100;
	$prosenP6 = $jumP6/$total * 100;
	$prosenP7 = $jumP7/$total * 100;
	$prosenP8 = $jumP8/$total * 100;
	$prosenP9 = $jumP9/$total * 100;
	$prosenP10 = $jumP10/$total * 100;
	$prosenP11 = $jumP11/$total * 100;
	$prosenP12 = $jumP12/$total * 100;
	$prosenP13 = $jumP13/$total * 100;

	// menentukan panjang
	$panjangGrafikP1 = $prosenP1 * 30 / 100;
	$panjangGrafikP2 = $prosenP2 * 30 / 100;
	$panjangGrafikP3 = $prosenP3 * 30 / 100;
	$panjangGrafikP4 = $prosenP4 * 30 / 100;
	$panjangGrafikP5 = $prosenP5 * 30 / 100;
	$panjangGrafikP6 = $prosenP6 * 30 / 100;
	$panjangGrafikP7 = $prosenP7 * 30 / 100;
	$panjangGrafikP8 = $prosenP8 * 30 / 100;
	$panjangGrafikP9 = $prosenP9 * 30 / 100;
	$panjangGrafikP10 = $prosenP10 * 30 / 100;
	$panjangGrafikP11 = $prosenP11 * 30 / 100;
	$panjangGrafikP12 = $prosenP12 * 30 / 100;
	$panjangGrafikP13 = $prosenP13 * 30 / 100;

?>

<h2>Statistik Penyakit yang sering diderita User</h2>
	<p><b>Gangguan Kesadaran</b> (Jumlah: <?php echo $jumP1; ?> | <?php echo $prosenP1; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP1; ?>%; background-color: red;" title="Gangguan Kesadaran (Jumlah: <?php echo $jumP1; ?> | <?php echo $prosenP1; ?>%)">
			</div>
	</p>

	<p><b>Derealisasi dan Deepersonalisasi</b> (Jumlah: <?php echo $jumP2; ?> | <?php echo $prosenP2; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP2; ?>%; background-color: red;" title="Derealisasi dan Deepersonalisasi (Jumlah: <?php echo $jumP2; ?> | <?php echo $prosenP2; ?>%)">
			</div>
	</p>

	<p><b>Gangguan Fungsi Pengenalan</b> (Jumlah: <?php echo $jumP3; ?> | <?php echo $prosenP3; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP3; ?>%; background-color: red;" title="Gangguan Fungsi Pengenalan (Jumlah: <?php echo $jumP3; ?> | <?php echo $prosenP3; ?>%)">
			</div>
	</p>

	<p><b>Gangguan pada Fungsi Berfikir</b> (Jumlah: <?php echo $jumP4; ?> | <?php echo $prosenP4; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP4; ?>%; background-color: red;" title="Gangguan Pada Fungsi Berfikir (Jumlah: <?php echo $jumP4; ?> | <?php echo $prosenP4; ?>%)">
			</div>
	</p>

	<p><b>Gangguan pada Fungsi Inteligensi</b> (Jumlah: <?php echo $jumP5; ?> | <?php echo $prosenP5; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP5; ?>%; background-color: red;" title="Gangguan pada Fungsi Inteligensi (Jumlah: <?php echo $jumP5; ?> | <?php echo $prosenP5; ?>%)">
			</div>
	</p>

	<p><b>Gangguan Fungsi Ingatan</b> (Jumlah: <?php echo $jumP6; ?> | <?php echo $prosenP6; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP6; ?>%; background-color: red;" title="Gangguan Fungsi Ingatan (Jumlah: <?php echo $jumP6; ?> | <?php echo $prosenP6; ?>%)">
			</div>
	</p>

	<p><b>Gangguan Fungsi Perasaan</b> (Jumlah: <?php echo $jumP7; ?> | <?php echo $prosenP7; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP7; ?>%; background-color: red;" title="Gangguan Fungsi Perasaan (Jumlah: <?php echo $jumP7; ?> | <?php echo $prosenP7; ?>%)">
			</div>
	</p>

	<p><b>Gangguan Pada Fungsi Kemauan</b> (Jumlah: <?php echo $jumP8; ?> | <?php echo $prosenP8; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP8; ?>%; background-color: red;" title="Gangguan Pada Fungsi Kemauan (Jumlah: <?php echo $jumP8; ?> | <?php echo $prosenP8; ?>%)">
			</div>
	</p>

	<p><b>Defisien Moral</b> (Jumlah: <?php echo $jumP9; ?> | <?php echo $prosenP9; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP9; ?>%; background-color: red;" title="Defisien Moral (Jumlah: <?php echo $jumP9; ?> | <?php echo $prosenP9; ?>%)">
			</div>
	</p>

	<p><b>Psikosa</b> (Jumlah: <?php echo $jumP10; ?> | <?php echo $prosenP10; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP10; ?>%; background-color: red;" title="Psikosa (Jumlah: <?php echo $jumP10; ?> | <?php echo $prosenP10; ?>%)">
			</div>
	</p>

	<p><b>Schizophrenia</b> (Jumlah: <?php echo $jumP11; ?> | <?php echo $prosenP11; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP11; ?>%; background-color: red;" title="Schizophrenia (Jumlah: <?php echo $jumP11; ?> | <?php echo $prosenP11; ?>%)">
			</div>
	</p>

	<!-- <p><b>Kromomikosis</b> (Jumlah: <?php echo $jumP12; ?> | <?php echo $prosenP12; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP12; ?>%; background-color: red;" title="Kromomikosis (Jumlah: <?php echo $jumP12; ?> | <?php echo $prosenP12; ?>%)">
			</div>
	</p>

	<p><b>Misetoma</b> (Jumlah: <?php echo $jumP13; ?> | <?php echo $prosenP13; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP13; ?>%; background-color: red;" title="Misetoma (Jumlah: <?php echo $jumP13; ?> | <?php echo $prosenP13; ?>%)">
			</div>
	</p>
 -->