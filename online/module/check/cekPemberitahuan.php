<?php 
	require_once "../../layout/form.head.php";
	require_once "../../class/permohonan.php";

	$permohonan = new Permohonan($db);

	$data = $permohonan->getPermohonan($_GET['id']);

	echo $data['NOMORPERMOHONAN'];

	$query = "UPDATE MSPERMOHONAN SET STATUSPERMOHONAN = 'SELESAI' WHERE IDPERMOHONAN = '".$_GET['id']."'";
	$stmt = $db->prepare($query);
	$stmt->execute();


 ?>
 
 <button class="btn btn-sm btn-primary" onclick="tutup()">TUTUP</button>
 <?php 
	require_once "../../layout/form.foot.php";
 ?>