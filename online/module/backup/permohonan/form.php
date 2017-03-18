		<table class="table table-condensed table-bordered">
			<tr>
				<td width="150"><label>NOMOR</label></td>
				<td><input type="text" class="form-control input-sm" name="Nomor" autocomplete="off" required value="<?php if($_GET['id']==null){ echo (mt_rand()); }else{ echo $setValue['NOMORPERMOHONAN'];}?>"></td>
			</tr>
			<tr>
				<td><label>TGL PERMOHONAN</label></td>
				<td><input type="date" class="form-control input-sm" name="tglPermohonan" autocomplete="off" required value="<?php echo $setValue['TGLPERMOHONAN']?>"></td>
			</tr>
			<tr>
				<td><label>PRODUK</label></td>
				<td>
					<select name="produk" id="produk" class="form-control input-sm">
						<?php  
							
							foreach ($select->ListProduk() as $key => $value) { 
						?>
						<option value="<?php echo $value['IDPRODUK']; ?>" <?php if($value['IDPRODUK']==$setValue['IDPRODUK']){echo "selected";} ?>><?php echo $value['NAMAPRODUK']; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>PLUS JIWA</label></td>
				<td>
					<select name="jiwa" id="jiwa" class="form-control input-sm">
						<option value="Y" <?php if($value['JIWA']==$setValue['JIWA']){echo "selected";} ?>>YA</option>
						<option value="N" <?php if($value['JIWA']==$setValue['JIWA']){echo "selected";} ?>>TIDAK</option>
					</select>
				</td>
			</tr>
			<!-- <tr>
				<td><label>Bank</label></td>
				<td><input type="text" class="form-control input-sm" name="Bank" required value="<?php echo $setValue['IDBANK']?>"></td>
			</tr> -->
			<!-- <tr>
				<td><label>Nomor Agenda</label></td>
				<td><input type="text" class="form-control input-sm" name="noAgenda" required value="<?php echo $setValue['NOMORAGENDA']?>"></td>
			</tr> -->
			<!-- <tr>
				<td><label>Tanggal Diterima</label></td>
				<td><input type="date" class="form-control input-sm" name="tglDiterima" required value="<?php echo $setValue['TGLDITERIMA']?>"></td>
			</tr>
 -->			<!-- <tr>
				<td><label>Disposisi Pertama</label></td>
				<td><textarea class="form-control input-sm" name="dispPertama" required ><?php echo $setValue['DISPOSISIPERTAMA']?></textarea></td>
			</tr>
			<tr>
				<td><label>Tanggal Pertama</label></td>
				<td><input type="date" class="form-control input-sm" name="tgldisp_1" required value="<?php echo $setValue['TGLPERTAMA']?>"></td>
			</tr>
			<tr>
				<td><label>Disposisi Kedua</label></td>
				<td><textarea class="form-control input-sm" name="dispKedua" required ><?php echo $setValue['DISPOSISIKEDUA']?></textarea></td>
			</tr>
			<tr>
				<td><label>Tanggal Kedua</label></td>
				<td><input type="date" class="form-control input-sm" name="tgldisp_2" required value="<?php echo $setValue['TGLKEDUA']?>"></td>
			</tr> -->

		</table>
