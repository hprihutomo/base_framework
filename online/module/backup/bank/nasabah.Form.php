<div class="row">
<div class="col-lg-4">
	<table class="table table-condensed table-bordered">
			<tbody>
				<tr>
					<td colspan="2" class="text-center">
						<a href="javascript:void(0)" onclick="Popup('../../module/master/search.nasabah.php?prdk=<?php echo $idproduk; ?>', '', '800','400')" class="btn btn-sm btn-info"><i class="fa fa-check"></i> PILIH NASABAH</a>
					</td>
				</tr>
				<tr>
					<td>NO. IDENTITAS</td>
					<td>
						<input type="hidden" 	 name="idnasabah" id="idnasabah" value="">
						<input type="text"   name="noidentitas" id="noidentitas" autocomplete="off" readonly>
					</td>
				</tr>
				<tr>
					<td>JENIS IDENTITAS</td>
					<td>
						<input type="text"   name="jnsidentitas" id="jnsidentitas" autocomplete="off" readonly>
					</td>
				</tr>
			<tr>
				<td>NAMA LENGKAP</td>
				<td><input type="text"  name="nama_nasabah" id="nama_nasabah" autocomplete="off" readonly></td>
			</tr>
			<tr>
				<td>INSTANSI</td>
				<td>
					<input type="text" name="instansi" id="instansi"  >
				</td>
			</tr>
			<tr>
				<td>PEKERJAAN</td>
				<td>
					<input type="text" name="pekerjaan" id="pekerjaan"  >
				</td>
			</tr>

			<?php if ('1'==$idproduk){ ?>
				<input name="covBank" id="covBank" type="hidden" value="<?php echo $c_produktif ?>">
				<input  name="tblBank" id="tblBank" type="hidden" value="<?php echo $t_produktif ?>">
			<?php }elseif ('2'==$idproduk) { ?>
				<input name="covBank" id="covBank" type="hidden" value="<?php echo $c_multiguna ?>">
				<input  name="tblBank" id="tblBank" type="hidden" value="<?php echo $t_multiguna ?>">
			<?php }elseif ('3'==$idproduk) { ?>
				<input name="covBank" id="covBank" type="hidden" value="<?php echo $c_konstruksi ?>">
				<input  name="tblBank" id="tblBank" type="hidden" value="<?php echo $t_konstruksi ?>">
			<?php } ?>
			
			<!--<<tr>
				<td>ALAMAT</td>
				<td><textarea rows="3" name="alamat" id="alamat"></textarea></td>
			</tr>
			<?php //if ($_GET['act'] == 'B') { ?>
			 <tr>
				<td>UPLOAD IDENTITAS</td>
				<td><input type="file" name="identitas" id="identitas"  ></td>
			</tr> -->
			<?php //}else { echo "";} ?>
			<tr>
				<td>ALAMAT</td>
				<td><textarea  name="alamat" id="alamat"></textarea></td>
			</tr>
			<!-- <tr>
				<td>PRODUK</td>
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
				<td>PLUS JIWA</td>
				<td>
					<select name="jiwa" >
						<option value="Y">YA</option>
						<option value="N" selected="true">TIDAK</option>
					</select>
				</td>
			</tr> -->
				<tr>
					<td colspan="2"><b>GUNAKAN TOMBOL <i>"TAB"</i> UNTUK PINDAH INPUT TEXT</b></td>
				</tr>
			</tbody>
		</table>
</div>
<div class="col-lg-4">
	<table class="table table-condensed table-bordered">
		<tbody>
			<tr>
				<td>NO. PK</td>
				<td><input type="text" name="nomorpk" id="nomorpk" autocomplete="off" ></td>
			</tr>
			<tr>
				<td>TGL. PK</td>
				<td><input type="date"  name="tglpk" id="tglpk" autocomplete="off" ></td>
			</tr>
			<tr>
				<td>PLAFON KREDIT</td>
				<td><input type="text"  name="plafond" id="plafond" autocomplete="off" ></td>
			</tr>
			<tr>
				<td>COVERAGE (%)</td>
				<td><input type="text"  name="coverage" id="coverage" autocomplete="off" ></td>
			</tr>
			<tr>
				<td>MASA (Bulan)</td>
				<td><input type="text"  name="masa" id="masa" autocomplete="off"></td>
			</tr>
			<tr>
				<td>TINGKAT. SB (%)</td>
				<td><input type="text"  name="TSB" id="TSB" autocomplete="off" ></td>
			</tr>
			<tr>
				<td>IJP (%)</td>
					<input type="hidden"  name="tarifmax" id="tarifmax">
				<td><input type="text"  name="p_ijp" id="p_ijp"  autocomplete="off"></td>
			</tr>
			<tr>
				<td>IMBAL JASA</td>
				<td>
					<input type="text"  name="ijp" id="ijp"  autocomplete="off">
					<!-- <input type="text" name="ijpjiwa" id="ijpjiwa" value="0"> -->
				</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="col-lg-4">
	<table class="table table-condensed table-bordered">
		<tbody>
		<?php if($value['NAMAPRODUK']=='PRODUKTIF') {?>
			<tr>
				<td>TENAGA KERJA</td>
				<td><input type="text"  name="tenagakerja" id="tenagakerja" autocomplete="off" ></td>
			</tr>
		<?php }elseif($value['NAMAPRODUK']=='MULTIGUNA'){ echo "";} ?>
			<tr>
				<td>PENGHASILAN</td>
				<td><input type="text"  name="penghasilan" id="penghasilan" autocomplete="off" ></td>
			</tr>
			<tr>
				<td>JENIS KREDIT</td>
				<td>
					<select  id="jnskredit" name="jnskredit" >
		                <option>----------</option>
		                <option>MODAL KERJA</option>
		                <option>INVESTASI</option>
	              	</select>
				</td>
			</tr>
			<tr>
				<td>PENGGUNAAN</td>
				<td><textarea  name="penggunaan" id="penggunaan" rows="2"></textarea></td>
			</tr>
			<tr>
				<td>DESKRIPSI</td>
				<td><textarea  name="deskripsi" id="deskripsi" rows="4"></textarea></td>
			</tr>
		</tbody>
	</table>

</div>

</div>
				<!-- <tr>
					<td>NO. PERMOHONAN</td>
					<td><input type="text"  value=""></td>
				</tr>
				<tr>
					<td>TGL. PERMOHONAN</td>
					<td><input type="text"  value=""></td>
				</tr> -->
<!-- <div class="row">

<div class="col-lg-4">
	<table class="table table-condensed table-bordered">
		<tbody>
			
		</tbody>
	</table>

</div>
<div class="col-lg-4">
	<table class="table table-condensed table-bordered">
		<tbody>
			<tr>
				<td>PENGHASILAN</td>
				<td><input type="text" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" </td>
			</tr>
			
		</tbody>
	</table>

</div>
</div> -->