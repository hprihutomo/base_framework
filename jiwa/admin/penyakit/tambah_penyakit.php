<?php
  include "../librari/inc.koneksidb.php";
  include "../librari/inc.kodeauto.php";
?>


<form action="?page=pproses" method="post" enctype="multipart/form-data" name="FMHS">
  <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" >
    <tr>
      <td height="40" align="center" bgcolor="#77B6D0"><strong><font color="#FFFFFF">ENTRY DATA</font></strong></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="113">Id</td>
            <td width="11">:</td>
            <td>
            <input name="TxtKode" type="text" maxlength="4" size="6" value="<? echo kdauto("Penyakit","P"); ?>" disabled="disabled">
             <input name="TxtKodeH" type="hidden" value="<? echo kdauto("Penyakit","P"); ?>" />
          </tr>
          <tr>
            <td>Penyakit</td>
            <td>:</td>
            <td><input name="penyakit" type="text" id="penyakit" size="30" maxlength="30"></td>
          </tr>
          <tr>
            <td>Penyebab</td>
            <td>:</td>
            <td><input name="penyebab" type="text" id="penyebab" size="30" maxlength="30"></td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><textarea name="keterangan" cols="30" rows="5" id="keterangan"></textarea></td>
          </tr>
          <tr>
            <td>Slolusi</td>
            <td>:</td>
            <td><textarea name="solusi" cols="30" rows="5" id="solusi"></textarea></td>
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

