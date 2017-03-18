<?php 
	require_once "../../layout/form.head.php";
	require_once "../../class/permohonan.php";

	$permohonan = new permohonan($db);
	$select = new componentForm($db);

	$setValue = $permohonan->getPermohonan($_GET['id']);

	if (isset($_POST['Update'])) {
		$id = $_GET['id'];
		$nomor = $_POST['Nomor'];
		$tglPermohonan = $_POST['tglPermohonan'];
		$Bank = $_POST['Bank'];
		$noAgenda = $_POST['noAgenda'];
		$tglDiterima = $_POST['tglDiterima'];
		$dispPertama = $_POST['dispPertama'];
		$tgldisp_1 = $_POST['tgldisp_1'];
		$dispKedua = $_POST['dispKedua'];
		$tgldisp_2 = $_POST['tgldisp_2'];

		$action = $permohonan->UpdatePermohonan($id,$nomor,$tglPermohonan,$noAgenda,$tglDiterima,$dispPertama,$tgldisp_1,$dispKedua,$tgldisp_2,'DIBACA',$Bank,'1',$IDUSER);
		if ($action) {
			$pesan = "<div class='alert alert-success'> BERHASIL </div>";
		}else{
			$pesan = "<div class='alert alert-danger'>GAGAL </div>";
		}
	}


 ?>
 <div class="panel panel-default">
	<div class="panel-heading">Edit Permohonan</div>
	<div class="panel-body">
	<?php echo $pesan; ?>
	<form method="post">
	<?php include 'form.php'; ?>
			<div class="pull-right">
				<button type="submit" name="Update" class="btn btn-xs btn-primary"><i class="fa fa-check"></i> GANTI</button>
				<a href="javascript:void(0)" onclick="tutup()" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
			</div>
	</form>
	</div>
</div>
<?php 
	require_once "../../layout/form.foot.php";
 ?>