<?php 
include "librari/inc.koneksidb.php";

$NOIP = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT analisa_hasil.*, penyakit.* 
    FROM analisa_hasil,penyakit 
    WHERE penyakit.kd_penyakit=analisa_hasil.kd_penyakit
    AND analisa_hasil.noip='$NOIP'
    ORDER BY analisa_hasil.id DESC LIMIT 1";
$qry = mysql_query($sql, $koneksi) 
	   or die ("Query Hasil salam".mysql_error());
$data= mysql_fetch_array($qry);
if ($data['kelamin']=="P") {
	$kelamin = "Pria";
}
else {
	$kelamin = "Wanita";
}
?>
<html>
<head>
<title>Hasil Analisa Pasien</title>
</head>
<body>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
  <tr align="center"> 
    <td colspan="2" bgcolor="#22B5DD"><b>HASIL ANALISA</b></td>
  </tr>
  <tr> 
    <td colspan="2"><b>DATA PASIEN :</b></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="86">Nama</td>
    <td width="689"><? echo $data['nama']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>Kelamin</td>
    <td><? echo $kelamin; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>Alamat</td>
    <td><? echo $data['alamat']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>Pekerjaan</td>
    <td><? echo $data['pekerjaan']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"><b>HASIL ANALISA TERAKHIR :</b></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>Penyakit</td>
    <td><? echo $data['nm_penyakit']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="top">Penyebab</td>
    <td><? echo $data['penyebab']; ?></td>
  </tr>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td valign="top">Gejala</td>
    <td>
      <? 
    $sql_gejala = "SELECT gejala.* FROM gejala,relasi
            WHERE gejala.kd_gejala=relasi.kd_gejala
            AND relasi.kd_penyakit='$data[kd_penyakit]'";
    $qry_gejala = mysql_query($sql_gejala, $koneksi);
    while ($hsl_gejala=mysql_fetch_array($qry_gejala)) {
    $i++;
      echo "$i . $hsl_gejala[nm_gejala] <br>";
    }
    ?>
    </td>
  </tr>
  <!-- <tr bgcolor="#FFFFFF"> 
    <td valign="top">Penyebab</td>
    <td><? echo $data['keterangan']; ?></td>
  </tr> -->
  <tr bgcolor="#FFFFFF"> 
    <td valign="top">Solusi</td>
    <td><? echo $data['solusi']; ?></td>
  </tr>
  <tr>
    <td>
      <script>
        function disp_confirm(){
          var r=confirm("Apakah Anda Akan Mengulangi Konsultasi...!!!")
          if (r==true){
            window.location = "index.php?page=back"
          }
        }      
      </script>
      <input type="button" onclick="disp_confirm()" value="kembali">

      <script>
        function keluar(){
          var k=confirm("Apakah Anda Akan Logout...!!!")
          if (k==true){
            window.location = "index.php?page=daftar"
          }
        }      
      </script>
      <input type="button" onclick="keluar()" value="Logout">

    </td>
  </tr>
</table>
</body>
</html>
