	<table class="table table-condensed table-bordered">
		<tbody>
			<tr>
				<th>KODE </th>
				<td>
					<select name="kode" id="">
						<option value="BPD KALTIM" <?php if($data['KODE']=='BPD KALTIM'){ echo "selected"; } ?>>BPD KALTIM</option>
						<option value="BPR Bepede" <?php if($data['KODE']=='BPR Bepede'){ echo "selected"; } ?>>BPR Bepede</option>
						<option value="BPR" <?php if($data['KODE']=='BPR'){ echo "selected"; } ?>>BPR</option>
						<option value="BRI" <?php if($data['KODE']=='BRI'){ echo "selected"; } ?>>BRI</option>
					</select>
					<!-- <input type="text" id="kode"  value="<?php echo $data['KODE'] ?>" autocomplete="off"> -->
				</td>
			</tr>
			<tr>
				<th>NAMA BANK</th>
				<td><input type="text" id="namabank" name="namabank" value="<?php echo $data['NAMABANK'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>JENIS BANK</th>
				<td><input type="text" id="jnsbank" name="jnsbank" value="<?php echo $data['JNSBANK'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>KANTOR</th>
				<td><input type="text" id="kantor" name="kantor" value="<?php echo $data['KANTOR'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>ALAMAT</th>
				<td><textarea name="alamatbank" id="" cols="30" rows="2"><?php echo $data['ALAMATBANK'] ?></textarea></td>
			</tr>
			<tr>
				<th>KOTA</th>
				<td><input type="text" id="kota" name="kota" value="<?php echo $data['KOTA'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>COV PRODUKTIF</th>
				<td><input type="text" id="cov_produktif" name="cov_produktif"  size="5" value="<?php echo $data['COV_PRODUKTIF'] ?>" autocomplete="off"></td>
			</tr>
			<tr>
				<th>COV MULTIGUNA</th>
				<td><input type="text" id="cov_multiguna" name="cov_multiguna"  size="5" value="<?php echo $data['COV_MULTIGUNA'] ?>" autocomplete="off"</td>
			</tr>
			<tr>
				<th>COV KONSTRUKSI</th>
				<td><input type="text" id="cov_konstruksi" name="cov_konstruksi" size="5"  value="<?php echo $data['COV_KONSTRUKSI'] ?>" autocomplete="off"></td>
			</tr>
		</tbody>
	</table>



