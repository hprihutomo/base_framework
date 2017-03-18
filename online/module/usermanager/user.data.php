<div class="panel panel-primary">
	<div class="panel-heading">USERMANAGER</div>
	<div class="panel-body">
		<div class="pull-right">
			<a href="javascript:void(0)" onclick="Popup('module/usermanager/user.input.php', '', '800','600')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> CREATE</a>
		</div>
			<table class='table table-bordered table-condensed mytable'>
				<thead>
					<th>NAMA</th>
					<th>USERNAME</th>
					<th>STATUS</th>
					<th>JABATAN</th>
					<th>BAGIAN</th>
					<th width="200">AKSI</th>
				</thead>
				<tbody>
				<?php 
					$query 	= "SELECT * FROM DATA_USER";
					$stmt	= $db->prepare($query);
					$stmt->execute();
					foreach ($stmt->fetchALL() as $key => $value) {
				 ?>
					<tr>
						<td><?php echo $value['NAMAUSER']; ?></td>
						<td><?php echo $value['USERNAME']; ?></td>
						<td><?php if($value['STATUS']=='A'){ echo 'AKTIF';}else{ echo 'NON-AKTIF';} ?></td>
						<td><?php echo $value['NAMAJABATAN']; ?></td>
						<td><?php echo $value['NAMABAGIAN']; ?></td> 
						<td>
							<a href="javascript:void(0)" onclick="Popup('module/usermanager/user.update.php?id=<?php echo $value['IDUSER'] ?>', '', '600','400')" class="btn btn-success btn-xs"><i class="fa fa-check"></i> EDIT</a>
							<a href="javascript:void(0)" onclick="Popup('module/usermanager/user.config.php?id=<?php echo $value['IDUSER'] ?>', '', '600','400')" class="btn btn-info btn-xs"><i class="fa fa-cogs"></i> SET UP</a>
							<a href="javascript:void(0)" onclick="Popup('module/usermanager/user.reset.php?id=<?php echo $value['IDUSER'] ?>', '', '600','400')" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> RESET USER</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
	</div>
</div>
