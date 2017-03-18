<div class="row">
	<div class="col-lg-12">
	<a href="javascript:void(0)" onclick="Popup('module/on_permohonan/create.php', '', '600','400')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH</a>
	<p>
		<div class="panel panel-default">
			<div class="panel-heading"><label for="">DATA SERTIFIKAT</label></div>
			<div class="panel-body">
		<table class='table table-bordered table-condensed mytable' ><!-- id="mytable" -->
	        <thead>
	            <th width="50" class="text-center">ID</th>
	            <th class="text-center">NO. PERMOHONAN</th>
	            <th class="text-center">NO. SERTIFIKAT</th>
	            <th class="text-center">KODE NOTE</th>
	            <th class="text-center">TGL TERBIT</th>
	            <th class="text-center">AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM DATA_SERTIFIKAT";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();
	            foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	                <td>
						<?php echo $value['IDSERTIFIKAT'] ?>
					</td>
	                <td>
	                	<?php echo $value['NOMORPERMOHONAN'] ?>
	                </td>
	                <td>
	                    <?php echo $value['KODESERTIFIKAT'] ?>
	                </td>
	                <td>
	                	 <?php echo md5($value['KODESERTIFIKAT']) ?>
	                </td>
	                <td>
	                	<?php echo date_idn($value['TGLSERTIFIKAT'],"d F Y") ?>
	                </td>
	                <td>
	                	<a href="javascript:void(0)" onclick="Popup('module/permohonan/terbit.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-certificate"></i> TERBIT SP</a>
					</td>
	                </td>
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
			</div>
		</div>
	</div>
</div>
