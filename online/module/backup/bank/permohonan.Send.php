<?php 
	require_once "../../layout/form.head.php";
	require_once "../../class/permohonan.php";

	$permohonan = new permohonan($db);

	$setValue = $permohonan->getPermohonan($_GET['id']);
	//echo $setValue['NOMORPERMOHONAN'];
if (isset($_POST['KIRIM'])) {
	if($PIN == md5($_POST['PIN'])){
		try {
			$query = "UPDATE MSPERMOHONAN SET STATUSPERMOHONAN = 'KIRIM' WHERE IDPERMOHONAN = '".$_GET['id']."'";
			$stmt = $db->prepare($query);
			$stmt->execute();
			$pesan = "<div class='alert alert-success'> BERHASIL </div>";
		} catch (PDOException $e) {
			$pesan = "<div class='alert alert-danger'>GAGAL </div>";
		}
	}else{ 
		$pesan = "<div class='alert alert-danger'>GAGAL </div>";
	}
}
	
	

	
 ?>
 
 <div class="panel panel-default">
	<div class="panel-heading">Detail Permohonan </div>
	<div class="panel-body">
	<?php echo $pesan; ?>

	<div class="row">
		<div class="col-lg-12">		
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
					<td><label>Cover Note</label></td>
					<td><?php echo $PIN; ?></td>
				</tr>
				
				<tr >
					<td colspan="2">
					<a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
						<div class="pull-right">
							<form method="post" class="form-inline">
								 <input type="text" name="PIN" placeholder="PIN" autocomplete="off" class="form-control input-sm" autofocus >
								 <button name="KIRIM" id="KIRIM" class="btn btn-sm btn-primary"><i class="fa fa-send"></i> KIRIM</button>
							 </form>
						 </div>
					</td>
				</tr>
				<!-- <tr>
					<td><label>Bank</label></td>
					<td><?php echo $setValue['IDBANK']?></td>
				</tr> -->
				<!-- <tr>
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
				</tr> -->

			</table>
				
			</div>
	</div>
		
<div class="row">
<div class="col-lg-12">

		<?php include 'nasabah.List.php'; ?>

	</div>	
	</div> 
</div>
</div>

<?php 
	require_once "../../layout/form.foot.php";
 ?>