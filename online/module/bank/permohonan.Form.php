		<table class="table table-condensed table-bordered">
			<tr>
				<td width="150"><label>NO. PERMOHONAN</label></td>
				<td><input type="text"  name="Nomor" required value="" autocomplete="off"></td>
			</tr>
			<tr>
				<td><label>TGL PERMOHONAN</label></td>
				<td><input type="date"  name="tglPermohonan" required autocomplete="off"></td>
			</tr>
			<tr>
				<td><label>PERMOHONAN</label></td>
				<td>
					<select name="produk" >
					<?php 
						$produk = new componentForm($db);
						foreach ($produk->listProduk() as $key => $value) {
					?>
						<option value="<?php echo $value['IDPRODUK'] ?>"> <?php echo $value['NAMAPRODUK'] ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>PLUS JIWA</label></td>
				<td>
					<select name="jiwa" >
						<option value="Y">YA</option>
						<option value="N" selected="true">TIDAK</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<div class="pull-right">
						<label>PIN</label>
						<input type="password"  name="PIN" required>
					</div>
				</td>
			</tr>
		</table>
