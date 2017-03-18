<?php 
	require_once "../../layout/form.head.php";
	// require_once "../../class/permohonan.php";

	// $permohonan = new permohonan($db);

	// $setValue = $permohonan->getPermohonan($_GET['id']);
	//echo $setValue['NOMORPERMOHONAN'];
if (isset($_POST['KIRIM'])) {
	if($PIN == md5($_POST['PIN'])){
		try {
			$query = "UPDATE MSPERMOHONAN SET STATUSPERMOHONAN = 'SELESAI' WHERE IDPERMOHONAN = '".$_GET['id']."'";
			$stmt = $db->prepare($query);
			$action = $stmt->execute();

	        			if($action){
				              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }
			
		} catch (PDOException $e) {
		
		}
	}else{ 
		echo "PIN SALAH";
	}
}
				$query = "SELECT * FROM DATA_PERMOHONAN WHERE IDPERMOHONAN = '".$_GET['id']."'";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();	        	
	            $setValue = $stmt->fetch();

	
 ?>
 
 <div class="panel panel-default">
	<div class="panel-heading">Detail Permohonan <?php //echo $PIN; ?></div>
	<div class="panel-body">
	<?php echo $pesan;?>		
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
				<td><?php echo $setValue['KODE']." ".$setValue['JNSBANK']." ".$setValue['KANTOR'] ?></td>
			</tr>
			<tr>
				<td><label>Nomor Agenda</label></td>
				<td><?php echo $setValue['NOAGENDA']?></td>
			</tr>
			<tr>
				<td><label>Tanggal Diterima</label></td>
				<td><?php echo date_idn($setValue['TGLDITERIMA'],'j F Y')?></td>
			</tr>
			<!-- <tr>
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
			</tr> -->
			<tr>
				<td><label>Penerima</label></td>
				<td><?php echo $setValue['NAMAUSER']?></td>
			</tr>

		</table>
		<div class="pull-right">
			<form method="post">
				 <input type="text" name="PIN">
				 <button name="KIRIM" id="KIRIM" class="btn btn-sm btn-primary"><i class="fa fa-send"></i>  KIRIM</button>
			 </form>
		</div>
</div>
</div>
 <div class="panel panel-default">
	<div class="panel-heading">Detail Nasabah</div>
	<div class="panel-body">
		<?php include 'detail.nasabah.php'; ?>
	</div>
</div>
<?php 
	require_once "../../layout/form.foot.php";
 ?>