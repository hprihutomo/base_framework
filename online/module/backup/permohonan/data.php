<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php
	    			 require_once "class/master.class.php";

					$penjaminan = new Master($db);

					//echo $data['NOMORPERMOHONAN'];

				?>
	<!-- <a href="javascript:void(0)" onclick="Popup('module/on_permohonan/create.php', '', '600','400')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Permohonan</a>
	<p> -->
		<table class='table table-bordered table-condensed' ><!-- id="mytable" -->
	        <thead>
	            <th></th>
	            <th>NO. PERMOHONAN</th>
	            <th>PRODUK</th>
	            <th>TGL SURAT</th>
	            <th>BANK</th>
	            <th>AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php
	        	$tgl = date("Y-m-d");
	            foreach ($penjaminan->ListGet('MSPERMOHONAN','STATUSPERMOHONAN','PROSES') as $key => $value) {
	        ?>
	            <tr>
	                <td>
						<a href="javascript:void(0)" onclick="Popup('module/permohonan/edit.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '800','600')" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> PERMOHONAN</a>
						<a href="javascript:void(0)" onclick="Popup('module/permohonan/delete.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-users"></i> NASABAH</a>
					</td>
	                <td><?php echo $value['NOMORPERMOHONAN'] ?></td>
	                <td>
	                    <?php echo $value['NAMAPRODUK']." - ".$value['JIWA'] ?>
	                </td>
	                <td><?php echo date_idn($value['TGLPERMOHONAN'],'d F Y') ?></td>
	                <td><?php echo $value['KODEBANK']." ".$value['JENISBANK']." ".$value['KANTORBANK'] ?></td>
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
