<?php  
include "../librari/inc.koneksidb.php";

$kdsakit = $_REQUEST['CmbPenyakit'];
$sqlp = "SELECT * FROM penyakit WHERE kd_penyakit='$kdsakit' ";
$qryp = mysql_query($sqlp);
$datap= mysql_fetch_array($qryp);
$sakit = $datap['nm_penyakit'];
?>


<b>NAMA PENYAKIT : <?= $sakit; ?> </b>
<table width="400" border="0" cellpadding="2" cellspacing="1" bgcolor="#22B5DD">
  <tr> 
    <td colspan="3"><b>DAFTAR GEJALA</b></td>
  </tr>
  <tr bgcolor="#DBEAF5"> 
    <td width="21" align="center"><b>No</b></td>
    <td width="47"><b>Kode</b></td>
    <td width="316" bgcolor="#DBEAF5"><b>Nama Gejala</b></td>
  </tr>
  <?php 
	$sqlg  = "SELECT gejala.* FROM gejala,relasi ";
	$sqlg .= "WHERE gejala.kd_gejala=relasi.kd_gejala ";
	$sqlg .= "AND  relasi.kd_penyakit='$kdsakit' ";
	$sqlg .= "ORDER BY gejala.kd_gejala";
	$qryg = mysql_query($sqlg, $koneksi) 
		 or die ("SQL Error".mysql_error());
	while ($datag=mysql_fetch_array($qryg)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td align="center"><?php echo $no; ?></td>
    <td><?php echo $datag['kd_gejala']; ?></td>
    <td><?php echo $datag['nm_gejala']; ?></td>
  </tr>
  <?php
  }
  ?>
  <tr> 
    <td colspan="3" bgcolor="#DBEAF5">&nbsp;</td>
  </tr>
</table>
