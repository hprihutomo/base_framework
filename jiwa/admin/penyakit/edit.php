<?php 
include "../librari/inc.koneksidb.php";

#Variabel URL (register global)
$kdubah = $_REQUEST['kdubah'];
if ($kdubah !="") {
#menampilkan data
  $sql = "SELECT * FROM penyakit WHERE kd_penyakit='$kdubah'";
  $qry = mysql_query ($sql, $koneksi)
    or die ("SQL Error" .mysql_error());
  $data=mysql_fetch_array($qry);
  
  
# Samakan dgn variabel form
$TxtKodeH    = $data['kd_penyakit'];
$penyakit = $data['nm_penyakit'];
$penyebab = $data['penyebab'];
$keterangan  = $data['keterangan'];
$solusi   = $data['solusi'];
$namafoto = $data['photo'];
$fotoMun  = "../photo/$namafoto";
}
?>
<form name="form1" method="post" action="?page=p_edit" enctype="multipart/form-data" name="FMHS">
<table width="452" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td height="40" align="center" bgcolor="#77B6D0"><strong><font color="#FFFFFF">EDIT DATA</font></strong></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="113">Id</td>
            <td width="11">:</td>
            <td>
            <input name="TxtKode" type="text" maxlength="4" size="6" value="<?= $TxtKodeH; ?>" disabled="disabled">
             <input name="TxtKodeH" type="hidden" value="<?= $TxtKodeH; ?>" />
          </tr>
          <tr>
            <td>Penyakit</td>
            <td>:</td>
            <td><input name="penyakit" type="text" id="penyakit" size="30" maxlength="30" value="<?= $penyakit; ?>"></td>
          </tr>
          <tr>
            <td>Penyebab</td>
            <td>:</td>
            <td><input name="penyebab" type="text" id="penyebab" size="30" maxlength="255" value="<?= $penyebab; ?>"></td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><textarea name="keterangan" cols="30" rows="5" id="keterangan"><?= $keterangan; ?></textarea></td>
          </tr>
          <tr>
            <td>Slolusi</td>
            <td>:</td>
            <td><textarea name="solusi" cols="30" rows="5" id="solusi"><?= $solusi; ?></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><img width="100" src=<?=$fotoMun?>></td>
          </tr>
          <tr>
            <td>Photo</td>
            <td>:</td>
            <td><input type="file" name="photo" id="photo"></td>
          </tr>
          <tr>
            <td colspan="3" align="center">
              <input name="fok" type="submit" id="fok" value="Simpan">
              <input type="button" name="button" value="batal" onclick="self.history.back()">
            </td>
          </tr>
    </tr>
  </table>
</form>