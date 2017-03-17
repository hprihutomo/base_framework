<?php
include "librari/inc.koneksidb.php";
$kata=$_POST['kata'];
if(isset($_POST['Search'])){
$query=mysql_query("select * from penyakit where nm_penyakit like '%$kata%' ");
$jumlah=mysql_num_rows($query);
if($jumlah>0){
echo "ditemukan data dengan keyword $kata sejumlah $jumlah data<br>";
while($row=mysql_fetch_array($query)){
    
 echo "<a href=?page=viw&id=$row[kd_penyakit]>$row[nm_penyakit]<br></a>";
}
}
else{
echo "tidak ditemukan berita dengan kata $kata";
}
}
?>