<?php

	require_once "../../layout/form.head.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPENJAMINAN = $id";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	$query2 = "SELECT * FROM MSBERKAS WHERE IDPENJAMINAN = $id";
	$stmt2 = $db->prepare($query2);
	$stmt2->execute();
	$value = $stmt2->fetch();


	if (isset($_POST['simpan'])) {
		$query = "INSERT INTO MSBERKAS (IDPENJAMINAN,IDENTITAS,KET_IDENTITAS,LEGALITAS,KET_LEGALITAS,AKTA,KET_AKTA,NPWP,KET_NPWP,SITU,KET_SITU,SIU,KET_SIU,SBU,KET_SBU,MPK,KET_MPK,LPA,KET_LPA,PK,KET_PK,BPK,KET_BPK,SPPK,KET_SPPK)
					VALUES (:idpenjaminan,:identitas,:ketIdentitas,:legalitas,:ketLegalitas,:akta,:ketAkta,:npwp,:ketNpwp,:situ,:ketSitu,:siu,:ketSiu,:sbu,:ketSbu,:mpk,:ketMpk,:lpa,:ketLpa,:pk,:ketPk,:bpk,:ketBpk,:sppk,:ketSppk)";
		$stmt = $db->prepare($query);
		$stmt->bindParam(':idpenjaminan',$id);
		$stmt->bindParam(':identitas', $_POST['identitas']);
		$stmt->bindParam(':ketIdentitas',$_POST['ketIdentitas']);
		$stmt->bindParam(':legalitas',$_POST['legalitas']);
		$stmt->bindParam(':ketLegalitas',$_POST['ketLegalitas']);
		$stmt->bindParam(':akta',$_POST['akta']);
		$stmt->bindParam(':ketAkta',$_POST['ketAkta']);
		$stmt->bindParam(':npwp',$_POST['npwp']);
		$stmt->bindParam(':ketNpwp',$_POST['ketNpwp']);
		$stmt->bindParam(':situ',$_POST['situ']);
		$stmt->bindParam(':ketSitu',$_POST['ketSitu']);
		$stmt->bindParam(':siu',$_POST['siu']);
		$stmt->bindParam(':ketSiu',$_POST['ketSiu']);
		$stmt->bindParam(':sbu',$_POST['sbu']);
		$stmt->bindParam(':ketSbu',$_POST['ketSbu']);
		$stmt->bindParam(':mpk',$_POST['mpk']);
		$stmt->bindParam(':ketMpk',$_POST['ketMpk']);
		$stmt->bindParam(':lpa',$_POST['lpa']);
		$stmt->bindParam(':ketLpa',$_POST['ketLpa']);
		$stmt->bindParam(':pk',$_POST['pk']);
		$stmt->bindParam(':ketPk',$_POST['ketPk']);
		$stmt->bindParam(':bpk',$_POST['bpk']);
		$stmt->bindParam(':ketBpk',$_POST['ketBpk']);
		$stmt->bindParam(':sppk',$_POST['sppk']);
		$stmt->bindParam(':ketSppk',$_POST['ketSppk']);
		$action = $stmt->execute();

		if($action){
			$pesan = "<div class='alert alert-success'> BERHASIL </div>";
		}else{
			$pesan = "<div class='alert alert-danger'>GAGAL </div>";
		}

	}
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
				<td class="text-center"><input type="checkbox" name="identitas" <?php if($value['IDENTITAS']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketIdentitas" value="<?php echo $value['KET_IDENTITAS'];?>"></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Legalitas Nasabah</td>
				<td class="text-center"><input type="checkbox" name="legalitas" <?php if($value['LEGALITAS']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketLegalitas" value="<?php echo $value['KET_LEGALITAS'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>a.Akta Pendirian</td>
				<td class="text-center"><input type="checkbox" name="akta" <?php if($value['AKTA']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketAkta" value="<?php echo $value['KET_AKTA'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>b.NPWP</td>
				<td class="text-center"><input type="checkbox" name="npwp" <?php if($value['NPWP']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketNpwp" value="<?php echo $value['KET_NPWP'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>c.SITU, SIUP & TDP</td>
				<td class="text-center"><input type="checkbox" name="situ" <?php if($value['SITU']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketSitu" value="<?php echo $value['KET_SITU'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>d.Surat Ijin Usaha</td>
				<td class="text-center"><input type="checkbox" name="siu" <?php if($value['SIU']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketSiu" value="<?php echo $value['KET_SIU'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>e.Sertifikat Badan Usaha</td>
				<td class="text-center"><input type="checkbox" name="sbu" <?php if($value['SBU']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketSbu" value="<?php echo $value['KET_SBU'];?>"></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Analisa Yuridis(MPK)</td>
				<td class="text-center"><input type="checkbox" name="mpk" <?php if($value['MPK']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketMpk" value="<?php echo $value['KET_MPK'];?>"></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Laporan Penilaian Agunan</td>
				<td class="text-center"><input type="checkbox" name="lpa" <?php if($value['LPA']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketLpa" value="<?php echo $value['KET_LPA'];?>"></td>
			</tr>
			<tr>
				<td>5</td>
				<td>Perjanjian Kredit beserta perubahannya</td>
				<td class="text-center"><input type="checkbox" name="pk" <?php if($value['PK']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketPk" value="<?php echo $value['KET_PK'];?>"></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Bukti Pencarian Kredit</td>
				<td class="text-center"><input type="checkbox" name="bpk" <?php if($value['BPK']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketBpk" value="<?php echo $value['KET_BPK'];?>"></td>
			</tr>
			<tr>
				<td>7</td>
				<td>SPPK / Offering Letter</td>
				<td class="text-center"><input type="checkbox" name="sppk" <?php if($value['']=='1'){echo "checked";} ?> value="1"></td>
				<td><input type="text" name="ketSppk" value="<?php echo $value['KET_SPPK'];?>"></td>
			</tr>
		</table>
		<br>
		<a href="javascript:void(0)" onclick="window.close()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
		<div class="pull-right">
					<button type="submit" name="simpan" id="simpan" class="btn btn-sm btn-success"><i class="fa fa-save"></i> SIMPAN</button>
					<button type="reset" name="reset" id="reset" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> KOSONGKAN</button>
				</div>
		</form>
	</div>

</div>
<?php
	require_once "../../layout/form.foot.php";
?>