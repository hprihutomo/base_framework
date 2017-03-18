<table class='table table-bordered table-condensed' id="mytable">
	        <thead>
	        	<th class="text-center">NO. PK</th>  
	            <th class="text-center">TGL. PK</th>
	            <th class="text-center">NAMA</th>
	            <th class="text-center">ALAMAT</th>
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
	        		$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPERMOHONAN = ".$_GET['id']." AND IDPRODUK = ".$setValue['IDPRODUK']."";
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
			<td align="right"><?php echo IDR($data['IJP']); ?></td>
			<td align="center"><?php echo date_idn($data['JATUHTEMPO'],'d M Y'); ?></td>
			<td align="center">
				<a href="javascript:void(0)" onclick="Popup('../bank/detail.penjaminan.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-info btn-xs">
					<i class="fa fa-list"></i> 
					DETAIL
				</a>
				<a href="javascript:void(0)" onclick="Popup('../bank/berkas.permohonan.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-primary btn-xs">
					<i class="fa fa-file"></i> 
					BERKAS
				</a>
			</td>
			
		</tr>
		<?php } ?>
	        </tbody>
</table>