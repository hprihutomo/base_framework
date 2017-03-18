<?php

	require_once "../../layout/form.head.php";
	require_once "../../class/penjaminan.php";

	//$set = new Master($db);
	//$input = new Penjaminan($db);

	$id 	= $_GET['id'];
	
//	$idnasabah = $_POST['idnasabah'];
	$idproduk = $_POST['produk'];
	$noidentitas = $_POST['noidentitas'];
	$jnsidentitas = $_POST['jnsidentitas'];
	$namadepan = $_POST['namadepan'];
	$namabelakang = $_POST['namabelakang'];
	$jnskelamin = $_POST['jnskelamin'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$alamatnasabah = $_POST['alamatnasabah'];
	$kotanasabah = $_POST['kotanasabah'];
	$telpon = $_POST['telpon'];
	$email = $_POST['email'];
	$pekerjaan = $_POST['pekerjaan'];
	$instansi = $_POST['instansi'];
	$namaperusahaan = $_POST['namaperusahaan'];
	$alamatperusahaan = $_POST['alamatperusahaan'];



if (isset($_POST['create'])) {
	$query = "INSERT INTO MSNASABAH (IDPRODUK,NOIDENTITAS,JNSIDENTITAS,NAMADEPAN,NAMABELAKANG,JNSKELAMIN,TGL_LAHIR,ALAMATNASABAH,KOTANASABAH,TELPON,EMAIL,PEKERJAAN,INSTANSI,NAMAPERUSAHAAN,ALAMATPERUSAHAAN) VALUES ('$idproduk','$noidentitas','$jnsidentitas','$namadepan','$namabelakang','$jnskelamin','$tgl_lahir','$alamatnasabah','$kotanasabah','$telpon','$email','$pekerjaan','$instansi','$namaperusahaan','$alamatperusahaan')";
	$stmt = $db->prepare($query);
	$action = $stmt->execute();
	 if($action){
              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
           }else{
              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
           }
}
?>
 <div class="panel panel-default">
	<?php echo $pesan; ?>
	<div class="panel-heading"> TAMBAH DATA
	</div>
	<div class="panel-body">
		<form method="post">
			<?php include 'form.php'; ?>
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
	</div>
	</div>
	
<?php
	require_once "../../layout/form.foot.php";
?>
