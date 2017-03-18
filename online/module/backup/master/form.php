	<table class="table table-condensed table-bordered">
		<tbody>
			<!-- <tr>
				<th>ID NASABAH </th>
				<td><input type="text" id="idnasabah" name="idnasabah" autocomplete="off" value="<?php echo $data['IDNASABAH'] ?>"></td>
			</tr> -->
			<tr>
				<th>ID PRODUK</th>
				<td>
					<select name="produk" id="" readonly>
						<?php 
							$query = "SELECT * FROM MSPRODUK";
						 	$stmt = $db->prepare($query);
						 	$stmt->execute();
						 	foreach ($stmt->fetchAll() as $key => $data) {
						 ?>
						<option value="<?php echo $data['IDPRODUK'] ?>" <?php if($_GET['prdk']==$data['IDPRODUK']){ echo "selected";} ?>><?php echo $data['NAMAPRODUK'] ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>NO IDENTITAS</th>
				<td><input type="text" id="noidentitas" name="noidentitas" autocomplete="off" value="<?php echo $value['NOIDENTITAS'] ?>"></td>
			</tr>
			<tr>
				<th>JENIS IDENTITAS</th>
				<td>
					<select name="jnsidentitas" id="jnsidentitas" id="">
						<option value="KTP" <?php if($value['JNSIDENTITAS']=='KTP'){ echo "selected";} ?>>KTP</option>
						<option value="SIM" <?php if($value['JNSIDENTITAS']=='SIM'){ echo "selected";} ?>>SIM</option>
						<option value="PASSPORT" <?php if($value['JNSIDENTITAS']=='PASSPORT'){ echo "selected";} ?>>PASSPORT</option>
					</select>
				</td>
				<!-- <input type="text" id="jnsidentitas" name="jnsidentitas" autocomplete="off" value=""> -->
			</tr>
			<tr>
				<th>NAMA DEPAN</th>
				<td><input type="text" id="namadepan" name="namadepan" autocomplete="off" value="<?php echo $value['NAMADEPAN'] ?>"></td>
			</tr>
			<tr>
				<th>NAMA BELAKANG</th>
				<td><input type="text" id="namabelakang" name="namabelakang" autocomplete="off" value="<?php echo $value['NAMABELAKANG'] ?>"></td>
			</tr>
			<tr>
				<th>JENIS KELAMIN</th>
				<td><select name="jnskelamin" id="jnskelamin" > 
						<option value="L" <?php if($value['JNSKELAMIN']=='L'){ echo "selected";} ?> >LAKI-LAKI</option>
						<option value="P" <?php if($value['JNSKELAMIN']=='P'){ echo "selected";} ?> >PEREMPUAN</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>TANGGAL LAHIR</th>
				<td><input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo $value['TGL_LAHIR'] ?>" autocomplete="off" ></td>
			</tr>
			<tr>
				<th>ALAMAT NASABAH</th>
				<td><textarea name="alamatnasabah" id="alamatnasabah" cols="30" rows="2"><?php echo $value['ALAMATNASABAH'] ?></textarea></td>
			</tr>
			<tr>
				<th>KOTA NASABAH</th>
				<td><input type="text" id="kotanasabah" name="kotanasabah" value="<?php echo $value['KOTANASABAH'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>TELPON</th>
				<td><input type="text" id="telpon" name="telpon" value="<?php echo $value['TELPON'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td><input type="text" id="email" name="email" value="<?php echo $value['EMAIL'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>PEKERJAAN</th>
				<td>
					<select name="pekerjaan" id="pekerjaan">
						<option value="PNS">PNS</option>
						<option value="SWASTA">SWASTA</option>
						<option value="INTERNAL">INTERNAL</option>
					</select>
				</td>
				<!-- <input type="text" id="pekerjaan" name="pekerjaan"value="<?php echo $value['PEKERJAAN'] ?>" autocomplete="off"> -->
			</tr>
			<tr>
				<th>STATUS</th>
				<td>
					<select name="instansi" id="instansi">
						<option value="PERORANGAN">PERORANGAN</option>
						<option value="BADAN USAHA">BADAN USAHA</option>
					</select>
					<!-- <input type="text" id="instansi" name="instansi" value="<?php echo $value['INSTANSI'] ?>" autocomplete="off"> -->
				</td>
			</tr>
			<tr>
				<th>NAMA PERUSAHAAN</th>
				<td><input type="text" id="namaperusahaan" name="namaperusahaan" value="<?php echo $value['NAMAPERUSAHAAN'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>ALAMAT PERUSAHAAN</th>
				<td><textarea name="alamatperusahaan" id="alamatperusahaan" cols="30" rows="2"><?php echo $value['ALAMATPERUSAHAAN'] ?></textarea></td>			</tr>
		</tbody>
	</table>



