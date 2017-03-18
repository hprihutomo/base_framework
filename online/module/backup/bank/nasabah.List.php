<table class="table table-condensed table-bordered">
	<thead>
		<th class="text-center">NO. PK</th>
		<th class="text-center">TGL. PK</th>
		<th class="text-center">NAMA</th>
		<th class="text-center">PLAFOND</th>
		<th class="text-center">COVERAGE</th>
		<th class="text-center">MASA</th>
		<th class="text-center">T.S.B</th>
		<th class="text-center">IMBAL JASA</th>
		<th class="text-center">PENGGUNAAN</th>
		<th class="text-center">DETAIL</th>
	</thead>
	<tbody>
	<?php 

		$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPERMOHONAN = '".$_GET['id']."' AND IDPRODUK = '1'";
		$stmt = $db->prepare($query);
		$stmt->execute();
		foreach($stmt->fetchAll() as $key =>$data){ 
	?>
		<tr>
			<td><?php echo $data['NOMOR_PK']; ?></td>
			<td><?php echo date_idn($data['TGL_PK'], 'd M Y'); ?></td>
			<td><?php echo $data['NAMADEPAN']." ".$data['NAMABELAKANG']; ?></td>
			<td align="right"><?php echo IDR($data['PLAFONDKREDIT']); ?></td>
			<td align="center"><?php echo $data['COVERAGE']; ?></td>
			<td align="center"><?php echo $data['MASA']; ?></td>
			<td align="center"><?php echo $data['TSB']; ?></td>
			<td align="right"><?php echo IDR($data['IJP']); ?></td>
			<td><?php echo $data['PENGGUNAAN']; ?></td>
			<td align="center">
				<a href="javascript:void(0)" onclick="Popup('../bank/berkas.penjaminan.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-warning btn-xs">
					<i class="fa fa-file"></i> 
					BERKAS
				</a>
				<a href="javascript:void(0)" onclick="Popup('../bank/nasabah.Upload.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '600','400')" class="btn btn-success btn-xs">
					<i class="fa fa-upload"></i> 
					SLIP
				</a>
				<a href="javascript:void(0)" onclick="Popup('../bank/detail.penjaminan.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-primary btn-xs">
					<i class="fa fa-list"></i> 
					DETAIL
				</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>