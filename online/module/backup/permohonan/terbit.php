<?php 
	require_once "../../layout/form.head.php";
	require_once "../../class/permohonan.php";

	$permohonan = new permohonan($db);

	$setValue = $permohonan->getPermohonan($_GET['id']);
	echo $setValue['NOMORPERMOHONAN'];
if (isset($_POST['KIRIM'])) {
	if($PIN == md5($_POST['PIN'])){
		try {
			$query = "UPDATE MSPERMOHONAN SET STATUSPERMOHONAN = 'TERBIT' WHERE IDPERMOHONAN = '".$_GET['id']."'";
			$stmt = $db->prepare($query);
			$stmt->execute();

		} catch (PDOException $e) {
		
		}
	}else{ 
		echo "PIN SALAH";
	}
}
	
	

	
 ?>
 <form method="post">
	 <input type="text" name="PIN">
	 <button name="KIRIM" id="KIRIM" class="btn btn-sm btn-primary">KIRIM</button>
 </form>
 <div class="panel panel-default">
	<div class="panel-heading">Detail Permohonan <?php echo $PIN; ?></div>
	<div class="panel-body">		
		<table class="table table-condensed table-bordered">
			<tr>
				<td width="150"><label>Nomor</label></td>
				<td><?php echo $setValue['NOMORPERMOHONAN']?></td>
			</tr>
			<tr>
				<td><label>Tanggal Permohonan</label></td>
				<td><?php echo date_idn($setValue['TGLPERMOHONAN'],'j F Y' )?></td>
			</tr>
			<tr>
				<td><label>Bank</label></td>
				<td><?php echo $setValue['IDBANK']?></td>
			</tr>
			<tr>
				<td><label>Nomor Agenda</label></td>
				<td><?php echo $setValue['NOMORAGENDA']?></td>
			</tr>
			<tr>
				<td><label>Tanggal Diterima</label></td>
				<td><?php echo date_idn($setValue['TGLDITERIMA'],'j F Y')?></td>
			</tr>
			<tr>
				<td><label>Disposisi Pertama</label></td>
				<td><?php echo $setValue['DISPOSISIPERTAMA']?></td>
			</tr>
			<tr>
				<td><label>Tanggal Pertama</label></td>
				<td><?php echo date_idn($setValue['TGLPERTAMA'],'j F Y')?></td>
			</tr>
			<tr>
				<td><label>Disposisi Kedua</label></td>
				<td><?php echo $setValue['DISPOSISIKEDUA']?></td>
			</tr>
			<tr>
				<td><label>Tanggal Kedua</label></td>
				<td><?php echo date_idn($setValue['TGLKEDUA'],'j F Y')?></td>
			</tr>
			<tr>
				<td><label>Penerima</label></td>
				<td><?php echo $setValue['NAMAUSER']?></td>
			</tr>

		</table>
</div>
</div>
<?php 
	require_once "../../layout/form.foot.php";
 ?>