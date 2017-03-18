<div class="row">
	<div class="col-lg-12">
	<?php echo $pesan;?>
	<!-- <a href="javascript:void(0)" onclick="Popup('module/on_permohonan/create.php', '', '600','400')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH</a>
	<p> -->
		<div class="panel panel-default">
			<div class="panel-heading"><label for="">DATA IMBAL JASA</label></div>
			<div class="panel-body">
		<table class='table table-bordered table-condensed mytable' ><!-- id="mytable" -->
	        <thead>
	            <th width="45" class="text-center">ID </th>
	            <th class="text-center">NAMA NASABAH</th>
	            <th class="text-center">NO. PERMOHONAN / TGL / PRODUK</th>
	            <th class="text-center">BANK</th>
	            <th class="text-center">IJP</th>
	            <th class="text-center">IJP DITERIMA</th>
	            <th class="text-center">SELISIH</th>
	            <th  width="200" class="text-center">AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php

	        	

	        	$query = "SELECT * FROM CEK_IJP WHERE STATUSPERMOHONAN = 'PROSES' AND STATUSPENJAMINAN = '1'";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();
	        	foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	                <td align="center">
						<?php echo $value['IDPENJAMINAN'] ?>
					</td>
					<td>
	                	<?php echo $value['NAMADEPAN']." ".$value['NAMABELAKANG'] ?>
	                </td>
	                <td>
	                	<?php echo $value['NOMORPERMOHONAN'] ?> - <?php echo date_idn($value['TGLPERMOHONAN'],'d F Y') ?> /  <?php echo $value['NAMAPRODUK']." - ".$value['JIWA'] ?>
	                </td>
	                <td>
	                	<?php echo $value['KODE']." ".$value['JNSBANK']." ".$value['KANTOR'] ?>
	                </td>
	                <td align="right">
	                   <?php echo IDR($value['IJPTOTAL']) ?>
	                </td>
	                <td align="right">
	                	<?php echo IDR($value['IJPDITERIMA']) ?>
	                </td>
	                <td align="right">
	                	<?php echo IDR($value['IJPSELISIH']) ?>
	                </td>
	                <td align="center">
	                <a href="javascript:void(0)" onclick="Popup('module/keuangan/input.ijp.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-certificate"></i> 
	                INPUT IJP</a> 
	               	<a href="javascript:void(0)" onclick="Popup('module/keuangan/kirim.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-certificate"></i> 
	                KIRIM</a> 
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