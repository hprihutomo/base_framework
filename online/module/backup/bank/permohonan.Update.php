<?php

	require_once "../../layout/form.head.php";
	require_once "../../class/permohonan.php";

	$tambah = new permohonan($db);
	$select = new componentForm($db);

	if(isset($_POST['create'])){
		$nomor 			= $_POST['Nomor'];
		$tglPermohonan 	= $_POST['tglPermohonan'];
		$produk 		= $_POST['produk'];
		$jiw 			= $_POST['jiwa'];
		// $noAgenda = $_POST['noAgenda'];
		// $tglDiterima = $_POST['tglDiterima'];
		// $dispPertama = $_POST['dispPertama'];
		// $tgldisp_1 = $_POST['tgldisp_1'];
		// $dispKedua = $_POST['dispKedua'];
		// $tgldisp_2 = $_POST['tgldisp_2'];
		//$Bank = $_POST['Bank'];
		if($PIN == md5($_POST['PIN'])){
			$action = $tambah->online_tambah($nomor,$tglPermohonan,'DRAFT',$IDBANK,$produk,$IDUSER,$jiw);
			if($action){
				$pesan = "<div class='alert alert-success'> BERHASIL </div>";
			}else{
				$pesan = "<div class='alert alert-danger'>GAGAL </div>";
			}
		}else{
				$pesan = "<div class='alert alert-danger'>PIN SALAH </div>";
			}
	}

 ?>
 <div class="panel panel-default">
	<?php echo $pesan; ?>
	<div class="panel-heading">Buat Permohonan </div>
	<div class="panel-body">
		<form method="post">

			<?php include 'form.php'; ?>

		<a href="javascript:void(0)" onclick="tutup()" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
			<div class="pull-right">
				<button type="submit" name="create" class="btn btn-xs btn-success"><i class="fa fa-save"></i> SIMPAN</button>
				<button type="reset" name="reset" class="btn btn-xs btn-primary"><i class="fa fa-refresh"></i> KOSONGKAN</button>
			</div>
		</form>
	</div>
</div>
<?php
	require_once "../../layout/form.foot.php";
 ?>
