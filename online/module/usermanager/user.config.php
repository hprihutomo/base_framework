<?php
	require_once "../../layout/form.head.php";

	$id = $_GET['id'];
	$jabatan = $_POST['jabatan'];
	$level = $_POST['level'];
	$bagian = $_POST['bagian'];
	$pin = MD5($_POST['pin']);


	$query = "SELECT * FROM MSUSER WHERE IDUSER = $id";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	if (isset($_POST['set'])) {
		$query = "UPDATE MSUSER SET IDJABATAN = :jabatan, IDLEVEL = :level, IDBAGIAN = :bagian, PINCODE = :pin, STATUS = 'A' WHERE IDUSER = :id";
		$stmt = $db->prepare($query);
		
		$stmt->bindParam(':jabatan',$jabatan);
		$stmt->bindParam(':level',$level);
		$stmt->bindParam(':bagian',$bagian);
		$stmt->bindParam(':pin',$pin);
		$stmt->bindParam(':id',$id);

		$action = $stmt->execute();
		 if($action){
              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
           }else{
              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
           }
	}


?>
	<?php echo $pesan; ?>
		<form method="post">
		<table class='table table-bordered table-condensed'>
			<tr>
				<td>NAMA</td>
				<td><input name="namauser" type="text" value="<?php echo $data['NAMAUSER']?>"></td>
			</tr>
			<tr>
				<td>USERNAME</td>
				<td><input name="username" type="text" value="<?php echo $data['USERNAME']?>"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td><input name="email" type="text" value="<?php echo $data['EMAIL']?>"></td>
			</tr>
			<tr>
				<td>JABATAN</td>
				<td>
					<select name="jabatan" id="jabatan">
					<option value="NULL"></option>
					<?php 
						$query = "SELECT * FROM MSJABATAN";
						$stmt = $db->prepare($query);
						$stmt->execute();

						foreach ($stmt->fetchALL() as $key => $value) {
					 ?>
						<option value="<?php echo $value['IDJABATAN']; ?>" <?php if ($data['IDJABATAN'] == $value['IDJABATAN'] ) { echo 'selected';} ?>><?php echo $value['NAMAJABATAN'] ?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>LEVEL</td>
				<td>
					<select name="level" id="level">
					<option value="NULL"></option>
					<?php 
						$query = "SELECT * FROM MSLEVEL";
						$stmt = $db->prepare($query);
						$stmt->execute();
						foreach ($stmt->fetchALL() as $key => $value) {
					 ?>
					 	
						<option value="<?php echo $value['IDLEVEL']; ?>" <?php if ($data['IDLEVEL'] == $value['IDLEVEL']) { echo 'selected';} ?>><?php echo $value['NAMALEVEL'] ?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>BAGIAN</td>
				<td>
					<select name="bagian" id="bagian">
					<option value="NULL"></option>
					<?php 
						$query = "SELECT * FROM MSBAGIAN";
						$stmt = $db->prepare($query);
						$stmt->execute();
						foreach ($stmt->fetchALL() as $key => $value) {
					 ?>	
						<option value="<?php echo $value['IDBAGIAN']; ?>" <?php if ($data['IDBAGIAN'] == $value['IDBAGIAN']) { echo 'selected';} ?>><?php echo $value['NAMABAGIAN'] ?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>PIN</td>
				<td>
					<input name="pin" id="pin" type="password" value="<?php echo $data['PINCODE']?>" >
				</td>
			</tr>
			<tr>
                 <td colspan="1"></td>
                 <td>
                  	<a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
                 	<button id="set" name="set" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-list"></i> Set Up</button>
                 </td>
             </tr>
		</table>
		</form>
<?php
	require_once "../../layout/form.foot.php";
?>