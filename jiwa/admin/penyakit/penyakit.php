<?php 
include "../librari/inc.koneksidb.php";
?>

<script type="text/javascript">
function hapus (url) {
  var h = confirm('Anda Yakin Hapus Data');
  if (h == true) {
    window.location = url;
  }
}
</script>

<div align="center">
  <table width="500" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
    <tr> 
      <td colspan="4" bgcolor="#77B6D0" align="center"><b>DAFTAR SEMUA PENYAKIT</b></td>
    </tr>
    <tr> 
      <td width="40" align="center"><b>ID</b></td>
      <td width="400" align="center"><b>Nama Penyakit</b></td>
      <td width="100" align="center"><b>Pilihan</b></td>
    </tr>
    <?php 
	$sql = "SELECT * FROM penyakit ORDER BY kd_penyakit";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	$no++;
  ?>
    <tr bgcolor="#FFFFFF"> 
      <td><?php echo $data['kd_penyakit']; ?></td>
      <td><?php echo $data['nm_penyakit']; ?></td>
      <td align="center"> 
        <a href="?page=edit_p&kdubah=<? echo $data['kd_penyakit']; ?>" ><img src="./images/edit.png" border="0" title="Ubah Penyakit"></a> 
        | <a href="#" onClick="hapus('index.php?page=hapus_p&kdhapus=<? echo $data['kd_penyakit']; ?>');"><img src="./images/hapus.png" border="0" title="Hapus"></a></td>
    </tr>
    <?php
  }
  ?>
    <tr bgcolor="#FFFFFF"> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="center"><a href="?page=tambah_p">Tambah</a></td>
    </tr>
  </table>
</div>
