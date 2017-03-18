
<table class="table table-condensed table-bordered">
	<thead>
		<th align="center">NOMOR</th>
		<th align="center">E-NOTE</th>
		<th align="center">AKSI</th>
		<!-- <td align="center">LIST</td> -->
	</thead>
<?php 
 	$qlist = "SELECT * FROM DATA_SERTIFIKAT WHERE IDPERMOHONAN = $id";
 	$stmt  = $db->prepare($qlist);
 	$stmt->execute();
 	foreach ($stmt->fetchALL() as $key => $value) {
 ?>
	<tr>
		<td><?php echo $value['KODESERTIFIKAT']; ?></td>
		<td><?php echo md5($value['KODESERTIFIKAT']); ?></td>
		<td align="center"><a href="" onclick="Popup('list.penjaminan.php?id=<?php echo $value['IDPERMOHONAN']; ?>&sp=<?php echo $value['IDSERTIFIKAT']; ?>','', '800','600')" title="" class="btn btn-xs btn-primary"><i class="fa fa-users"></i> NASABAH</a></td>
		<!-- <td ><?php echo $value['IDSERTIFIKAT']; ?></td> -->
	</tr>
	<?php } ?>
</table>
<?php 
	if (isset($_POST['proses'])) {
		$query = "UPDATE MSPERMOHONAN SET STATUSPERMOHONAN = 'VALIDASI' WHERE IDPERMOHONAN = $id";
		$stmt  = $db->prepare($query);
 		$stmt->execute();
 		$act = $stmt->execute();
					if($act){
				              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }
	}
 ?>
<form method="post">
	<button name="proses" class="btn btn-sm btn-danger" type="submit"><i class="fa fa-check"></i> SELESAI</button>
</form>