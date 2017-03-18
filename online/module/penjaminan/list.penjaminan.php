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
	            <th class="text-center">NO. AKAD | TGL AKAD</th>
	            <th class="text-center">IJP</th>
	            <th class="text-center">IJP JIWA</th>
	            <th class="text-center">IJP TOTAL</th>
	            <th class="text-center">IJP DITERIMA</th>
	            <th class="text-center">SELISIH</th>
	            <th  width="200" class="text-center">AKSI</th>
	            
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
	                	<?php echo $value['NOMOR_PK'] ?> - <?php echo date_idn($value['TGL_PK'],'d F Y') ?>
	                </td>
	                <td align="right">
	                	<?php echo IDR($value['IJP']) ?>
	                </td>
	                <td align="right">
	                	<?php echo IDR($value['IJPJIWA']) ?>
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
	                <?php if ($value['IJPDITERIMA'] > $value['IJPTOTAL'] ) {?>
						<a href="javascript:void(0)" onclick="Popup('../dokumen/surat.ijplebih.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '800','400')" class="btn btn-primary btn-xs">
						<i class="fa fa-home"></i> 
						SURAT KELEBIHAN IJP
						</a>
					<?php	}elseif($value['IJPDITERIMA'] < $value['IJPTOTAL']){ ?>
						<a href="javascript:void(0)" onclick="Popup('../dokumen/surat.ijpkurang.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-danger btn-xs">
							<i class="fa fa-file"></i> 
							SURAT KEKURANGAN IJP
						</a>
					<?php	}elseif($value['IJPTOTAL'] == $value['IJPDITERIMA']){ ?>
						<a href="javascript:void(0)" onclick="Popup('../pengendalian/detail.penjaminan.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-info btn-xs">
							<i class="fa fa-list"></i> 
							DAPAT DILANJUTKAN
						</a>
					<?php } ?> 
					</td>
	                </td>
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
	    <!-- <a href="javascript:void(0)" onclick="Popup('../../module/pengendalian/kirim.php?id=<?php echo $value['IDPENJAMINAN'] ?>', '', '500','400')" class="btn btn-danger btn-xs"><i class="fa fa-certificate"></i> 
	                KIRIM</a> 
			</div> -->
		</div>
	</div>
</div>
<?php
	require_once "../../layout/form.foot.php";
?>