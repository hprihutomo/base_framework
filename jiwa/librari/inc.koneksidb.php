<?php
$my['host']	= "localhost";
$my['user']	= "root";
$my['pass']	= "root";
$my['dbs']	= "jiwa";

$koneksi	= mysql_connect($my['host'],
							$my['user'],
							$my['pass']);
if (! $koneksi) {
  echo "Koneksi gagal";
  mysql_error();
}
mysql_select_db($my['dbs'])
	 or die ("Database tidak ada".mysql_error());

?>
