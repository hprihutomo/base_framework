<?php
include "../conn.php";
// GET DATA PER ID
if(isset($_GET['idp'])){
	$idp = $_GET['idp'];
}
$q = mysql_query("SELECT * FROM penyakit WHERE kd_penyakit = '$idp'");
$rl = mysql_fetch_array($q);
//$foto = $rl['photo'];
?>

<table width="100%">
	<tr>
		<td colspan="3"><h1><?=$rl['nm_penyakit'];?></h1></td>
	</tr>
	<tr>
		<td width="30" valign="top"><strong>Gejala</strong> : <br>
			<?php
			    $sqlg  = "SELECT gejala.* FROM gejala,relasi ";
			    $sqlg .= "WHERE gejala.kd_gejala=relasi.kd_gejala ";
			    $sqlg .= "AND  relasi.kd_penyakit='$idp' ";
			    $sqlg .= "ORDER BY gejala.kd_gejala";
			    $qryg = mysql_query($sqlg, $koneksi)
			            or die ("SQL Error".mysql_error());
			    while ($datag=mysql_fetch_array($qryg)) {
			      $no++;
			    ?>
			    <li><?php echo $datag['nm_gejala']; ?></li>
			      <!-- <tr bgcolor="#FFFFFF">
			        <td align="center"><?php echo $no; ?></td>
			        <td><?php echo $datag['kd_gejala']; ?></td>
			        <td></td>
			      </tr> -->
			      <?php
			    }
			?>
		</td>
	</tr>
	<tr>
		<td width="30" valign="top"><strong>Penyebab</strong> : <br><li> <?=$rl['penyebab'];?></li></td>
	</tr>
	<tr>
		<td width="40" valign="top"><strong>Solusi</strong> : <br><li><?=$rl['solusi'];?></li></td>
	</tr>
</table>
<br>
<div class="pull-left">
    <a href="?p=penyakit" class="btn btn-sm btn-warning">KEMBALI</a>
</div>
