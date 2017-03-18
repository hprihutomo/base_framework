<?php
	require_once "../../layout/form.head.php";

	if (isset($_POST['input'])) {
		$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$pin = md5($_POST['pin']);

		try {
			$query = "INSERT INTO MSUSER (NAMAUSER,EMAIL,USERNAME,PASSWORD,PINCODE,IDBANK,IDJABATAN,IDBAGIAN,IDLEVEL)
						VALUES (:nama,:email,:user,:pass,:pin,:idbank,:idjabatan,:idbagian,:idlevel)";
			$stmt = $db->prepare($query);
			$stmt->bindParam(':nama',$_POST['nama']);
			$stmt->bindParam(':email',$_POST['email']);
			$stmt->bindParam(':user',$_POST['username']);
			$stmt->bindParam(':pass',$pass);
			$stmt->bindParam(':pin',$pin);
			$stmt->bindParam(':idbank',$_POST['bank']);
			$stmt->bindParam(':idjabatan',$_POST['jabatan']);
			$stmt->bindParam(':idbagian',$_POST['bagian']);
			$stmt->bindParam(':idlevel',$_POST['level']);
			//$stmt->bindParam(':status',);
			$action = $stmt->execute();

			if($action){
		              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
		           }else{
		              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
		           }

		} catch (PDOException $e) {

						$pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
		}
	}
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<label>CREATE USER</label>
	</div>
	<div class="panel-body">
		<form method="post">
			<?php 
				$form = 'input';
				include 'user.form.php'; 
			?>
			<a href="javascript:void[0]" class="btn btn-sm btn-danger" onclick="tutup()"> TUTUP</a>
			<div class="pull-right">
				<button class="btn btn-sm btn-primary" type="submit" name="input">
					<i class="fa fa-save"></i> <?php echo strtoupper($form); ?>
				</button>
				<button class="btn btn-sm btn-warning" type="reset"><i class="fa fa-refresh"></i>RESET</button>
			</div>
		</form>
	</div>
</div>
<?php
	require_once "../../layout/form.foot.php";
?>