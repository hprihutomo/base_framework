<?php 

  require_once "../../layout/form.head.php";
  $id = $_GET['id'];
  if (isset($_POST['tidak'])) {
  		$query = "UPDATE MSPERMOHONAN SET DIRUT = '2' WHERE IDPERMOHONAN = $id";
  		$stmt = $db->prepare($query);
  		$stmt->execute();
  }
  if (isset($_POST['lanjut'])) {
  		$query = "UPDATE MSPERMOHONAN SET DIRUT = '1' WHERE IDPERMOHONAN = $id";
  		$stmt = $db->prepare($query);
  		$stmt->execute();
  }
  
 ?>
<div class="panel panel-primary">
	<div class="panel-heading">DIREKTUR UTAMA</div>
	<div class="panel-body">
		<?php echo $pesan;?>
 						
						<form method="post">
							<input type="hidden" value="<?php echo $data['IDPERMOHONAN'] ?>" name="IDPERMOHONAN">
							<div align="center">
							<h3>Apakah Dilanjutkan ?</h3>
								<button name="tidak" id="tidak" class="btn btn-warning btn-sm">
									<i class="fa fa-ban"></i> 
									TIDAK
								</button>
								<button name="lanjut" id="lanjut" class="btn btn-success btn-sm">
									<i class="fa fa-send"></i>  
									LANJUT
								</button>
							</div>
							<br>
							<br>
							<a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
						</form>
	</div>
</div>
<?php
  require_once "../../layout/form.foot.php";
?>