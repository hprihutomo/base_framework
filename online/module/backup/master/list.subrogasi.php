<div class="row">
	<div class="col-lg-12">
	<a href="javascript:void(0)" onclick="Popup('module/on_permohonan/create.php', '', '600','400')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH</a>
	<p>
		<div class="panel panel-default">
			<div class="panel-heading"><label for="">DATA SUBROGASI</label></div>
			<div class="panel-body">

		<table class='table table-bordered table-condensed mytable' ><!-- id="mytable" -->
	        <thead>
	            <th width="45" class="text-center">ID </th>
	            <th class="text-center">NAMA / PERMOHONAN / PRODUK / SERTIFIKAT</th>
	            <th class="text-center">KOL</th>
	            <th class="text-center">MASA</th>
	            <th class="text-center">AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM MSOUTSTANDING";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();
	            foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	                <td>
						<?php echo $value['IDOUTSTANDING'] ?>
					</td>
	                <td><?php echo $value['IDPENJAMINAN'] ?></td>
	                <td>
	                    <?php echo $value['KOL'] ?>
	                </td>
	                <td><?php echo $value['MASA'] ?></td>
	                <td>
	                	<!-- <a href="javascript:void(0)" onclick="Popup('module/master/terbit.php?id=<?php echo $value['IDmaster'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> HAPUS</a> -->
	                	<a href="javascript:void(0)" onclick="Popup('module/master/terbit.php?id=<?php echo $value['IDmaster'] ?>', '', '500','400')" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> EDIT</a>
	                	<a href="javascript:void(0)" onclick="Popup('module/master/terbit.php?id=<?php echo $value['IDmaster'] ?>', '', '500','400')" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> DETAIL</a>
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
