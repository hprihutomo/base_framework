<?php

	require_once "../../layout/form.head.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPENJAMINAN = $id";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();
?>
<div class="panel-primary">
	<div class="panel-heading">
		NOMOR PERMOHONAN : <?php echo $data['NOMORPERMOHONAN'] ?> | TGL PERMOHONAN : <?php echo date_idn($data['TGLPERMOHONAN'],'d M Y'); ?>
	</div>
</div>
<p></p>
<div class="panel-body">
<div class="col-lg-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			BIODATA NASABAH
		</div>
		<div class="panel-body">
			<table class='table table-bordered table-condensed'>
				<tr>
					<td>NAMA LENGKAP</td>
					<td>:</td>
					<td><?php echo $data['NAMADEPAN']." ".$data['NAMABELAKANG'] ?></td>
				</tr>
				<tr>
					<td>NO IDENTITAS</td>
					<td>:</td>
					<td><?php echo $data['NOIDENTITAS'] ?></td>
				</tr>	
				<tr>
					<td>IDENTITAS</td>
					<td>:</td>
					<td><?php echo $data['JNSIDENTITAS'] ?></td>
				</tr>	
				<tr>
					<td>TGL LAHIR</td>
					<td>:</td>
					<td><?php echo date_idn($data['TGL_LAHIR'],'d M Y'); ?></td>
				</tr>
				<tr>
					<td>ALAMAT</td>
					<td>:</td>
					<td><?php echo $data['ALAMATNASABAH']; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="col-lg-8">
	<div class="panel panel-primary">
		<div class="panel-heading">
			DATA PENJAMINAN
		</div>
		<div class="panel-body">
		<div class="col-lg-6">
			<table class='table table-bordered table-condensed'>
				<tr>
					<td>NOMOR PK</td>
					<td>:</td>
					<td><?php echo $data['NOMOR_PK'] ?></td>
				</tr>
				<tr>
					<td>TGL PK</td>
					<td>:</td>
					<td><?php echo date_idn($data['TGL_PK'],'d M Y') ?></td>
				</tr>	
				<tr>
					<td>PLAFOND</td>
					<td>:</td>
					<td align="right"><?php echo IDR($data['PLAFONDKREDIT']) ?></td>
				</tr>	
				<tr>
					<td>MASA</td>
					<td>:</td>
					<td><?php echo $data['MASA']; ?> BULAN</td>
				</tr>
				<tr>
					<td>COVERAGE</td>
					<td>:</td>
					<td><?php echo $data['COVERAGE']; ?> %</td>
				</tr>
				<tr>
					<td>NILAI PENJAMINAN</td>
					<td>:</td>
					<td align="right"><?php echo IDR($data['NILAIPENJAMINAN']); ?></td>
				</tr>
				<tr>
					<td>TINGKAT S.B</td>
					<td>:</td>
					<td><?php echo $data['TSB']; ?> %</td>
				</tr>
				<tr>
					<td>IJP (%)</td>
					<td>:</td>
					<td><?php echo round($data['IJPPERSEN'],2); ?> %</td>
				</tr>
				<tr>
					<td>IJP</td>
					<td>:</td>
					<td align="right"><?php echo IDR($data['IJP']); ?></td>
				</tr>				
			</table>
		</div>
		<div class="col-lg-6">
			<table class='table table-bordered table-condensed'>
			<tr>
					<td>IJP REASS (%)</td>
					<td>:</td>
					<td><?php echo round($data['IJPREASPERSEN'],3); ?> %</td>
				</tr>
				<tr>
					<td>IJP REASS</td>
					<td>:</td>
					<td align="right"><?php echo IDR($data['IJPREAS']); ?></td>
				</tr>
				<tr>
					<td>IJP JIWA(%)</td>
					<td>:</td>
					<td><?php echo round($data['IJPJIWAPERSEN'],2); ?> %</td>
				</tr>
				<tr>
					<td>IJP JIWA</td>
					<td>:</td>
					<td align="right">Rp <?php echo IDR($data['IJPJIWA']); ?></td>
				</tr>
				<tr>
					<td>JATUH TEMPO</td>
					<td>:</td>
					<td><?php echo date_idn($data['JATUHTEMPO'],'d M Y'); ?></td>
				</tr>	
				<tr>
					<td>JENIS KREDIT</td>
					<td>:</td>
					<td><?php echo $data['JENISKREDIT'] ?></td>
				</tr>
				<tr>
					<td>PENGGUNAAN</td>
					<td>:</td>
					<td><?php echo $data['PENGGUNAAN']; ?></td>
				</tr>
				<!-- <tr>
					<td>SEKTOR</td>
					<td>:</td>
					<td><?php echo $data['NAMASEKTOR']; ?></td>
				</tr>	
				<tr>
					<td>PROGRAM KREDIT</td>
					<td>:</td>
					<td><?php echo $data['KODEPROGRAMKREDIT']." - ".$data['PROGRAMKREDIT']; ?></td>
				</tr> -->
				<tr>
					<td>TENAGA KERJA</td>
					<td>:</td>
					<td><?php echo $data['TENAGAKERJA']; ?></td>
				</tr>
				<tr>
					<td>PENGHASILAN</td>
					<td>:</td>
					<td align="right"><?php echo IDR($data['PENGHASILAN']); ?></td>
				</tr>
				<tr>
					<td>DESKRIPSI</td>
					<td>:</td>
					<td><?php echo $data['DESKRIPSI'] ?></td>
				</tr>
			</table>
		</div>
		<div class="pull-right">
			<?php if ($data['JIWA'] == 'Y'): ?>
				<a href="javascript:void(0)" onclick="Popup('../menrisk/input.reass.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '800','400')" class="btn btn-warning btn-sm">
					<i class="fa fa-plus"></i> 
					INPUT REASS
				</a>
				<a href="javascript:void(0)" onclick="Popup('../dokumen/memo.reas.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-success btn-sm">
					<i class="fa fa-file"></i> 
					MEMO REAS
				</a>
				<?php endif ?>
				<a href="javascript:void(0)" onclick="Popup('../penjaminan/review.berkas.php?id=<?php echo $data['IDPENJAMINAN'] ?>', '', '1300','700')" class="btn btn-primary btn-sm">
					<i class="fa fa-file"></i> 
					BERKAS
				</a>
			</div>
		</div>

	</div>

</div>
<div class="col-lg-12">
<div class="panel-primary">
	<div class="panel-heading">SLIP</div>
	<div class="panel-body">

		<?php if($data['SLIP']==NULL){ ?>
			<div class="alert alert-danger">BUKTI BELUM DI UPLOAD</div>
		<?php }else{?>
				<img src="../../file.upload/<?php echo $data['SLIP'] ?>" alt="" height="250px" class="text-center" >
			<?php } ?>
		</div>
	</div>
</div>		
</div>
</div>
<?php
	
	require_once "../../layout/form.foot.php";
?>