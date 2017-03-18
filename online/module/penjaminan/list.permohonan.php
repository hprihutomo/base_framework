<div class="row">
	<div class="col-lg-12">
			
				<!-- <a href="javascript:void(0)" onclick="Popup('module/permohonan/create.php', '', '800','600')" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> TAMBAH</a> 
				<a href="javascript:void(0)" onclick="Popup('module/permohonan/search.php', '', '800','600')" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> CARI</a>-->	
		<?php 
			if (isset($_POST['kirim'])) {
	        			$query1 = "UPDATE MSPERMOHONAN SET STATUSPERMOHONAN = 'CEKIJP' WHERE IDPERMOHONAN = :ID";
	        			$stmt1 = $db->prepare($query1);
	        			$stmt1->bindParam(':ID',$_POST['IDPERMOHONAN']);
	        			$action = $stmt1->execute();

	        			if($action){
				              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Permohonan Sudah Di Bag.KEUANGAN</div>";
				           }else{
				              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
				           }

	        		}
		echo $pesan; 

		?>
		<div class="panel panel-green">
			<div class="panel-heading">DATA PERMOHONAN PENJAMINAN</div>
		<div class="panel-body">
		<table class='table table-bordered table-condensed' id="mytable">
	        <thead>
	            <th class="text-center">Status</th>
	            <th class="text-center">NO. PERMOHONAN</th>
	            <th class="text-center">TANGGAL</th>
	            <th>BANK</th>
	            <th class="text-center">PRODUK / PLUS JIWA</th>
	            <th class="text-center">DIBUAT OLEH</th>
	            <th class="text-center">AKSI</th>
	        </thead>
	        <tbody>
	        <?php
	        	

	        	$query = "SELECT * FROM DATA_PERMOHONAN WHERE STATUSPERMOHONAN  IN ('PROSES','CETAK SP','VALIDASI')";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();	        	
	            foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	            	<td class="text-center">
	                    <?php if($value['STATUSPERMOHONAN']=='KIRIM'){ ?>
	                    	<a href="javascript:void(0)" onclick="Popup('module/check/cekPermohonan.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '800','700')" class="btn btn-xs btn-primary"><i class="fa fa-certificate"></i> BARU</a>
	                    <?php }elseif ($value['STATUSPERMOHONAN']=='PROSES') { ?>
	                    	<a class="btn btn-xs btn-warning"><i class="fa fa-send"></i> PROSES</a>
	                    <?php }elseif ($value['STATUSPERMOHONAN']=='VALID') { ?>
	                    	<a class="btn btn-xs btn-success"><i class="fa fa-check"></i> VALID</a>
	                    <?php }else{ ?>
	                    	<a class="btn btn-xs btn-warning"><i class="fa fa-send"></i> PROSES</a>
	                    <?php } ?>
	                </td>
	                <td class="text-center"><?php echo $value['NOMORPERMOHONAN'] ?></td>
	                <td class="text-center"><?php echo date_idn($value['TGLPERMOHONAN'],'d M Y') ?></td>
	                <td><?php echo $value['KODE']." ".$value['JNSBANK']." ".$value['KANTOR'] ?></td>
	                <td class="text-center"><?php echo $value['NAMAPRODUK'] ?> - <?php if($value['JIWA']=='Y'){ echo "YA";}else{ echo "TIDAK";} ?></td><!--  -->
	                <td class="text-center"><?php echo $value['NAMAUSER'] ?></td>
	                <td class="text-center">
	                <form method="post">
	                <?php if($value['STATUSPERMOHONAN']=='PROSES'){ ?>
	                	<a href="javascript:void(0)" onclick="Popup('module/penjaminan/review.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','700')" class="btn btn-info btn-xs"><i class="fa fa-file"></i> PERMOHONAN</a>
	                	<a href="javascript:void(0)" onclick="Popup('module/penjaminan/kirim.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-send"></i> 
				                KIRIM</a> 
						</div>
							<!-- <input type="hidden" value="<?php echo $value['IDPERMOHONAN'] ?>" name="IDPERMOHONAN">
								<button name="kirim" id="kirim" class="btn btn-warning btn-xs">
									<i class="fa fa-send"></i> 
									KEUANGAN
								</button> -->
						
	                	<a href="javascript:void(0)" onclick="Popup('module/master/detail.nasabah.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','700')" class="btn btn-success btn-xs"><i class="fa fa-users"></i> NASABAH </a>
	                   	
	                <?php }elseif($value['STATUSPERMOHONAN']=='VALIDASI'){ ?>
	                	<!-- <a href="javascript:void(0)" onclick="Popup('module/penjaminan/list.penjaminan.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','700')" class="btn btn-success btn-xs"><i class="fa fa-users"></i> NASABAH </a> -->
	                	<a href="javascript:void(0)" onclick="Popup('module/sertifikat/proses.sertifikat.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','300')" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> KOMITE & SP</a>
	                	<!-- <a href="javascript:void(0)" onclick="Popup('module/permohonan/detail.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','700')" class="btn btn-success btn-xs"><i class="fa fa-send"></i>SERTIFIKAT</a> -->
	                <?php }elseif($value['STATUSPERMOHONAN']=='VALIDASI'){ ?>	
	                <a href="javascript:void(0)" onclick="Popup('module/permohonan/detail.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','700')" class="btn btn-success btn-xs"><i class="fa fa-send"></i> KIRIM</a>
	                <?php }elseif($value['STATUSPERMOHONAN']=='CETAK SP'){ ?>	
	                <a href="javascript:void(0)" onclick="Popup('module/sertifikat/create.sp.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '800','600')" class="btn btn-success btn-xs"><i class="fa fa-certificate"></i> BUAT SP</a>
	                <?php } ?>
	                <!-- <a href="javascript:void(0)" onclick="Popup('module/permohonan/detail.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','600')" class="btn btn-warning btn-xs"><i class="fa fa-file-text"></i> </a>
						<a href="javascript:void(0)" onclick="Popup('module/permohonan/edit.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','600')" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> </a>
					<?php if($setUser['NAMALEVEL']=='SUPER'){ ?>
						<a href="javascript:void(0)" onclick="Popup('module/permohonan/delete.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '400','350')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </a>
					<?php } ?> --></form>
					</td>
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
	    </div>
	    </div>
	</div>
</div>
