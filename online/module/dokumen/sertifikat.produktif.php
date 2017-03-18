<?php 
	$id = $_GET['id'];
 	$qlist = "SELECT * FROM DATA_SERTIFIKAT WHERE IDPERMOHONAN = $id";
 	$stmt  = $db->prepare($qlist);
 	$stmt->execute();
 	$data = $stmt->fetch();
 ?>
<b>SERTIFIKAT PENJAMINAN</b>
<form method="">
<table class="table table-condensed table-bordered">
	<tr>
		<td>NOMOR SERTIFIKAT</td>
		<td><input type="text" value="<?php echo $data['KODESERTIFIKAT']; ?>"> -  TANGGAL : <input type="text" value="<?php echo $data['TGLSERTIFIKAT']; ?>"></td>
	</tr>
	<tr>
		<td>E-NOTE </td>
		<td><input type="text" value="<?php echo md5($data['KODESERTIFIKAT']); ?>" size="50" name="enote"></td>
	</tr>
	
</table>
<div class="pull-right">
	<button class="btn btn-sm btn-primary"></button>
</div>
</form>