<?php  
include "../librari/inc.koneksidb.php";
$kdsakit = $_REQUEST['kdsakit'];
?>


<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ.selObj,restore) { //v3.0 eal (targ+".location='"+selObj.options[selObj. selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//->
</script>

<form name="form1" method="post" action="?page=relasipros">
  <div align="center">
    <table width="500" border="0" cellpadding="2" cellspacing="1"bgcolor="#99FFFF">
      <tr bgcolor="#22B5DD">
        <td height="48" colspan="2" align="center">
      <b> [ RELASI GEJALA DAN PENYAKIT ] </b> </td> </tr>
      <tr>
        <td colspan="2" bgcolor="#22B5DD">
        <b>Nama Penyakit</b></td>
    </tr>
      <tr>
        <td colspan="2" bgcolor="#22B5DD">
        <b>Nama Penakit : </b> </td>
    </tr>
      <td colspan="2" bgcolor="#DBEAF5">
        <select name="CmbPenyakit"
onChange=MM_jumpMenu ('parent',this,0)">
          <option value="<?= $_SERVER['PHP_SELF'];?>">
            [ Daftar Penyakit ] </option>
          <?php
$sqlp = "SELECT * FROM penyakit ORDER BY kd_penyakit";
$qryp = mysql_query($sqlp, $koneksi)
	or die ("SQL Error: ".mysql_error());
while ($datap=mysql_fetch_array($qryp)) {
// Untuk Nilai Terpilih
if ($datap['kd_penyakit']==$kdsakit) {
	$cek ="selected";
	}
	else {
		$cek ="";
	}
	//kode untuk tampilin daftar
	echo "<option value='RelasiAddPilih.php?
		kdsakit=$datap[kd_penyakit]' $cek>
		$datap[nm_penyakit]
		</option>:";
		}
	?>
          </select>
        <input name="TxtKodeH" type="hidden"
		value="<?= $kdsakit; ?>"></td>
		    </tr>
      <tr>
        <td colspan="2" bgcolor="#22B5DD">
          <b>Daftar Gejala</b></td>
		      </tr>
      <?php
		$sql = "SELECT * FROM gejala ORDER BY kd_gejala" ;
		$qry = mysql_query($sql, $koneksi)
			or die ("SQL Error: ".mysql_error());
		while ($data=mysql_fetch_array($qry)) {
		$no++;
			$sqlr = "SELECT * FROM relasi ";
			$sqlr .="WHERE kd_penyakit='$kdsakit'";
			$sqlr .="AND kd_gejala='$data[kd_gejala]'";
			$qryr = mysql_query($sqlr, $koneksi);
			$cocok= mysql_num_rows($qryr);
	// kode nilai gejala terpilih
	// kode warna pada nilai terpilih
	if ($cocok==1) {
		$cek = " checked" ;
		$bg = "#CCFF00";
		}
		else {
			$cek = "";
			$bg  = "#FFFFFF";
			}
	?>
      <tr bgcolor="#FFFFFF">
        <td width="20" bgcolor="<?= $bg; ?>">
          <input name="CekGejala[]" type="checkbox"
		value="<?= $data ['kd_gejala']; ?>= $cek; ?>>
		</td>
		<td width="469"><? echo $data['nm_gejala']; ?></td>
	      </tr>
      <?php
		}
		?>
      <tr bgcolor=#DBEAF5">
        <td colspan="2" align="center" bgcolor="DBEAF5">
          <input type="submit" name="Submit" value="Simpan Relasi">
          <input type="reset" name="reser"
			value="Normalkan"></td>
		      </tr> 
    </table>
  </div>
