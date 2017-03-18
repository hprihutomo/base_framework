<?php

	require_once "../../layout/form.head.php";
	$id = $_GET['id'];
	$query2 = "SELECT * FROM MSBERKAS WHERE IDPENJAMINAN = $id";
	$stmt2 = $db->prepare($query2);
	$stmt2->execute();
	$value = $stmt2->fetch();
	?>
<div class="panel panel-warning">
	<div class="panel-heading">BERKAS (A-3)</div>
	<div class="panel-body">
	<?php echo $pesan; ?>
	<form action="" method="post">
		<table class='table table-bordered table-condensed'>
			<tr>
				<td width="50" class="text-center">NO</td>
				<td class="text-center">NAMA DOKUMEN</td>
				<td class="text-center" width="50">STATUS</td>
				<td class="text-center" width="150">KET</td>
			</tr>
			<tr>
				<td>A</td>
				<td>PERORANGAN</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>1</td>
				<td>INDENTITAS (KTP)</td>
				<td class="text-center"><input type="text" name="identitas" value="<?php if($value['IDENTITAS']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketIdentitas" value="<?php echo $value['KET_IDENTITAS'];?>"></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Legalitas Nasabah</td>
				<td class="text-center"><input type="text" name="legalitas" value="<?php if($value['LEGALITAS']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketLegalitas" value="<?php echo $value['KET_LEGALITAS'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>a.Akta Pendirian</td>
				<td class="text-center"><input type="text" name="akta" value="<?php if($value['AKTA']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketAkta" value="<?php echo $value['KET_AKTA'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>b.NPWP</td>
				<td class="text-center"><input type="text" name="npwp" value="<?php if($value['NPWP']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketNpwp" value="<?php echo $value['KET_NPWP'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>c.SITU, SIUP & TDP</td>
				<td class="text-center"><input type="text" name="situ" value="<?php if($value['SITU']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketSitu" value="<?php echo $value['KET_SITU'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>d.Surat Ijin Usaha</td>
				<td class="text-center"><input type="text" name="siu" value="<?php if($value['SIU']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketSiu" value="<?php echo $value['KET_SIU'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>e.Sertifikat Badan Usaha</td>
				<td class="text-center"><input type="text" name="sbu" value="<?php if($value['SBU']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketSbu" value="<?php echo $value['KET_SBU'];?>"></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Analisa Yuridis(MPK)</td>
				<td class="text-center"><input type="text" name="mpk" value="<?php if($value['MPK']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketMpk" value="<?php echo $value['KET_MPK'];?>"></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Laporan Penilaian Agunan</td>
				<td class="text-center"><input type="text" name="lpa" value="<?php if($value['LPA']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketLpa" value="<?php echo $value['KET_LPA'];?>"></td>
			</tr>
			<tr>
				<td>5</td>
				<td>Perjanjian Kredit beserta perubahannya</td>
				<td class="text-center"><input type="text" name="pk" value="<?php if($value['PK']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketPk" value="<?php echo $value['KET_PK'];?>"></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Bukti Pencarian Kredit</td>
				<td class="text-center"><input type="text" name="bpk" value="<?php if($value['BPK']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketBpk" value="<?php echo $value['KET_BPK'];?>"></td>
			</tr>
			<tr>
				<td>7</td>
				<td>SPPK / Offering Letter</td>
				<td class="text-center"><input type="text" name="sppk" value="<?php if($value['']=='1'){echo "Ada";}else{ echo "Tidak Ada";} ?>" size="7" ></td>
				<td><input type="text" name="ketSppk" value="<?php echo $value['KET_SPPK'];?>"></td>
			</tr>
		</table>
		<!-- <br>
		<a href="javascript:void(0)" onclick="window.close()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
		<div class="pull-right">
					<button type="submit" name="simpan" id="simpan" class="btn btn-sm btn-success"><i class="fa fa-save"></i> SIMPAN</button>
					<button type="reset" name="reset" id="reset" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> KOSONGKAN</button>
				</div> -->
		</form>
	</div>

</div>
<?php
	require_once "../../layout/form.foot.php";
?>