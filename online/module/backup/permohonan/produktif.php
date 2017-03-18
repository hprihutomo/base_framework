<div class="row">
	<div class="col-lg-12">
			
				<!-- <a href="javascript:void(0)" onclick="Popup('module/permohonan/create.php', '', '800','600')" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> TAMBAH</a> 
				<a href="javascript:void(0)" onclick="Popup('module/permohonan/search.php', '', '800','600')" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> CARI</a>-->	
		<table class='table table-bordered table-condensed' id="mytable">
	        <thead>
	            <th class="text-center">Status</th>
	            <th class="text-center">NO. PERMOHONAN</th>
	            <th class="text-center">TANGGAL</th>
	            <th class="text-center">PLUS JIWA</th>
	            <th class="text-center">AKSI</th>
	            <th width="100"></th>
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM MSPERMOHONAN WHERE STATUSPERMOHONAN = 'SELESAI'";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();	        	
	            foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	            	<td class="text-center">
	                    <?php if($value['STATUSPERMOHONAN']=='KIRIM'){ ?>
	                    	<a href="javascript:void(0)" onclick="Popup('module/check/cekPermohonan.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '800','600')" class="btn btn-xs btn-primary"><i class="fa fa-certificate"></i> BARU</a>
	                    <?php }elseif ($value['STATUSPERMOHONAN']=='PROSES') { ?>
	                    	<a class="btn btn-xs btn-warning"><i class="fa fa-send"></i> PROSES</a>
	                    <?php } ?>
	                </td>
	                <td><?php echo $value['NOMORPERMOHONAN'] ?></td>
	                <td><?php echo date_idn($value['TGLPERMOHONAN'],'d F Y') ?></td>
	                <td class="text-center"><?php if($value['JIWA']=='Y'){ echo "YA";}else{ echo "TIDAK";} ?></td><!-- <?php echo $value['KODEBANK']." ".$value['JENISBANK']." ".$value['KANTORBANK'] ?> -->
	                <td class="text-center">
	                	<a href="javascript:void(0)" onclick="Popup('module/permohonan/review.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','600')" class="btn btn-info btn-xs"><i class="fa fa-users"></i> DETAIL NASABAH</a>
	                	<a href="javascript:void(0)" onclick="Popup('module/permohonan/detail.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','600')" class="btn btn-success btn-xs"><i class="fa fa-send"></i> KIRIM PERMOHONAN</a>
	                	<a href="javascript:void(0)" onclick="Popup('module/permohonan/detail.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','600')" class="btn btn-success btn-xs"><i class="fa fa-send"></i> KIRIM PERMOHONAN</a>
	                </td>
	                <td class="text-center">
	                	<a href="javascript:void(0)" onclick="Popup('module/permohonan/detail.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','600')" class="btn btn-warning btn-xs"><i class="fa fa-file-text"></i> </a>
						<a href="javascript:void(0)" onclick="Popup('module/permohonan/edit.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '1366','600')" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> </a>
					<?php if($setUser['NAMALEVEL']=='SUPER'){ ?>
						<a href="javascript:void(0)" onclick="Popup('module/permohonan/delete.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '400','350')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </a>
					<?php } ?>
					</td>
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
	</div>
</div>
