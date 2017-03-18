<div class="row">
	<div class="col-lg-12">
	<!-- <a href="javascript:void(0)" onclick="Popup('module/bank/create.php', '', '600','400')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Permohonan</a>
	<p> -->
		<table class='table table-bordered table-condensed' id="mytable">
	        <thead>
	            
	            <th class="text-center">NO. PERMOHONAN</th>
	            <th class="text-center" width="75">STATUS</th>
	            <th class="text-center" >TGL PERMOHONAN</th>
	            <th class="text-center" >PRODUK - JIWA</th>
	            <th class="text-center" >NOMOR SERTIFIKAT - TANGGAL</th>
	            <th class="text-center" width="200">AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php

	        	$query = "SELECT * FROM DATA_PERMOHONAN WHERE IDBANK = $IDBANK ORDER BY TGLPERMOHONAN DESC";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();
	            foreach ($stmt->fetchALL() as $key => $value) {
	        ?>
	            <tr>
	                
	                <td><?php echo $value['NOMORPERMOHONAN'] ?></td>
	                <td class="text-center">
	                    <?php if($value['STATUSPERMOHONAN']=='DRAFT'){ ?>
	                    	<a class="btn btn-xs btn-default"><i class="fa fa-file"></i> DRAFT</a>
	                    <?php }elseif ($value['STATUSPERMOHONAN']=='PROSES') { ?>
	                    <a class="btn btn-xs btn-warning"><i class="fa fa-refresh"></i> PROSES</a>
	                    <?php }elseif ($value['STATUSPERMOHONAN']=='KIRIM') { ?>
	                    	<a class="btn btn-xs btn-primary"><i class="fa fa-send"></i> TERKIRIM</a>
	                    <?php }elseif ($value['STATUSPERMOHONAN']=='SELESAI') { ?>
	                    	<a class="btn btn-xs btn-success"><i class="fa fa-certificate"></i> SELESAI</a>
	                    <?php } ?>
	                </td>
	                <td class="text-center"><?php echo date_idn($value['TGLPERMOHONAN'],'d F Y') ?></td>
	                <td class="text-center">
	                    <?php echo $value['NAMAPRODUK']." - ".$value['JIWA'] ?>
	                </td>
	                <td class="text-center"><?php //echo date_idn($value['TGLPERMOHONAN'],'d F Y') ?></td>
	                <td class="text-center">
	                	<?php if ($value['STATUSPERMOHONAN']=='DRAFT') {?>
						<a href="javascript:void(0)" onclick="Popup('module/bank/nasabah.Add.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','728')" class="btn btn-info btn-xs"><i class="fa fa-users"></i> NASABAH</a>
						<a href="javascript:void(0)" onclick="Popup('module/bank/review.kirim.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','728')" class="btn btn-warning btn-xs"><i class="fa fa-send"></i> KIRIM</a>
						<?php }elseif ($value['STATUSPERMOHONAN']=='PROSES') { ?>
						<a href="javascript:void(0)" onclick="Popup('module/bank/review.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','728')" class="btn btn-primary btn-xs"><i class="fa fa-list"></i> REVIEW</a>
	                	<?php }elseif ($value['STATUSPERMOHONAN']=='SELESAI') { ?>
	                	<a href="javascript:void(0)" onclick="Popup('module/bank/permohonan.Send.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '800','600')" class="btn btn-success btn-xs"><i class="fa fa-certificate"></i> COVER NOTE</a> 
	                	<?php } ?>
					</td>
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
	</div>
</div>
