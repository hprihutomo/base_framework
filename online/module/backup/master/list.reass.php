<div class="row">
	<div class="col-lg-12">
	<a href="javascript:void(0)" onclick="Popup('module/on_permohonan/create.php', '', '600','400')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH</a>
	<p>
		<div class="panel panel-default">
			<div class="panel-heading"><label for="">DATA RE-ASURANSI</label></div>
			<div class="panel-body">

		<table class='table table-bordered table-condensed mytable' ><!-- id="mytable" -->
	        <thead>
	            <th width="45" class="text-center">ID </th>
	            <th class="text-center">NAMA</th>
	            <th class="text-center">ALAMAT</th>
	            <th class="text-center">PRODUKTIF</th>
	            <th class="text-center">MULTIGUNA</th>
	            <th class="text-center">KONSTRUKSI</th>
	            <th width="175" class="text-center">AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM MSREASS";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();
	            foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	                <td class="text-center">
						<?php echo $value['IDREASS']; ?>
					</td>
	                <td>
	                	<?php echo $value['NAMAREASS'] ?>
	                </td>
	                <td>
	                    <?php echo $value['ALAMATREASS'] ?>
	                </td>
	                <td>
	                	<?php echo $value['PRODUKTIF'] ?>
                	</td>
	                <td>
	                	<?php echo $value['MULTIGUNA'] ?>
                	</td>
	                <td>
	                	<?php echo $value['KONSTRUKSI'] ?>
	                </td>
	                <td class="text-center">
	                	<!-- <a href="javascript:void(0)" onclick="Popup('module/permohonan/terbit.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> HAPUS</a> -->
	                	<a href="javascript:void(0)" onclick="Popup('module/permohonan/terbit.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> EDIT</a>
	                	<a href="javascript:void(0)" onclick="Popup('module/permohonan/terbit.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> DETAIL</a>
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
