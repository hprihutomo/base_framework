<?php 

  require_once "../../layout/form.head.php";

  $id = $_GET['id'];
  $query = "SELECT * FROM CEK_IJP WHERE IDPERMOHONAN = $id";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $data = $stmt->fetch();

				if (isset($_POST['kirim'])) {
	        			$query1 = "UPDATE MSPERMOHONAN SET STATUSPERMOHONAN = 'CEKIJP' WHERE IDPERMOHONAN = :ID";
	        			$stmt1 = $db->prepare($query1);
	        			$stmt1->bindParam(':ID',$_POST['IDPERMOHONAN']);
	        			$action = $stmt1->execute();

	        			if($action){
				              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }

	        		}
 ?>
<div class="panel panel-red">
	<div class="panel-heading">KIRIM KE KEUANGAN</div>
	<div class="panel-body">
 						<?php echo $pesan;?>
 						<h3>Apakah Anda Yakin ?</h3>
						<form method="post">
							<input type="hidden" value="<?php echo $data['IDPERMOHONAN'] ?>" name="IDPERMOHONAN">
							<a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
							<button name="kirim" id="kirim" class="btn btn-warning btn-sm">
								<i class="fa fa-send"></i> 
								KIRIM
							</button>
						</form>
	</div>
</div>
<?php
  require_once "../../layout/form.foot.php";
?>