<?php

	require_once "../../layout/form.head.php";
	require_once "../../class/permohonan.php";

	$permohonan = new permohonan($db);
	$hapus = new Master($db);

	$data = $permohonan->getPermohonan($_GET['id']);

	if (isset($_POST['ya'])) {
		$action = $hapus->getDelete('MSPERMOHONAN','IDPERMOHONAN',$_GET['id']);
		if($action){
			$pesan = "<div class='alert alert-success'> BERHASIL </div>";
		}else{
			$pesan = "<div class='alert alert-danger'> GAGAL </div>";
		}
	}
?>
<div class="panel panel-danger">
	<div class="panel-heading text-center"><label><i class="fa fa-warning"></i> Konfirmasi</label></div>
		<div class="panel-body">
			<form method="post" >
				<?php echo $pesan; ?>
				<div class="form-group text-center">
					<label>Ingin Menghapus Data</label>
				</div>
				<div class="form-group text-center">
					<?php echo $data['NOMORPERMOHONAN']; ?>
				</div>
				
				<div class="form-group text-center">
					<button class="btn btn-sm btn-success" type="submit" name="ya" id="ya"><i class="fa fa-check"></i> YA</button>
					<button class="btn btn-sm btn-danger" onclick="window.close()"><i class="fa fa-ban"></i> BATAL</button>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-sm btn-primary" onclick="tutup()"><i class="fa fa-close"></i> TUTUP</button>
				</div>
			</form>
		</div>
</div>
<?php
	require_once "../../layout/form.foot.php";
 ?>