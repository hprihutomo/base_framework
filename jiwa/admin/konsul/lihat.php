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


//lakukan query select

$ambildata = mysql_query("SELECT * FROM analisa_hasil");
while($data = mysql_fetch_array($ambildata)){
    // $no++;
    ?><tr>
    <td ><?php echo $no; ?></td>
    <td ><?=$data['nama']?></td>
    <td ><?=$data['kelamin']?></td>
    <td ><?=$data['alamat']?></td>
    <td ><?=$data['pekerjaan']?></td>
    <td ><?=$data['kd_penyakit']?></td>
    <td ><?=$data['tanggal']?></td>
    <td align='right' id="action">
    	<a href="#" onClick="hapus('index.php?page=kon_hapus&kdhapus=<? echo $baris['id']; ?>');"><img src="./images/hapus.png" border="0" title="Hapus"></a></td>
    </tr>
 <?php
   }  
?>