<?php
include "../conn.php";
// GET DATA PER ID
if(isset($_GET['idp'])){
	$idp = $_GET['idp'];
}
$q = mysql_query("SELECT * FROM penyakit WHERE kd_penyakit = '$idp'");
$rl = mysql_fetch_array($q);
?>

<table width="100%">
	<tr>
		<td colspan="3"><h1><?=$rl['nm_penyakit'];?></h1></td>
	</tr>
	<tr>
		<td width="30" valign="top"><strong>Gejala</strong> : <br>
			<?php
			    $sqlg  = "SELECT gejala.* FROM gejala,relasi WHERE gejala.kd_gejala=relasi.kd_gejala AND  relasi.kd_penyakit='$idp' ORDER BY gejala.kd_gejala";
			    $qryg = mysql_query($sqlg, $koneksi) or die ("SQL Error".mysql_error());
			    while ($datag=mysql_fetch_array($qryg)) {
			    ?>
			    <li><?php echo $datag['nm_gejala']; ?></li>
			 <?php  }	?>
		</td>
	</tr>
	<tr>
		<td width="30" valign="top"><strong>Penyebab</strong> : <br><li> <?=$rl['penyebab'];?></li></td>
	</tr>
	<tr>
		<td width="40" valign="top"><strong>Solusi</strong> : <br><li><?=$rl['solusi'];?></li></td>
	</tr>
</table>
