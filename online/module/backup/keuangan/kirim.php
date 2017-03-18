<?php 

  require_once "../../layout/form.head.php";

  $id = $_GET['id'];
  $query = "SELECT * FROM CEK_IJP WHERE IDPENJAMINAN = $id";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $data = $stmt->fetch();

	if (isset($_POST['kirim'])) {
	        			$query1 = "UPDATE MSPENJAMINAN SET STATUSPENJAMINAN = '2' WHERE IDPENJAMINAN = :ID";
	        			$stmt1 = $db->prepare($query1);
	        			$stmt1->bindParam(':ID',$_POST['idpenjaminan']);
	        			$action = $stmt1->execute();

	        			if($action){
				              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }

	        		}
 ?>

 						<?php echo $pesan;?>
						<form method="post">
							<input type="hidden" value="<?php echo $data['IDPENJAMINAN'] ?>" name="idpenjaminan">
							<button name="kirim" id="kirim" class="btn btn-warning btn-xs">
								<i class="fa fa-send"></i> 
								PENJAMINAN
							</button>
						</form>
<?php
  require_once "../../layout/form.foot.php";
?>