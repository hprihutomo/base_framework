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
			<div class="panel-heading">DATA VERIFIKASI PENJAMINAN</div>
		<div class="panel-body">
		<table class='table table-bordered table-condensed' id="mytable">
	        <thead>
	            <th class="text-center">Status</th>
	            <th class="text-center">NO. PERMOHONAN</th>
	            <th class="text-center">TANGGAL</th>
	            <th>BANK</th>
	            <th class="text-center">PRODUK / PLUS JIWA</th>
	            <th class="text-center">DETAIL</th>
	            <th class="text-center">KEY</th>
	           <!--  <th class="text-center">AKSI</th> -->
	        </thead>
	        <tbody>
	        <?php
	        	

	        	$query = "SELECT * FROM DATA_PERMOHONAN WHERE STATUSPERMOHONAN  IN ('PROSES','VALIDASI')";
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
	                    <?php }elseif ($value['STATUSPERMOHONAN']=='VALIDASI') { ?>
	                    	<a class="btn btn-xs btn-success"><i class="fa fa-check"></i> VALID</a>
	                    <?php }else{ ?>
	                    	<a class="btn btn-xs btn-warning"><i class="fa fa-send"></i> PROSES</a>
	                    <?php } ?>
	                </td>
	                <td class="text-center"><?php echo $value['NOMORPERMOHONAN'] ?></td>
	                <td class="text-center"><?php echo date_idn($value['TGLPERMOHONAN'],'d M Y') ?></td>
	                <td><?php echo $value['KODE']." ".$value['JNSBANK']." ".$value['KANTOR'] ?></td>
	                <td class="text-center"><?php echo $value['NAMAPRODUK'] ?> - <?php if($value['JIWA']=='Y'){ echo "YA";}else{ echo "TIDAK";} ?></td><!--  -->
	                <td class="text-center">
						<a href="javascript:void(0)" onclick="Popup('module/direksi/review.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','700')" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> DETAIL</a>
	                </td>
	                <td class="text-center">

		<?php if ($value['DIRUM']=='0'){ ?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockumum.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-info btn-xs"><i class="fa fa-key"></i> DIREKTUR UMUM</a>
		<?php }elseif ($value['DIRUM']=='1') {?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockumum.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-success btn-xs"><i class="fa fa-check"></i> DIREKTUR UMUM</a>
		<?php }else{?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockumum.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> DIREKTUR UMUM</a>
		<?php } ?>

		<?php if ($value['DIROPR']=='0'){ ?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockopr.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-info btn-xs"><i class="fa fa-key"></i> DIREKTUR UMUM</a>
		<?php }elseif ($value['DIROPR']=='1') {?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockopr.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-success btn-xs"><i class="fa fa-check"></i> DIREKTUR UMUM</a>
		<?php }else{?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockopr.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> DIREKTUR UMUM</a>
		<?php } ?>

		<?php if ($value['DIRUT']=='0'){ ?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockutama.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-info btn-xs"><i class="fa fa-key"></i> DIREKTUR UMUM</a>
		<?php }elseif ($value['DIRUT']=='1') {?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockutama.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-success btn-xs"><i class="fa fa-check"></i> DIREKTUR UMUM</a>
		<?php }else{?>
			<a href="javascript:void(0)" onclick="Popup('module/direksi/lockutama.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> DIREKTUR UMUM</a>
		<?php } ?>
	                	

	                	<!-- <a href="javascript:void(0)" onclick="Popup('module/direksi/lockopr.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-info btn-xs"><i class="fa fa-key"></i> DIREKTUR OPERASIONAL</a>

	                	<a href="javascript:void(0)" onclick="Popup('module/direksi/lockutama.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '600','400')" class="btn btn-info btn-xs"><i class="fa fa-key"></i> DIREKTUR UTAMA</a> -->
	                </td>
	               <!--  <td class="text-center">
	                      	<a href="javascript:void(0)" onclick="Popup('module/direksi/kirim.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-send"></i> KIRIM</a> 
						<form method="post"></form> 
					</td>-->
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
	    </div>
	</div>
</div>
