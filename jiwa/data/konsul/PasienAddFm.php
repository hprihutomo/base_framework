<?php 
//include "librari/inc.koneksidb.php";
?>

<link href="style.css" rel="stylesheet" type="text/css" media="all" />

<form action="?page=daftarsim" method="post" name="form1" target="_self">
  <table width="200" border="0"align="center" >
    <tr>
      <td><table width="400" border="0"cellpadding="2" cellspacing="1">
        <tr>
          <td colspan="2"><b>MASUKAN DATA PASIEN</b></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input name="TxtNama" type="text" value="<?= $TxtNama; ?>" size="35" maxlength="60"></td>
        </tr>
        <tr>
          <td>Kelamin</td>
          <td><input type="radio" name="RbKelamin" value="P" checked>
            Pria
            <input type="radio" name="RbKelamin" value="W">
            Wanita</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input name="TxtAlamat" type="text" value="<?= $TxtAlamat; ?>" size="35" maxlength="60"></td>
        </tr>
        <tr>
          <td width="76">Pekerjaan</td>
          <td width="312"><input name="TxtPekerjaan" type="text" value="<?= $TxtPekerjaan; ?>" size="35" maxlength="60"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Daftar"></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>

