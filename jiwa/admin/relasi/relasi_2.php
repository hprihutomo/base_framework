<?php
//koneksi
include("../librari/inc.koneksidb.php");
//Query Data Penyakit
$q  = mysql_query("SELECT * FROM penyakit ");
?>
<div id="info_muncul"></div>
<form>
	<table widht="400" align="center" cellpading="0" cellspacing="1">
		<tr>
      		<td height="30" align="center" bgcolor="#77B6D0"><strong><font color="#FFFFFF">INPUT RELASI</font></strong></td>
    	</tr>
    	<tr>
			<td><select name="penyakit" id="penyakit">
				<option value="">Data Penyakit</option>
				<?php
					while ($rl = mysql_fetch_array($q)) {
							$kode_p = $rl['kd_penyakit'];
							$nama_p = $rl['nm_penyakit'];
						?>
							<option value="<?=$kode_p?>"><?=$nama_p?></option>
						<?php
					}
				?>
			</select></td>
		</tr>

<?php
$ge = mysql_query("SELECT * FROM gejala ");
?>
		<tr>
			<td><select name="gejala" id="gejala">
				<option value="">Data Gejala</option>
				<?php
					while ($rlce = mysql_fetch_array($ge)) {
						$kode_g = $rlce['kd_gejala'];
						$nama_g = $rlce['nm_gejala'];
						?>
							<option value="<?=$kode_g?>"><?=$nama_g?></option>
						<?php
					}
				?>
			</select></td>
		</tr>
		<tr>
			<td><input type="button" value="Simpan" onClick="getAction('relasi/sv_relasi.php?simpan');"  />
			<input type="button" value="Normalkan" onClick="getAction('relasi/sv_relasi.php?normal');" /></td>
		</tr>
</table>
</form>