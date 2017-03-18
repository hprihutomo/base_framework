<div class="row">
	<div class="col-lg-12">
	<a href="javascript:void(0)" onclick="Popup('module/master/create.nasabah.php', '', '700','700')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH</a>
	<p>
		<div class="panel panel-default">
			<div class="panel-heading"><label for="">DATA NASABAH</label></div>
			<div class="panel-body">
	<!-- <a href="javascript:void(0)" onclick="Popup('module/on_permohonan/create.php', '', '600','400')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Permohonan</a> 
	<p> -->

	<a href="javascript:void(0)" onclick="Popup('module/master/search.nasabah.php', '', '800','400')" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-search"></i> PENCARIAN DATA NASABAH</a><p>
	
		<table class='table table-bordered table-condensed mytable' ><!-- id="" -->
	        <thead>
	            <th width="45" class="text-center">ID </th>
	            <th>NAMA</th>
	            <th>PRODUK</th>
	            <th>TGL LAHIR</th>
	            <th>KOTA</th>
	            <th>AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM MSNASABAH";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();

	            foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	                <td>
						<?php echo $value['IDNASABAH']; ?>
					</td>
	                <td><?php echo $value['NAMADEPAN']." ".$value['NAMABELAKANG']; ?></td>
	                <td>
	                    <?php echo $value['IDPRODUK']; ?>
	                </td>
	                <td><?php echo date_idn($value['TGL_LAHIR'],'d M Y') ?></td>
	                <td><?php echo $value['KOTANASABAH'] ?></td>
	                <td>
	                	<a href="javascript:void(0)" onclick="Popup('module/master/edit.nasabah.php?id=<?php echo $value['IDNASABAH'] ?>', '', '700','700')" class="btn btn-success btn-xs"><i class="fa fa-check"></i> EDIT</a>
	                	<a href="javascript:void(0)" onclick="Popup('module/master/detail.nasabah.php?id=<?php echo $value['IDNASABAH'] ?>', '', '700','700')" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> DETAIL</a>
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
