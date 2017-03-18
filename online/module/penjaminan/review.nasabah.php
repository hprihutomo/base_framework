<?php echo $pesan; ?>
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

	        	

	        		$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPERMOHONAN = ".$_GET['id']." AND IDPRODUK = ".$setValue['IDPRODUK']." AND STATUSPENJAMINAN = '0'";
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
				
				<a href="javascript:void(0)" onclick="Popup('../penjaminan/detail.penjaminan.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-info btn-sm">
					<i class="fa fa-list"></i> 
					DETAIL
				</a>
				
			</td>
			
		</tr>
		<?php } ?>
	        </tbody>
</table>