<?php
include "librari/inc.koneksidb.php";
$id=$_GET['id'];
$query=mysql_query("select * from penyakit where kd_penyakit='$id'");
$a=mysql_fetch_array($query);
echo "<b>$a[nm_penyakit] </b><br> $a[penyebab]<br> $a[keterangan]";
echo "<br>[<a href=javascript:history.go(-1)>Kembali</a> ]";
?>