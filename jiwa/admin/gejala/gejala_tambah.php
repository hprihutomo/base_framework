<?php
	include "../librari/inc.koneksidb.php";
	include "../librari/inc.kodeauto.php";
?>

<form name="form1" method="post" action="?page=tproses">
	<div align="center">
		<table width="400" border="0" cellpading="2" cellspacing="1" bgcolor="#77B6D0">
			<tr>
				<td colspan="2" align="center"><b>MASUKAN DATA GEJALA</b></td>
			</tr>
			<tr>
				<tr bgcolor="#FFFFFF">
				<td><b>Kode</b></td>
				<td>
					<input name="TxtKode" type="text" maxlength="4" size="6" value="<? echo kdauto("gejala","G"); ?>" disabled="disabled">
					<input name="TxtKodeH" type="hidden" value="<? echo kdauto("gejala","G"); ?>" />
				</td>
			</tr>
			<tr>
				<tr bgcolor="FFFFFF">
				<td widht="77"><b>Gejala</b></td>
				<td widht="361"><textarea name="TxtGejala" cols="35" rows="2"><?= $TxtGejala; ?></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="submit" value="simpan">
					<input type="button" name="button" value="batal" onclick="self.history.back()">
				</td>
			</tr>
		</table>
	</div>
</form>