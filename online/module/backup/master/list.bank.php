<div class="row">
	<div class="col-lg-12">
	<a href="javascript:void(0)" onclick="Popup('module/master/create.bank.php', '', '800','600')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH</a>
	<p>
		<div class="panel panel-default">
			<div class="panel-heading"><label for="">DATA BANK</label></div>
			<div class="panel-body">
		<table class='table table-bordered table-condensed mytable' ><!-- id="mytable" -->
	        <thead>
	            <th width="45" class="text-center">ID </th>
	            <th width="200" class="text-center">KODE BANK</th>
	            <th class="text-center">NAMA</th>
	            <th class="text-center">ALAMAT</th>
	            <th width="175" class="text-center">AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php
	        	//$tgl = date("Y-m-d");
	        	$query = "SELECT * FROM MSBANK ORDER BY IDBANK ASC";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();

	            foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	            	<td class="text-center">
	            		<?php echo $value['IDBANK'] ?>
	            	</td>
	                <td>
	                	<?php echo $value['KODE'] ?>
	                </td>
	                <td>
	                    <?php echo $value['JNSBANK']." ".$value['KANTOR'] ?>
	                </td>
	                <td>
	                	<?php echo $value['ALAMATBANK'] ?>
	                </td>
	                <td class="text-center">
	                	<a href="javascript:void(0)" onclick="Popup('module/master/edit.bank.php?id=<?php echo $value['IDBANK'] ?>', '', '800','600')" class="btn btn-success btn-xs"><i class="fa fa-check"></i> EDIT</a>
	                	<a href="javascript:void(0)" onclick="Popup('module/master/detail.bank.php?id=<?php echo $value['IDBANK'] ?>', '', '800','600')" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> DETAIL</a>
						<!-- <a href="javascript:void(0)" onclick="Popup('module/permohonan/delete.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-danger btn-sm"><i class="fa fa-users"></i> NASABAH</a> -->

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
