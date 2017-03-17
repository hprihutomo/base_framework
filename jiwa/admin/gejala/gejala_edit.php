<?php 
include "../librari/inc.koneksidb.php";

$kdubah = $_REQUEST['kdubah'];
if ($kdubah !="") {
	#tampilin data bray
	$sql = "SELECT * FROM gejala WHERE kd_gejala='$kdubah'";
	$qry = mysql_query($sql, $koneksi)
		or die ("SQL Error".mysql_error());
		$data=mysql_fetch_array($qry);
		
	#menyamain dengan variabel + form
	//pindah data ke variabel
	$TxtGejala = $data['nm_gejala'];
	$TxtKodeH = $data['kd_gejala'];
	}
?>

<form name="form1" method="post" action="?page=edit_proses">
  <div align="center">
    <table width="400" border="0" cellpading="2" cellspacing="1" bgcolor="#77B6D0">
      <tr>
        <td colspan="2" align="center"><b>MERUBAH GEJALA PENYAKIT</b></td>
    <tr>
      <tr bgcolor="#FFFFFF">
        <td>Kode</td>
    <td><input name="TxtKode" type="text" maxlength="4" size="6" value="<? echo $TxtKodeH; ?>"disabled="disabled">
      <input name="TxtKodeH" type="hidden" value="<? echo $TxtKodeH; ?>"></td>
    </tr>
      <tr bgcolor="FFFFFF">
        <td width="77">Gejala</td>
    <td width="361">
      <textarea name="TxtGejala" cols="35" rows="3"><? echo $TxtGejala; ?></textarea></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          <input type="submit" name="Submit" value="Simpan">
          <input type="button" name="button" value="batal" onclick="self.history.back()">
        </td>
      </tr>
    </table>
  </div>
</form>
