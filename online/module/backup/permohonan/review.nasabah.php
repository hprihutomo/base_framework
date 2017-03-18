<?php echo $pesan; ?>
<table class='table table-bordered table-condensed' id="mytable">
	        <thead>
	        	<th class="text-center" width="100">NO. PK</th>  
	            <th class="text-center">TGL. PK</th>
	            <th class="text-center">NAMA</th>
	            <th class="text-center" width="200">ALAMAT</th>
	            <th class="text-center">TGL LAHIR</th>
	            <!-- <th class="text-center">PENGGUNAAN KREDIT</th> -->
	            <th class="text-center">PLAFOND KREDIT</th> 
	            <th class="text-center">MASA </th> 
	            <th class="text-center">COV</th> 
	            <th class="text-center">IJP</th> 
	            <th class="text-center">JATUH TEMPO</th>
	            <th class="text-center">DETAIL</th>    
	        </thead>
	        <tbody>
	        	<?php 

	        	if (isset($_POST['kirim'])) {
	        			$query1 = "UPDATE MSPENJAMINAN SET STATUSPENJAMINAN = '1' WHERE IDPENJAMINAN = :ID";
	        			$stmt1 = $db->prepare($query1);
	        			$stmt1->bindParam(':ID',$_POST['idpenjaminan']);
	        			$action = $stmt1->execute();

	        			if($action){
				              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }

	        		}

	        		$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPERMOHONAN = ".$_GET['id']." AND IDPRODUK = ".$setValue['IDPRODUK']." AND STATUSPENJAMINAN = '0'";
	        		$stmt = $db->prepare($query);
	        		$stmt->execute();

					foreach($stmt->fetchALL() as $key =>$data){ 
				?>
		<tr>
			<td><?php echo $data['NOMOR_PK']; ?></td>
			<td align="center"><?php echo date_idn($data['TGL_PK'],'d M Y'); ?></td>
			<td><?php echo $data['NAMADEPAN']." ".$data['NAMABELAKANG']; ?></td>
			<td><?php echo $data['ALAMATNASABAH']; ?></td>
			<td align="center"><?php echo date_idn($data['TGL_LAHIR'],'d M Y'); ?></td>
			<!-- <td><?php echo $data['PENGGUNAAN']; ?></td> -->
			<td align="right"><?php echo IDR($data['PLAFONDKREDIT']); ?></td>
			<td align="center"><?php echo $data['MASA']; ?> Bln</td>
			<td align="center"><?php echo $data['COVERAGE']; ?> %</td>
			<td align="right"><?php echo IDR($data['IJPTOTAL']); ?></td>
			<td align="center"><?php echo date_idn($data['JATUHTEMPO'],'d M Y'); ?></td>
			<td align="center">
			<form method="post">
				<?php if ($setValue['JIWA']=='Y') {?>
					<a href="javascript:void(0)" onclick="Popup('../master/input.reass.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '800','400')" class="btn btn-success btn-sm">
					<i class="fa fa-home"></i> 
					REASS
					</a>
				<?php	} ?>
				
				<a href="javascript:void(0)" onclick="Popup('../permohonan/review.berkas.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-primary btn-sm">
					<i class="fa fa-file"></i> 
					BERKAS
				</a>
				<a href="javascript:void(0)" onclick="Popup('../master/detail.penjaminan.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-info btn-sm">
					<i class="fa fa-list"></i> 
					DETAIL
				</a>
				
				<input type="hidden" value="<?php echo $data['IDPENJAMINAN'] ?>" name="idpenjaminan">
					<button name="kirim" id="kirim" class="btn btn-warning btn-sm">
						<i class="fa fa-send"></i> 
						KEUANGAN
					</button>
				</form>
			</td>
			
		</tr>
		<?php } ?>
	        </tbody>
</table>