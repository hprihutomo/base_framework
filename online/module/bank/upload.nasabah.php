<?php 
	require_once "../../layout/form.head.php";
	$id = $_GET['id'];

if (isset($_POST['upload'])) {
	if($PIN == md5($_POST['PIN'])){
		

	  	$imgFile = $_FILES['file']['name'];
	  	$tmp_dir = $_FILES['file']['tmp_name'];
	  	$imgSize = $_FILES['file']['size'];

		
	
		if(empty($imgFile)){
		   $pesan = "<div class='alert alert-danger'>Please Select Image File.</div>";
		  }
		  else
		  {  	

		   $upload_dir = '../../file.upload/'; // upload directory
		   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extension
		   $userpic = rand(1000,1000000).".".$imgExt;// rename uploading image
		   // allow valid image file formats
		   if(in_array($imgExt, $valid_extensions)){   
		    // Check file size '5MB'
		    if($imgSize < 5000000)    {
		     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
		    }
		    else{
		     $pesan = "<div class='alert alert-danger'>Sorry, your file is too large.</div>";
		    }
		   }
		   else{
		    $pesan = "<div class='alert alert-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";  
		   }

		   $query = "UPDATE MSPENJAMINAN SET SLIP = :slip WHERE IDPENJAMINAN = :id";
			$stmt = $db->prepare($query);
			$stmt->bindParam(':slip',$userpic);
			$stmt->bindParam(':id',$id);
			$action = $stmt->execute();

				if($action){
					$pesan = "<div class='alert alert-success'>UPLOAD BERHASIL </div>";
				}else{
					$pesan = "<div class='alert alert-danger'>UPLOAD GAGAL </div>";
				}
			}
		}else{
				$pesan = "<div class='alert alert-danger'>PIN SALAH </div>";
			}
		}


 ?>
	<div class="panel panel-primary">
		<div class="panel-heading">UPLOAD OUTSTANDING</div>
		<div class="panel-body">
		<?php echo $pesan; ?>
		<div class="panel panel-info">
			<div class="panel-body">
				<form action="" method="post" class="form-inline" enctype="multipart/form-data">
				<input type="file" class="" name="file">
				<br>
				<div class="pull-left">
					<input type="text" placeholder="PIN"  name="PIN" class="form-control input-sm ">
				</div>
				
				<div class="pull-right">
					<button class="btn btn-sm btn-danger" onclick=" window.close();"><i class="fa fa-remove"></i> TUTUP</button>
					<button class="btn btn-sm btn-info " type="submit" name="upload"><i class="fa fa-upload"></i> UPLOAD</button>
				</div>
			</form>
			</div>
		</div>
			
			<br>
			<p>
				<li>Upload Gambar (Ukuran Maks = 1 MB)</li>
				<li>Format Slip Setor / Transaksi dalam bentuk <b>.pdf</b>,<b> .jpg</b></li>
				<!-- dapat di download <a href="">sini</a> -->
			</p>
		</div>
	</div>
 <?php
	require_once "../../layout/form.foot.php";
 ?>