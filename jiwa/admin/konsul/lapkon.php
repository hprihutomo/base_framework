
<link href="css/tabel.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript">
function hapus (url) {
  var h = confirm('Anda Yakin Hapus Data');
  if (h == true) {
    window.location = url;
  }
}
</script>

<!--Table penampilan data-->
<div id="box"></div>
<div id="tablenya">
<table id="mytable" cellspacing="0">
<caption>Data Laporan Pasien</caption>
<tr>
  <th>No</th>
  <th>Nama</th>
  <th>Kelamin</th>
  <th>Alamat</th>
  <th>Pekerjaan</th>
  <th>Penyakit</th>
  <th>Tanggal</th>
  <th>Aksi</th>
</tr>

<?php
  include "../librari/inc.koneksidb.php";
  $sql = 'SELECT * FROM analisa_hasil ORDER BY id ASC';
  $kueri = mysql_query($sql);
  while ($baris = mysql_fetch_array($kueri)){
    $no++;
    ?><tr>
    <td ><?php echo $no; ?></td>
    <td ><?=$baris['nama']?></td>
    <td ><?=$baris['kelamin']?></td>
    <td ><?=$baris['alamat']?></td>
    <td ><?=$baris['pekerjaan']?></td>
    <td ><?=$baris['kd_penyakit']?></td>
    <td ><?=$baris['tanggal']?></td>
    <td align='right' id="action">
    	<a href="#" onClick="hapus('index.php?page=kon_hapus&kdhapus=<? echo $baris['id']; ?>');"><img src="./images/hapus.png" border="0" title="Hapus"></a></td>
    </tr>
 <?php
   }  
?>

