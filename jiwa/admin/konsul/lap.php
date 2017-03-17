<html>
<head>
    <link rel="stylesheet" href="konsul/tabel.css" />
    <style type="text/css">
    	#kon{
    		background: white;
    	}
    </style>
</head>
<body onLoad="document.postform.elements['pasien'].focus();">

<?php
//untuk koneksi database
include "../librari/inc.koneksidb.php";
	
//untuk menantukan tanggal awal dan tanggal akhir data di database
$min_tanggal=mysql_fetch_array(mysql_query("select min(tanggal) as min_tanggal from analisa_hasil"));
$max_tanggal=mysql_fetch_array(mysql_query("select max(tanggal) as max_tanggal from analisa_hasil"));
?>
<div id="kon">
<form action="?page=kon" method="post" name="postform">
<table width="435" border="0">
<tr>
    <td>Tanggal Awal</td>
    <td colspan="2"><input type="text" name="tanggal_awal" size="15" value="<?php echo $min_tanggal['min_tanggal'];?>"/>
    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="konsul/calender/calender.jpeg" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
    </td>
</tr>
<tr>
    <td>Tanggal Akhir</td>
    <td colspan="2"><input type="text" name="tanggal_akhir" size="15" value="<?php echo $max_tanggal['max_tanggal'];?>"/>
    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="konsul/calender/calender.jpeg" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
    </td>
</tr>
<tr>
    <td><input type="submit" value="Tampilkan Data" name="cari"></td>
    <td colspan="2">&nbsp;</td>
</tr>
</table>
</form>
<p>

<?php
//di proses jika sudah klik tombol cari
if(isset($_POST['cari'])){
	
	//menangkap nilai form
	$tanggal_awal=$_POST['tanggal_awal'];
	$tanggal_akhir=$_POST['tanggal_akhir'];
	
	if(empty($pasien) and empty($tanggal_awal) and empty($tanggal_akhir)){
		//jika tidak menginput apa2
		$query = "SELECT * from analisa_hasil";
		$query=mysql_query("select * from analisa_hasil");
		$jumlah=mysql_fetch_array(mysql_query("select count(nama) as total from analisa_hasil"));
		
	}else{
		
		?><i><b>Informasi : </b> Laporan Konsultasi <b><?php echo ucwords($_POST['pasien']);?></b> dari tanggal <b><?php echo $_POST['tanggal_awal']?></b> sampai dengan tanggal <b><?php echo $_POST['tanggal_akhir']?></b></i><?php

		// ... Mencari Jumlah Pasien ... //
		$query=mysql_query("select * from analisa_hasil where nama like '%$pasien%' and tanggal between '$tanggal_awal' and '$tanggal_akhir'");
		$jumlah=mysql_fetch_array(mysql_query("select count(nama) as total from analisa_hasil where nama like '%$pasien%' and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// ... mencari jumlah p ... //
		$query=mysql_query("select * from analisa_hasil where nama like '%$pasien%' and tanggal between '$tanggal_awal' and '$tanggal_akhir'");
		$jumP1=mysql_fetch_array(mysql_query("select count(*) jumP1 from analisa_hasil where kd_penyakit = 'P001'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p2 //
		$jumP2=mysql_fetch_array(mysql_query("select count(*) jumP2 from analisa_hasil where kd_penyakit = 'P002'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p3 //
		$jumP3=mysql_fetch_array(mysql_query("select count(*) jumP3 from analisa_hasil where kd_penyakit = 'P003'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p4 //
		$jumP4=mysql_fetch_array(mysql_query("select count(*) jumP4 from analisa_hasil where kd_penyakit = 'P004'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p5 //
		$jumP5=mysql_fetch_array(mysql_query("select count(*) jumP5 from analisa_hasil where kd_penyakit = 'P005'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p6
		$jumP6=mysql_fetch_array(mysql_query("select count(*) jumP6 from analisa_hasil where kd_penyakit = 'P006'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p7
		$jumP7=mysql_fetch_array(mysql_query("select count(*) jumP7 from analisa_hasil where kd_penyakit = 'P007'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p8 //
		$jumP8=mysql_fetch_array(mysql_query("select count(*) jumP8 from analisa_hasil where kd_penyakit = 'P008'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p9 //
		$jumP9=mysql_fetch_array(mysql_query("select count(*) jumP9 from analisa_hasil where kd_penyakit = 'P009'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p10 //
		$jumP10=mysql_fetch_array(mysql_query("select count(*) jumP10 from analisa_hasil where kd_penyakit = 'P010'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

		// p11 //
		$jumP11=mysql_fetch_array(mysql_query("select count(*) jumP11 from analisa_hasil where kd_penyakit = 'P011'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));


		// p12 //
		$jumP12=mysql_fetch_array(mysql_query("select count(*) jumP12 from analisa_hasil where kd_penyakit = 'P012'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));


		// p13 //
		$jumP13=mysql_fetch_array(mysql_query("select count(*) jumP13 from analisa_hasil where kd_penyakit = 'P013'and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));

	}
	
	?>
</p>

<table class="datatable">
	<tr>
    	<th width="34">No</th>
    	<th width="131">Tanggal</th>
    	<th width="131">Nama</th>
    	<th width="80">Kelamin</th>
    	<th width="131">Alamat</th>
    	<th width="131">Pekerjaan</th>
    	<th width="80">Penyakit</th>
    </tr>
	<?php
	//untuk penomoran data
	$no=0;
	
	//menampilkan data
	while($row=mysql_fetch_array($query)){
	?>
    <tr>
    	<td><?php echo $no=$no+1; ?></td>
    	<td><?php echo $row['tanggal']; ?></td>
    	<td><?php echo $row['nama'];?></td>
    	<td><?php echo $row['kelamin'];?></td>
    	<td><?php echo $row['alamat'];?></td>
    	<td><?php echo $row['pekerjaan'];?></td>
    	<td><?php echo $row['kd_penyakit'];?></td>
    </tr>
    <?php
	}
	?>
    <tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL PASIEN</strong><td align="right"><?php echo number_format($jumlah['total'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P1</strong><td align="right"><?php echo number_format($jumP1['jumP1'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P2</strong><td align="right"><?php echo number_format($jumP2['jumP2'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P3</strong><td align="right"><?php echo number_format($jumP3['jumP3'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P4</strong><td align="right"><?php echo number_format($jumP4['jumP4'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P5</strong><td align="right"><?php echo number_format($jumP5['jumP5'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P6</strong><td align="right"><?php echo number_format($jumP6['jumP6'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P7</strong><td align="right"><?php echo number_format($jumP7['jumP7'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P8</strong><td align="right"><?php echo number_format($jumP8['jumP8'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P9</strong><td align="right"><?php echo number_format($jumP9['jumP9'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P10</strong><td align="right"><?php echo number_format($jumP10['jumP10'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P11</strong><td align="right"><?php echo number_format($jumP11['jumP11'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P12</strong><td align="right"><?php echo number_format($jumP12['jumP12'],0,',','.');?></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="right">
    		<strong>TOTAL P13</strong><td align="right"><?php echo number_format($jumP13['jumP13'],0,',','.');?></td>
    	</tr>
  	
    </tr>
    
    <tr>
    	<td colspan="4" align="center"> 
		<?php
		//jika data tidak ditemukan
		if(mysql_num_rows($query)==0){
			echo "<font color=red><blink>Tidak ada data yang dicari!</blink></font>";
		}
		?>
        </td>
    </tr>
     
</table>


<?php
}else{
	unset($_POST['cari']);
}
?>

<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
</div>
</body>
</html>