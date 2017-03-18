<?php
	require_once "../../layout/form.head.php";

	$q = "SELECT * FROM MSUSER WHERE IDUSER = '".$_GET['id']."'";
	$smt = $db->prepare($q);
	$smt->execute();
	$set = $smt->fetch();

	if (isset($_POST['reset'])) {
		if($PIN==md5($_POST['pincode'])){
			$pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
			$p = md5($_POST['pin']);
			try {
			$query = "UPDATE MSUSER SET NAMAUSER = :nama, USERNAME = :user, PASSWORD = :pass, PINCODE = :pin WHERE IDUSER = :id";
			$stmt = $db->prepare($query);
			$stmt->bindParam(':nama',$_POST['nama']);
			$stmt->bindParam(':user',$_POST['user']);
			$stmt->bindParam(':pass',$pass);
			$stmt->bindParam(':pin',$p);
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
		}else{
			$pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>PIN SALAH</div>";
		}
	}

?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<label>UPDATE USER <?php echo $PIN ?></label>
	</div>
	<div class="panel-body">
		<form method="post">
		<?php echo $pesan; ?>
			<table class="table table-bordered table-condensed">
				<tr>
					<td>NAMA PENGGUNA</td>
					<td>
						<input type="text" name="nama" value="<?php echo $set['NAMAUSER']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>USERNAME</td>
					<td>
						<input type="text" name="user" value="<?php echo $set['USERNAME']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td>
						<input type="password" name="pass" value="JkR123456" required> / default : JkR123456
					</td>
				</tr>
				<tr>
					<td> PIN USER</td>
					<td>
						<input type="password" name="pin" value="123456" required> / default
					</td>
				</tr>
			</table>
			<a href="javascript:void[0]" class="btn btn-sm btn-danger" onclick="tutup()"> TUTUP</a>
			<div class="pull-right">
				PIN <input type="password" name="pincode">
				<button class="btn btn-sm btn-primary" name="reset" type="submit">
					<i class="fa fa-refresh"></i> RESET
				</button>
			</div>
		</form>
	</div>
</div>
<?php
	require_once "../../layout/form.foot.php";
?>