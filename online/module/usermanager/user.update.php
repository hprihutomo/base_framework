<?php
	require_once "../../layout/form.head.php";

	$q = "SELECT * FROM MSUSER WHERE IDUSER = '".$_GET['id']."'";
	$smt = $db->prepare($q);
	$smt->execute();
	$set = $smt->fetch();

	if (isset($_POST['update'])) {
		try {
		$query = "UPDATE MSUSER SET NAMAUSER = :nama, USERNAME = :user, EMAIL = :email, IDBANK = :bank, IDLEVEL = :level, IDBAGIAN = :bagian, IDJABATAN = :jabatan WHERE IDUSER = :id";
		$stmt = $db->prepare($query);
		$stmt->bindParam(':nama',$_POST['nama']);
		$stmt->bindParam(':user',$_POST['username']);
		$stmt->bindParam(':email',$_POST['email']);
		$stmt->bindParam(':bank',$_POST['bank']);
		$stmt->bindParam(':level',$_POST['level']);
		$stmt->bindParam(':bagian',$_POST['bagian']);
		$stmt->bindParam(':jabatan',$_POST['jabatan']);
		$stmt->bindParam(':id',$_GET['id']);
		$action = $stmt->execute();
		if($action){
		              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
		           }else{
		              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
		           }
		} catch (Exception $e) {
					$pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
		}
		
	}

?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<label>UPDATE USER</label>
	</div>
	<div class="panel-body">
		<form method="post">
			<?php 
				$form = 'update';
				include 'user.form.php'; 
			?>
			<a href="javascript:void[0]" class="btn btn-sm btn-danger" onclick="tutup()"> TUTUP</a>
			<div class="pull-right">
				<button class="btn btn-sm btn-primary" name="update" type="submit">
					<i class="fa fa-save"></i> <?php echo strtoupper($form); ?>
				</button>
			</div>
		</form>
	</div>
</div>
<?php
	require_once "../../layout/form.foot.php";
?>