<?php

	require_once "../../layout/form.head.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPENJAMINAN = $id";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();
?>
	<table class='table table-bordered table-condensed' id="mytable">
	        <thead>
	        	<th class="text-center" width="100">NO. PK</th>  
	            <th class="text-center">TGL. PK</th>
	            <th class="text-center">NAMA</th>
	            <th class="text-center" width="200">ALAMAT</th>
	            <th class="text-center">TGL LAHIR</th>
	            <!-- <th class="text-center">PENGGUNAAN KREDIT</th> -->
	            <th class="text-center">PLAFOND KREDIT</th> 
	            <th class="text-center">MASA </th> 
	            <th class="text-center">COV</th> 
	            <th class="text-center">IJP</th> 
	            <th class="text-center">JATUH TEMPO</th>
	            <th class="text-center">DETAIL</th>    
	        </thead>
	        <tbody>
	        	<?php 

	        		$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPERMOHONAN = ".$_GET['id']."  AND STATUSPENJAMINAN = '2'";
	        		$stmt = $db->prepare($query);
	        		$stmt->execute();

					foreach($stmt->fetchALL() as $key =>$data){ 
				?>
		<tr>
			<td><?php echo $data['NOMOR_PK']; ?></td>
			<td align="center"><?php echo date_idn($data['TGL_PK'],'d M Y'); ?></td>
			<td><?php echo $data['NAMADEPAN']." ".$data['NAMABELAKANG']; ?></td>
			<td><?php echo $data['ALAMATNASABAH']; ?></td>
			<td align="center"><?php echo date_idn($data['TGL_LAHIR'],'d M Y'); ?></td>
			<!-- <td><?php echo $data['PENGGUNAAN']; ?></td> -->
			<td align="right"><?php echo IDR($data['PLAFONDKREDIT']); ?></td>
			<td align="center"><?php echo $data['MASA']; ?> Bln</td>
			<td align="center"><?php echo $data['COVERAGE']; ?> %</td>
			<td align="right"><?php echo IDR($data['IJPTOTAL']); ?></td>
			<td align="center"><?php echo date_idn($data['JATUHTEMPO'],'d M Y'); ?></td>
			<td align="center">
			<form method="post">
				<?php if ($data['IJPDITERIMA'] > $data['IJPTOTAL'] ) {?>
					<a href="javascript:void(0)" onclick="Popup('../dokumen/surat.ijplebih.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '800','400')" class="btn btn-primary btn-sm">
					<i class="fa fa-home"></i> 
					SURAT KELEBIHAN IJP
					</a>
				<?php	}elseif($data['IJPDITERIMA'] < $data['IJPTOTAL']){ ?>
				
				<a href="javascript:void(0)" onclick="Popup('../dokumen/surat.ijpkurang.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-danger btn-sm">
					<i class="fa fa-file"></i> 
					SURAT KEKURANGAN IJP
				</a>
				<?php	}elseif($data['IJPTOTAL'] == $data['IJPDITERIMA']){ ?>
				<a href="javascript:void(0)" onclick="Popup('../master/detail.penjaminan.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-info btn-sm">
					<i class="fa fa-list"></i> 
					DAPAT DILANJUTKAN
				</a>
				<?php } ?>
				<!-- <input type="hidden" value="<?php echo $data['IDPENJAMINAN'] ?>" name="idpenjaminan">
					<button name="kirim" id="kirim" class="btn btn-warning btn-sm">
						<i class="fa fa-send"></i> 
						KEUANGAN
					</button>
				</form> -->
			</td>
			
		</tr>
		<?php } ?>
	        </tbody>
</table>
<?php
	require_once "../../layout/form.foot.php";
 ?>