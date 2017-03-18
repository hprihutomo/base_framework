<?php
	// require_once "../../layout/form.head.php";

	// $id = $_GET['id'];
	// $jabatan = $_POST['jabatan'];
	// $level = $_POST['level'];
	// $bagian = $_POST['bagian'];
	// $pin = MD5($_POST['pin']);


	// $query = "SELECT * FROM MSUSER WHERE IDUSER = $id";
	// $stmt = $db->prepare($query);
	// $stmt->execute();
	// $data = $stmt->fetch();

	// if (isset($_POST['set'])) {
	// 	$query = "UPDATE MSUSER SET IDJABATAN = :jabatan, IDLEVEL = :level, IDBAGIAN = :bagian, PINCODE = :pin, STATUS = 'A' WHERE IDUSER = :id";
	// 	$stmt = $db->prepare($query);
		
	// 	$stmt->bindParam(':jabatan',$jabatan);
	// 	$stmt->bindParam(':level',$level);
	// 	$stmt->bindParam(':bagian',$bagian);
	// 	$stmt->bindParam(':pin',$pin);
	// 	$stmt->bindParam(':id',$id);

	// 	$action = $stmt->execute();
	// 	 if($action){
 //              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
 //           }else{
 //              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
 //           }
	// }


?>
	<?php echo $pesan; ?>
		<form method="post">
		<table class='table table-bordered table-condensed'>
			<tr>
				<td>KODE</td>
				<td><input name="kode" type="text" value="<?php echo $data['KODE']?>"></td>
			</tr>
			<tr>
				<td>NAMABANK</td>
				<td><input name="namabank" type="text" value="<?php echo $data['NAMABANK']?>"></td>
			</tr>
			<tr>
				<td>JENISBANK</td>
				<td><input name="jenisbank" type="text" value="<?php echo $data['JENISBANK']?>"></td>
			</tr>
			<tr>
				<td>KANTOR</td>
				<td><input name="kantor" type="text" value="<?php echo $data['KANTOR']?>"></td>
			</tr>
			<tr>
				<td>ALAMATBANK</td>
				<td><input name="alamatbank"  type="text" value="<?php echo $data['ALAMATBANK']?>"></td>
			</tr>
			<tr>
				<td>KOTA</td>
				<td><input name="kota" type="text" value="<?php echo $data['KOTA']?>"></td>
			</tr>
			<tr>
				<td>COV.PRODUKTIF</td>
				<td><input name="cov.produktif" type="text" value="<?php echo $data['COV.PRODUKTIF']?>"></td>
			</tr>
			<tr>
				<td>COV.MULTIGUNA</td>
				<td><input name="cov.multiguna" type="text"  value="<?php echo $data['COV.MULTIGUNA']?>"></td>
			</tr>
			<tr>
				<td>COV.KONTRUKSI</td>
				<td><input name="cov.kontruksi" type="text" value="<?php echo $data['COV.KONTRUKSI']?>"></td>
			</tr>
			<tr>
				<td>TBL.PRODUKTIF</td>
				<td><input name="tbl.produktif" type="text" value="<?php echo $data['TBL.PRODUKTIF']?>"></td>
			</tr>
			<tr>
				<td>TBL.MULTIGUNA</td>
				<td><input name="tbl.multiguna" type="text" value="<?php echo $data['TBL.MULTIGUNA']?>"></td>
			</tr>
			<tr>
				<td>TBL.KONSTURKSI</td>
				<td><input name="tbl.kontruksi" type="text" value="<?php echo $data['TBL.KONSTURKSI']?>"></td>
			</tr>
			<tr>
                 <td colspan="1"></td>
                 <td>
                 	<button id="set" name="set" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-list"></i> Set Up</button>
                 </td>
             </tr>
		</table>
		</form>
<?php
	//require_once "../../layout/form.foot.php";
?>