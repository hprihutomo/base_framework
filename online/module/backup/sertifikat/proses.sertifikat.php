<?php 
  require_once "../../layout/form.head.php";
	$query = "SELECT * FROM DATA_PERMOHONAN WHERE IDPERMOHONAN = '".$_GET['id']."'";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();
 ?>

  <div class="panel panel-primary">
  	<div class="panel-heading">PROSES KOMITE DAN SERTIFIKAT <?php echo $data['NAMAPRODUK']; ?></div>
  	<div class="panel-body">
  		<div align="center">
  		<a href="javascript:void(0)" onclick="Popup('../../module/dokumen/komite.produktif.php?id=<?php echo $data['IDPERMOHONAN'] ?>', '', '800','700')" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> KOMITE</a>

  		<a href="javascript:void(0)" onclick="Popup('../../module/sertifikat/create.sertifikat.php?id=<?php echo $data['IDPERMOHONAN'] ?>', '', '800','600')" class="btn btn-sm btn-info"><i class="fa fa-certificate"></i> SERTIFIKAT</a>
		</div>
  		<!-- <a href="javascript:void(0)" onclick="Popup('../../module/dokumen/lampiran.produktif.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','700')" class="btn btn-sm btn-primary">LAMPIRAN</a> -->
  	</div>
  </div>

<?php
require_once "../../layout/form.foot.php";
?>