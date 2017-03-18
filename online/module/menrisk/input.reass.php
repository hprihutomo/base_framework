<?php
	require_once "../../layout/form.head.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPENJAMINAN = $id";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	if (isset($_POST['create'])) {
		$query2 = "UPDATE MSPENJAMINAN SET IDREASS = :idreass, IJPREASPERSEN = :p_ijpreass, IJPREAS = :ijpreass WHERE IDPENJAMINAN = $id";
			$stmt2 = $db->prepare($query2);
			$stmt2->bindParam('idreass',$_POST['idreass']);
			$stmt2->bindParam(':p_ijpreass',$_POST['p_ijpreass']);
			$stmt2->bindParam(':ijpreass',$_POST['ijpreass']);
	//$stmt2->bindParam(':id',$_GET['id']);
			$action = $stmt2->execute();

		 if($action){
	              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
	           }else{
	              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
	           }
	}
	

?>
<form method="post" name="forms">
	<div class="panel panel-primary">
		<div class="panel-heading">INPUT RE-ASS</div>
		<?php echo $pesan; ?>
		<div class="panel-body">
			<div class="col-lg-12">
				<table class="table table-bordered table-condensed">
					<tr>
						<td>PLAFOND</td>
						<td>:</td>
						<td><input type="text" value="<?php echo $data['PLAFONDKREDIT']; ?>" id="pla"> </td>
					</tr>
					<tr>
						<td>MASA</td>
						<td>:</td>
						<td><input type="text" value="<?php echo $data['MASA']; ?>" size="1" id="masa"> Bulan</td>
					</tr>
					<tr>
						<td width="200">NAMA PERUSAHAAN</td>
						<td>:</td>
						<td>
							<input type="hidden" id="idr" name="idreass">
							<input type="text" onclick="Popup('reass.php', '', '800','400')" id="namareass" placeholder="Klik Disini Memilih Perusahaan" size="30" value="<?php echo $data['NAMAREASS']; ?>">
							
							<input type="hidden" id="produktif">
							<input type="hidden" id="konstruksi">
							<input type="hidden" id="multiguna">
							Tekan <b><i>TAB</i></b> Untuk Mendapatkan Nilai Reass
						</td>
					</tr>
					<tr>
						<td>IJP REASS %</td>
						<td>:</td>
						<td><input type="text" id="p_ijpreass" name="p_ijpreass" value="<?php echo round($data['IJPREASPERSEN'],3) ?>"></td>
					</tr>
					<tr>
						<td>IJP REASS</td>
						<td>:</td>
						<td><input type="text" id="ijpreass" name="ijpreass" value="<?php echo $data['IJPREAS'] ?>"></td>
					</tr>
					<tr>
						<td colspan="3">
							<a href="javascript:void(0)" onclick="window.close()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
							<div class="pull-right">
								<button type="submit" name="create" id="create" class="btn btn-sm btn-success"><i class="fa fa-save"></i> SIMPAN</button>
								<button type="reset" name="reset" id="reset" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> KOSONGKAN</button>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</form>
 <?php
	require_once "../../layout/form.foot.php";
 ?>