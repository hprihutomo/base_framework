<?php 
include "../librari/inc.koneksidb.php";
$kdsakit = $_REQUEST['kdsakit'];
?>

<form name="form1" method="post" action="?page=lap">
  <div align="center">
    <table width="400" border="0" cellpadding="2" cellspacing="1" bgcolor="#99FFFF">
      <tr>
        <td colspan="2" bgcolor="#22B5DD"><b>TAMPILKAN GEJALA PER PENYAKIT </b></td>
      </tr>
      <tr>
        <td width="93" bgcolor="#DBEAF5"><b>Penyakit :</b></td>
        <td width="346" bgcolor="#DBEAF5">
          <select name="CmbPenyakit">
            <option value="NULL">[ Daftar Penyakit ]</option>
            <?php 
               $sqlp = "SELECT * FROM penyakit ORDER BY kd_penyakit";
               $qryp = mysql_query($sqlp, $koneksi) 
                        or die ("SQL Error: ".mysql_error());
               while ($datap=mysql_fetch_array($qryp)) {
                if ($datap['kd_penyakit']==$kdsakit) {
                   $cek ="selected";
                }
              else {
                   $cek ="";
                }
              echo "<option value='$datap[kd_penyakit]' $cek> $datap[nm_penyakit] ($datap[kd_penyakit])</option>";
            }
            ?>
          </select>
        </td>
      </tr>
      <tr bgcolor="#DBEAF5"> 
        <td align="center" bgcolor="#DBEAF5">&nbsp;</td>
      <td bgcolor="#DBEAF5"><input type="submit" name="tampil" value="Tampil"></td>
      </tr>
    </table>
  </div>
</form>

<?php  
if(isset($_POST['tampil'])){
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

<?php
}else{
  unset($_POST['tampil']);
}
?>