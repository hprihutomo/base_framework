<?php

	require_once "../../layout/form.head.php";
?>
	<div class="col-lg-12">
	<?php echo $pesan;?>
	<!-- <a href="javascript:void(0)" onclick="Popup('module/on_permohonan/create.php', '', '600','400')" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> TAMBAH</a>
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
	          <!--   <th class="text-center">STATUS</th> -->
	            <th  class="text-center">AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM CEK_IJP WHERE IDPERMOHONAN = '".$_GET['id']."' "; //AND STATUSPENJAMINAN = '1'
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
<!-- 					<td align="center">
	                	
	                </td> -->
	                <td align="center">
	                <?php if ($value['IJPDITERIMA'] > $value['IJPTOTAL'] ) {?>
						<a href="javascript:void(0)" onclick="Popup('../dokumen/surat.ijplebih.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '800','400')" class="btn btn-primary btn-xs">
						<i class="fa fa-home"></i> 
						 KELEBIHAN IJP
						</a>
						<a href="javascript:void(0)" onclick="Popup('../menrisk/mundur.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-primary btn-xs">
							 <i class="fa fa-minus"> IJP</i> 
						</a>
					<?php	}elseif($value['IJPDITERIMA'] < $value['IJPTOTAL']){ ?>
						<a href="javascript:void(0)" onclick="Popup('../dokumen/surat.ijpkurang.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-danger btn-xs">
							<i class="fa fa-file"></i>  
							 KEKURANGAN IJP
						</a>
						<a href="javascript:void(0)" onclick="Popup('../menrisk/mundur.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-primary btn-xs">
							 <i class="fa fa-plus"> IJP</i> 
						</a>
					<?php	}elseif($value['IJPTOTAL'] == $value['IJPDITERIMA']){ ?>
						<?php if ($value['STATUSPENJAMINAN'] == '2') { ?>
							<a href="javascript:void(0)" onclick="Popup('../menrisk/detail.penjaminan.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-info btn-xs">
								<i class="fa fa-list"></i> 
								VALID
							</a>
	                	<?php }elseif ($value['STATUSPENJAMINAN'] == '1') { ?>
							<a href="javascript:void(0)" onclick="Popup('../menrisk/lanjut.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '700','600')" class="btn btn-primary btn-xs">
							<i class="fa fa-check"></i> DAPAT DILANJUTKAN</a>
	                	<?php	}else{ ?>
							<a href="javascript:void(0)" onclick="Popup('../menrisk/detail.penjaminan.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-info btn-xs">
								<i class="fa fa-list"></i> 
								TUNDA
							</a>
	                	<?php } ?>
						<!-- <a href="javascript:void(0)" onclick="Popup('../menrisk/detail.penjaminan.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-info btn-xs">
								<i class="fa fa-file"></i> 
								PERIKSA
							</a>
						</a> -->
					<?php } ?> 
						
					</td>
	                </td>
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
	    <a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
	    <div class="pull-right">
	    <a href="javascript:void(0)" onclick="Popup('../../module/menrisk/kirim.php?id=<?php echo $value['IDPERMOHONAN'] ?>', '', '500','400')" class="btn btn-primary btn-sm"><i class="fa fa-send"></i> 
	                KIRIM</a> </div>
			</div>
		</div>
	</div>
</div>
<?php
	require_once "../../layout/form.foot.php";
?>