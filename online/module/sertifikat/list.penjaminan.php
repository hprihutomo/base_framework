<?php

	require_once "../../layout/form.head.php";
	$id = $_GET['id'];
	$sp = $_GET['sp'];

	$qlist = "SELECT * FROM DATA_SERTIFIKAT WHERE IDSERTIFIKAT = $sp";
 	$stmt  = $db->prepare($qlist);
 	$stmt->execute();
 	$data = $stmt->fetch();
?>
	<!-- <a href="javascript:void(0)" onclick="Popup('module/on_permohonan/create.php', '', '600','400')" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> TAMBAH</a>
	<p> -->
	<div class="panel panel-primary">
		<div class="panel-heading">PILIH NASABAH</div>
		<div class="panel-body">
		<?php echo $pesan;?>
			<table class='table table-bordered table-condensed mytable' ><!-- id="mytable" -->
	        <thead>
	            <th width="45" class="text-center">ID </th>
	            <th class="text-center">NAMA NASABAH</th>
	            <th class="text-center">NO. AKAD | TGL AKAD</th>
	            <th class="text-center">KODEPLAFOND</th>
	            <th class="text-center">PLAFOND</th>
	            <th class="text-center">IJP TOTAL</th>
	            <th class="text-center">IJP DITERIMA</th>
	            <th class="text-center">PILIH</th>
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM CEK_IJP WHERE IDPERMOHONAN = '".$_GET['id']."' AND IDSERTIFIKAT = 0"; //AND STATUSPENJAMINAN = '1'
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();
	        	foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	                <td align="center">
						<?php echo $value['IDPENJAMINAN'] ?>
					</td>
					<td>
	                	<?php echo $value['NAMADEPAN']." ".$value['NAMABELAKANG'] ?>
	                </td>
	                <td>
	                	<?php echo $value['NOMOR_PK'] ?> - <?php echo date_idn($value['TGL_PK'],'d F Y') ?>
	                </td>
	                <td align="right">
	                	<?php echo $value['KODEPLAFOND'] ?>
	                </td>
	                <td align="right">
	                	<?php echo IDR($value['PLAFONDKREDIT']) ?>
	                </td>
	                <td align="right">
	                   <?php echo IDR($value['IJPTOTAL']) ?>
	                </td>
	                <td align="right">
	                	<?php echo IDR($value['IJPDITERIMA']) ?>
	                </td>
	                <td align="right">
	                <?php 
	                	$i=$value['IDPENJAMINAN'];
	                if (isset($_POST[$i])) {
	                	$q = "UPDATE MSPENJAMINAN SET IDSERTIFIKAT = :sp WHERE IDPENJAMINAN = :id";
	                	$s = $db->prepare($q);
	                	$s->bindParam(':id',$value['IDPENJAMINAN']);
	                	$s->bindParam(':sp',$sp);
	                	$a = $s->execute();
	                		if($a){
				              echo "<meta http-equiv='refresh' content='0'>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }
	                } 
	                ?>
					<form method="post">
	                	<button class="btn btn-xs btn-primary" name="<?php echo $value['IDPENJAMINAN']; ?>" type="submit"><i class="fa fa-check" ></i> PILIH</button>
	                </form>
	                </td>	               
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
		</div>
	</div>
		<div class="panel panel-default">
			<div class="panel-heading"><label for="">LIST PENJAMINAN / NOMOR SERTIFIKAT : <?php echo $data['KODESERTIFIKAT']; ?></label></div>
			<div class="panel-body">
				<table class='table table-bordered table-condensed mytable' ><!-- id="mytable" -->
	        <thead>
	            <th width="45" class="text-center">ID </th>
	            <th class="text-center">NAMA NASABAH</th>
	            <th class="text-center">NO. AKAD | TGL AKAD</th>
	            <th class="text-center">KODEPLAFOND</th>
	            <th class="text-center">PLAFOND</th>
	            <th class="text-center">IJP TOTAL</th>
	            <th class="text-center">IJP DITERIMA</th>
	           <!--  <th class="text-center">PILIH</th> -->
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM CEK_IJP WHERE IDPERMOHONAN = '".$_GET['id']."' AND IDSERTIFIKAT = '".$_GET['sp']."'"; //AND STATUSPENJAMINAN = '1'
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();
	        	foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	                <td align="center">
						<?php echo $value['IDPENJAMINAN'] ?>
					</td>
					<td>
	                	<?php echo $value['NAMADEPAN']." ".$value['NAMABELAKANG'] ?>
	                </td>
	                <td>
	                	<?php echo $value['NOMOR_PK'] ?> - <?php echo date_idn($value['TGL_PK'],'d F Y') ?>
	                </td>
	                <td align="right">
	                	<?php echo $value['KODEPLAFOND'] ?>
	                </td>
	                <td align="right">
	                	<?php echo IDR($value['PLAFONDKREDIT']) ?>
	                </td>
	                <td align="right">
	                   <?php echo IDR($value['IJPTOTAL']) ?>
	                </td>
	                <td align="right">
	                	<?php echo IDR($value['IJPDITERIMA']) ?>
	                </td>
	                <!-- <td align="right">
	                <?php 
	                	$i=$value['IDPENJAMINAN'];
	                if (isset($_POST[$i])) {
	                	$q = "UPDATE MSPENJAMINAN SET IDSERTIFIKAT = :sp WHERE IDPENJAMINAN = :id";
	                	$s = $db->prepare($q);
	                	$s->bindParam(':id',$value['IDPENJAMINAN']);
	                	$s->bindParam(':sp',$sp);
	                	$a = $s->execute();
	                		if($a){
				              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }
	                } 
	                ?>
					<form method="post">
	                	<button class="btn btn-xs btn-primary" name="<?php echo $value['IDPENJAMINAN']; ?>" type="submit"><i class="fa fa-check" ></i> PILIH</button>
	                </form>
	                </td> -->	               
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
	    <!-- <a href="javascript:void(0)" onclick="Popup('../../module/pengendalian/kirim.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-certificate"></i> 
	                KIRIM</a> 
			</div> -->
		</div>
	</div>

<?php
	require_once "../../layout/form.foot.php";
?>