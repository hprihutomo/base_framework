<?php

include_once "../../librari/inc.koneksidb.php";

$TxtUser   = $_POST['TxtUser'];
$TxtPasswd = $_POST['TxtPasswd'];

if (trim($TxtUser)=="") {
	echo "<div style='width:180px;margin:550px 0 0 660px;font:0.9em arial;font-weight:bold;border-bottom:2px solid rgba(0,0,0,0.4);'>USER Name BELUM DIISI</div>";
	include "Login.php"; exit;
}

elseif (trim($TxtPasswd)=="") {
	echo "<div style='width:180px;margin:550px 0 0 660px;font:0.9em arial;font-weight:bold;border-bottom:2px solid rgba(0,0,0,0.4);'>Password BELUM DIISI</div>";
	include "Login.php"; exit;
}

$sql_cek = "SELECT * FROM pakar WHERE userID='$TxtUser' and PassID ='$TxtPasswd'";
$qry_cek = mysql_query($sql_cek, $koneksi) 
		   or die ("Gagal Cek".mysql_error());
$ada_cek = mysql_num_rows($qry_cek);
if ($ada_cek ==1) {
	$SES_USER=$TxtUser;
	session_start();
	session_register("SES_USER");
	$_SESSION['user'] = $TxtUser;
	$_SESSION['pass'] = $TxtPasswd;	
	header ("location:../index.php");
	exit;
}

else {
	echo "<div style='width:270px;margin:550px 0 0 620px;font:0.9em arial;font-weight:bold;border-bottom:2px solid rgba(0,0,0,0.4);'>USER DAN PASSWORD TIDAK SESUAI</div>";
	include "Login.php"; 
	exit;
}
?>
 
