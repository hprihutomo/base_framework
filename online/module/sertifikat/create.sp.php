<?php 

  require_once "../../layout/form.head.php";
  	$id = $_GET['id'];

  	$query = "SELECT * FROM DATA_PERMOHONAN WHERE IDPERMOHONAN = $id";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$value = $stmt->fetch();

	$qkota = "SELECT * FROM MSKOTA";
	$skota = $db->prepare($qkota);
	$skota->execute();
	$vkota = $skota->fetch();

	$kodesertifikat = $_POST['kode']." ".$_POST['nomor']." ".$_POST['kota']." ".$_POST['bln']." ".$_POST['thn']." ".$_POST['jiwa'];
	
	if ($_POST['ttdkanan'] == 'AGUS SHOHIR') {
		$jabkanan = 'DIREKTUR UTAMA';
	}elseif ($_POST['ttdkanan'] == 'AGUS WAHYUDIN') {
		$jabkanan = 'DIREKTUR OPERASIONAL';
	}elseif ($_POST['ttdkanan'] == 'ABDUL KADIR') {
		$jabkanan = 'DIREKTUR UMUM';
	}

	if ($_POST['ttdkiri'] == 'AGUS SHOHIR') {
		$jabkiri = 'DIREKTUR UTAMA';
	}elseif ($_POST['ttdkiri'] == 'AGUS WAHYUDIN') {
		$jabkiri = 'DIREKTUR OPERASIONAL';
	}elseif ($_POST['ttdkiri'] == 'ABDUL KADIR') {
		$jabkiri = 'DIREKTUR UMUM';
	}


	if (isset($_POST['create'])) {
		$query = "INSERT INTO MSSERTIFIKAT (IDPRODUK,IDPERMOHONAN,IDBANK,STATREASS,KODESERTIFIKAT,TGLSERTIFIKAT,NOMOR,DIREKSIKANAN,JABATANKANAN,DIREKSIKIRI,JABATANKIRI,NAMAUSER)
					VALUES (:idproduk,:idpermohonan,:idbank,:statreass,:kodesertifikat,:tglsertifikat,:nomor,:dirkanan,:jabkanan,:dirkiri,:jabkiri,:user)";
		$stmt = $db->prepare($query);
		$stmt->bindParam(':idproduk',$value['IDPRODUK']);
		$stmt->bindParam(':idpermohonan',$value['IDPERMOHONAN']);
		$stmt->bindParam(':idbank',$value['IDBANK']);
		$stmt->bindParam(':statreass',$value['JIWA']);
		$stmt->bindParam(':kodesertifikat',$kodesertifikat);
		$stmt->bindParam(':tglsertifikat',$_POST['tgl_terbit']);
		$stmt->bindParam(':nomor',$_POST['nomor']);
		$stmt->bindParam(':dirkanan',$_POST['ttdkanan']);
		$stmt->bindParam(':jabkanan',$jabkanan);
		$stmt->bindParam(':dirkiri',$_POST['ttdkiri']);
		$stmt->bindParam(':jabkiri',$jabkiri);
		$stmt->bindParam(':user',$NAMA);
		$action = $stmt->execute();
					if($action){
				              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }
	}

 ?>
<div class="panel panel-primary">
	<div class="panel-heading">PEMBUATAN SP</div>
	<div class="panel-body">
	<?php echo $pesan;?>
	<form method="post">
		<table class="table table-condensed table-bordered">
			<thead>
				<th align="center">NOMOR PERMOHONAN</th>
				<th align="center">TGL PERMOHONAN</th>
				<th align="center">PRODUK</th>
			</thead>
			<tr>
				<td><?php echo $value['NOMORPERMOHONAN'] ?></td>
				<td><?php echo date_idn($value['TGLPERMOHONAN'],"d F Y") ?></td>
				<td><?php echo $value['NAMAPRODUK']." - ".$value['JIWA'] ?></td>
			</tr>
		</table>
		<table class="table table-condensed table-bordered">
			<tr>
				<td width="200">NOMOR SERTIFIKAT</td>
				<td>
					<input type="text" size="5" name="kode" value="">
					<input type="text" size="5" name="nomor" value="">
					<input type="text" size="5" name="kota" value="<?php if($vkota['NAMAKOTA']==$value['KOTA']){ echo $vkota['KODEKOTA'];} ?>">
					<input type="text" size="5" name="bln" value="<?php echo date_idn($value['TGLAGENDA'],"m"); ?>">
					<input type="text" size="5" name="thn" value="<?php echo date_idn($value['TGLAGENDA'],"Y"); ?>">
					<input type="text" size="5" name="jiwa" value="<?php if($value['JIWA']== 'Y'){ echo "JW"; } ?>">
				</td>
			</tr>
			<tr>
				<td>TGL TERBIT</td>
				<td>
					<input type="date" name="tgl_terbit">
				</td>
			</tr>
			<!-- <tr>
				<td>E-NOTE</td>
				<td>
					<input type="text" size="15" value="<?php echo mt_rand(276447232,1215752191) ?>">
				</td>
			</tr> -->
		</table>
		<table class="table table-condensed table-bordered">
		<tr>
				<td align="center">TTD KIRI</td>
				<td align="center">TTD KANAN</td>
			</tr>
			<tr>
				<td align="center">
					<select name="ttdkiri" id="">
						<option value="AGUS SHOHIR">AGUS SHOHIR</option>
						<option value="AGUS WAHYUDIN" selected>AGUS WAHYUDIN</option>
						<option value="ABDUL KADIR">ABDUL KADIR</option>
					</select>
				</td>
				<td align="center">
					<select name="ttdkanan" id="">
						<option value="AGUS SHOHIR" selected>AGUS SHOHIR</option>
						<option value="AGUS WAHYUDIN">AGUS WAHYUDIN</option>
						<option value="ABDUL KADIR">ABDUL KADIR</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="pull-right">
						<button class="btn btn-sm btn-success" type="submit" name="create"><i class="fa fa-plus"></i> BUAT SP</button>
					</div>
				</td>
			</tr>
			</table>
			</form>

			
	</div>
</div>
<div class="panel panel-red">
	<div class="panel-heading">LIST SP</div>
	<div class="panel-body">
			<?php 
				include 'list.sp.php';
			 ?>
	</div>
</div>
<?php
require_once "../../layout/form.foot.php";
?>