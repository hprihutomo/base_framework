<?php echo $pesan; ?>
<table class="table table-bordered table-condensed">
				<tr>
					<td>NAMA LENGKAP</td>
					<td>
						<input type="text" name="nama" value="<?php echo $set['NAMAUSER'] ?>" required>
					</td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td>
						<input type="email" name="email" value="<?php echo $set['EMAIL'] ?>" required>
					</td>
				</tr>
				<tr>
					<td>USERNAME</td>
					<td>
						<input type="text" name="username" value="<?php echo $set['USERNAME'] ?>" required>
					</td>
				</tr>
				<?php if ($form == 'input'): ?>
				<tr>
					<td>PASSWORD</td>
					<td>
						<input type="password" name="password" value="<?php echo $set['PASSWORD'] ?>" required>
					</td>
				</tr>
				<tr>
					<td>PIN</td>
					<td>
						<input type="password" name="pin" value="<?php echo $set['PINCODE'] ?>" required>
					</td>
				</tr>
				<?php endif ?>
				<tr>
					<td>BAGIAN</td>
					<td>
						<select name="bagian" id="">
							<?php 
								$query = "SELECT * FROM MSBAGIAN";
								$stmt = $db->prepare($query);
								$stmt->execute();
								foreach ($stmt->fetchAll() as $key => $value) {
							 ?>
								<option value="<?php echo $value['IDBAGIAN'];?>" <?php if($value['IDBAGIAN']==$set['IDBAGIAN']){ echo 'selected';} ?> ><?php echo $value['NAMABAGIAN'] ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>JABATAN</td>
					<td>
						<select name="jabatan" id="">
							<?php 
								$query = "SELECT * FROM MSJABATAN";
								$stmt = $db->prepare($query);
								$stmt->execute();
								foreach ($stmt->fetchAll() as $key => $value) {
							 ?>
								<option value="<?php echo $value['IDJABATAN'];?>" <?php if($value['IDJABATAN']==$set['IDJABATAN']){ echo 'selected';} ?> ><?php echo $value['NAMAJABATAN'] ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>LEVEL</td>
					<td>
						<select name="level" id="">
							<?php 
								$query = "SELECT * FROM MSLEVEL";
								$stmt = $db->prepare($query);
								$stmt->execute();
								foreach ($stmt->fetchAll() as $key => $value) {
							 ?>
								<option value="<?php echo $value['IDLEVEL'];?>" <?php if($value['IDLEVEL']==$set['IDLEVEL']){ echo 'selected';} ?> ><?php echo $value['NAMALEVEL'] ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>LINK BANK</td>
					<td>
						<select name="bank" id="">
							<option value="0">Tidak ada</option>
							<?php 
								$query = "SELECT * FROM MSBANK";
								$stmt = $db->prepare($query);
								$stmt->execute();
								foreach ($stmt->fetchAll() as $key => $value) {
							 ?>
								<option value="<?php echo $value['IDBANK'];?>" <?php if($value['IDBANK']==$set['IDBANK']){ echo 'selected';} ?> ><?php echo $value['KODE']." ".$value['JNSBANK']." ".$value['KANTOR'] ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>