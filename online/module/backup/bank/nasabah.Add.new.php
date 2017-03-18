<?php

	require_once "../../layout/form.head.php";
	require_once "../../class/penjaminan.php";

	$set = new Master($db);
	$input = new Penjaminan($db);

	$id 	= $_GET['id'];
	$act    = $_GET['act'];
	$status = $_GET['set'];

	$value = $set->ListGet('DATA_PERMOHONAN','IDPERMOHONAN',$id);

	$idbank = $value['IDBANK'];
	$idproduk = $value['IDPRODUK'];

if (isset($_POST['create'])) {
		$query = "INSERT INTO MSPENJAMINAN (IDPRODUK,IDNASABAH,NOMOR_PK,TGL_PK,PLAFONDKREDIT,MASA,COVERAGE,IJPPERSEN,IJPJIWAPERSEN,IJP,IJPJIWA,JENISKREDIT,PENGHASILAN,PENGGUNAAN)
									VALUES (:idproduk,:idnasabah,:nomorpk,:tglpk,:plafond,:masa,:cov,:p_ijp,:p_ijpjiwa,:ijp,:ijpjiwa,:jnskredit,:penghasilan,:penggunaan)";
		$stmt = $db->prepare($query);
		//$stmt->bindParam(':idpermohonan',$id);
		$stmt->bindParam(':idproduk',$_POST['idproduk']);
		//$stmt->bindParam(':idreass',$_POST['idreass']);
		$stmt->bindParam(':idnasabah',$_POST['idnasabah']);
		$stmt->bindParam(':nomorpk',$_POST['nomorpk']);
		$stmt->bindParam(':tglpk',$_POST['tglpk']);
		//$stmt->bindParam(':kode',$_POST['kode']);
		$stmt->bindParam(':plafond',$_POST['plafond']);
		$stmt->bindParam(':masa',$_POST['masa']);
		$stmt->bindParam(':cov',$_POST['coverage']);
		//$stmt->bindParam(':tarif',$_POST['tarif_p']);
		// $stmt->bindParam(':outkredit',$_POST['outkredit']);
		// $stmt->bindParam(':outpenjaminan',$_POST['outpenjaminan']);
		$stmt->bindParam(':p_ijp',$_POST['p_ijp']);
		$stmt->bindParam(':p_ijpjiwa',$_POST['p_ijpjiwa']);
		//$stmt->bindParam(':p_ijpreas',$_POST['p_ijpreas']);
		$stmt->bindParam(':ijpjiwa',$_POST['ijpjiwa']);
		$stmt->bindParam(':ijp',$_POST['ijp']);
		//$stmt->bindParam(':ijpreas',$_POST['ijpreas']);
		$stmt->bindParam(':jnskredit',$_POST['jnskredit']);
		//$stmt->bindParam(':tenagakerja',$_POST['tenagakerja']);
		$stmt->bindParam(':penghasilan',$_POST['penghasilan']);
		$stmt->bindParam(':penggunaan',$_POST['penggunaan']);
		//$stmt->bindParam(':deskripsi',$_POST['deskripsi']);
		$action = $stmt->execute();
		if($action){
			$pesan = "<div class='alert alert-success'> BERHASIL </div>";
		}else{
			$pesan = "<div class='alert alert-danger'>GAGAL </div>";
		}

}
	

	// $auto_no = autonumber('IDNASABAH','MSNASABAH');



?>
 <div class="panel panel-default">
	<?php echo $pesan; ?>
	<div class="panel-heading"> INPUT NASABAH
		<!-- <label> NOMOR PERMOHONAN : </label> <?php echo $value['NOMORPERMOHONAN'] ?> 
		<label> / TGL PERMOHONAN : </label> <?php echo date_idn($value['TGLPERMOHONAN'],"j F Y"); ?> 
		<label> / PLUS JIWA : </label> <?php if($value['JIWA']=='N'){echo "TIDAK";}elseif($value['JIWA']=='Y'){echo "YA";} ?>
		<label> / STATUS : </label> <?php if($act=='B'){echo "BARU";}elseif($act=='L'){echo "LAMA";} ?>
		<label> / JENIS NASABAH : </label> <?php if($status=='P'){echo "PERUSAHAAN";}elseif($status=='I'){echo "PRIBADI";} ?> -->
	</div>
	<div class="panel-body">
		<form method="post" name="forms">
		<!-- <input type="hidden" id="idNasabah" name="idNasabah" autocomplete="off" value="<?php echo $auto_no; ?>"> -->
			<?php 
				//if ($value['JIWA']=='N') {
					//include 'nasabah.Form.php';
				//}elseif ($value['JIWA']=="Y") {
					include 'nasabah.Form.Jiwa.php';
				//}				 
			?>
		<div class="row">
			<div class="col-lg-12">
			<a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
				<div class="pull-right">
					<button type="submit" name="create" id="create" class="btn btn-sm btn-success"><i class="fa fa-save"></i> SIMPAN</button>
					<button type="reset" name="reset" id="reset" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> KOSONGKAN</button>
				</div>
			</div>
		</div>
		</form>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				 DAFTAR PENJAMINAN
				<!-- PADA NOMOR PERMOHONAN : <?php echo $value['NOMORPERMOHONAN']; ?> / PRODUK : <?php echo $value['NAMAPRODUK']; ?> -->
			</div>
			<div class="panel-body">
				<?php include 'nasabah.list.php'; ?>
			</div>
		</div>
	</div>
	</div>
	
<?php
	require_once "../../layout/form.foot.php";
?>
