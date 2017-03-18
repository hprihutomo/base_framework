<?php

	require_once "../../layout/form.head.php";
	require_once "../../class/penjaminan.php";

	$id 	= $_GET['id'];

	$query = "SELECT * FROM MSBANK WHERE IDBANK = $id";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	$kode = $_POST['kode'];
	$namabank = $_POST['namabank'];
	$jnsbank = $_POST['jnsbank'];
	$kantor = $_POST['kantor'];
	$alamat = $_POST['alamatbank'];
	$kota = $_POST['kota'];
	$cov_produktif = $_POST['cov_produktif'];
	$cov_multiguna = $_POST['cov_multiguna'];
	$cov_konstruksi = $_POST['cov_konstruksi'];


	if (isset($_POST['update'])) {
	$query = "UPDATE MSBANK SET KODE = '$kode', NAMABANK = '$namabank', JNSBANK = '$jnsbank', KANTOR = '$kantor', ALAMATBANK = '$alamat',KOTA = '$kota', COV_PRODUKTIF = '$cov_produktif', COV_MULTIGUNA = '$cov_multiguna', COV_KONSTRUKSI ='$cov_konstruksi' WHERE IDBANK = '$id'";
	$stmt = $db->prepare($query);
	$action = $stmt->execute();
	 if($action){
              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
           }else{
              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
           }
}


?>
 <div class="panel panel-default">
	<?php echo $pesan; ?>
	<div class="panel-heading"> UPDATE DATA
	</div>
	<div class="panel-body">
		<form method="post">
			<?php include 'form.bank.php'; ?>
		<div class="row">
			<div class="col-lg-12">
			<a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
				<div class="pull-right">
					<button type="submit" name="update" id="update" class="btn btn-sm btn-success"><i class="fa fa-save"></i> SIMPAN</button>
					<button type="reset" name="reset" id="reset" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> KOSONGKAN</button>
				</div>
			</div>
		</div>
		</form>	
	</div>
	</div>
	
<?php
	require_once "../../layout/form.foot.php";
?>
