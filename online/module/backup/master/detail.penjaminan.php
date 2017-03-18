<?php

	require_once "../../layout/form.head.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM DRAFT_NASABAH WHERE IDPENJAMINAN = $id";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();
?>
<div class="panel-info">
	<div class="panel-heading">
		<strong>NOMOR PERMOHONAN : </strong><?php echo $data['NOMORPERMOHONAN'] ?> | <strong>TGL PERMOHONAN : </strong><?php echo date_idn($data['TGLPERMOHONAN'],'d M Y'); ?>
	</div>
</div>
<p></p>
<div class="col-lg-3">
	<div class="panel panel-info">
		<div class="panel-heading">
			<strong>BIODATA NASABAH</strong>
		</div>
		<div class="panel-body">
			<table class='table table-bordered table-condensed'>
				<tr>
					<td width="100">NAMA</td>
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
<div class="col-lg-9">
	<div class="panel panel-info">
		<div class="panel-heading">
			<strong>DATA PENJAMINAN</strong>
		</div>
		<div class="panel-body">
		<div class="col-lg-6">
			<table class='table table-bordered table-condensed'>
				<tr>
					<td width="150">NOMOR PK</td>
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
					<td><?php echo $data['MASA']; ?></td>
				</tr>
				<tr>
					<td>COVERAGE</td>
					<td>:</td>
					<td><?php echo $data['COVERAGE']; ?> %</td>
				</tr>
				<tr>
					<td>N. PENJAMINAN</td>
					<td>:</td>
					<td align="right"><?php echo IDR($data['NILAIPENJAMINAN']); ?></td>
				</tr>
				<tr>
					<td>TINGKAT S.B</td>
					<td>:</td>
					<td><?php echo $data['TSB']; ?></td>
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
				<tr>
					<td>TENAGA KERJA</td>
					<td>:</td>
					<td><?php echo $data['TENAGAKERJA']; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-lg-6">
			<table class='table table-bordered table-condensed'>
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
				<tr>
					<td>IJP JIWA(%)</td>
					<td>:</td>
					<td><?php echo round($data['IJPJIWAPERSEN'],2); ?> %</td>
				</tr>
				<tr>
					<td>IJP JIWA</td>
					<td>:</td>
					<td align="right"><?php echo IDR($data['IJPJIWA']); ?></td>
				</tr>
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
					<td>PERUSAHAAN REASS</td>
					<td>:</td>
					<td align="right"><?php echo $data['NAMAREASS']; ?></td>
				</tr>
				<tr>
					<td>SEKTOR</td>
					<td>:</td>
					<td>
						<select name="sektor" id="sektor">
							<?php 
								$query1 = "SELECT * FROM MSSEKTOR";
								$stmt1 = $db->prepare($query1);
								$stmt1->execute();
								foreach ($stmt1->fetchAll() as $key => $value1) {
							 ?>
							<option value="<?php echo $value1['IDSEKTOR'];?>"><?php echo substr($value1['NAMASEKTOR'], 0, 30);?></option>
							<?php } ?>
						</select>
						<?php //echo $data['NAMASEKTOR']; ?>
					</td>
				</tr>	
				<tr>
					<td>PROGRAM KREDIT</td>
					<td>:</td>
					<td>
						<select name="programkredit" id="programkredit">
							<?php 
								$query1 = "SELECT * FROM MSPROGRAMKREDIT";
								$stmt1 = $db->prepare($query1);
								$stmt1->execute();
								foreach ($stmt1->fetchAll() as $key => $value2) {
							 ?>
							<option value="<?php echo $value2['IDPROGRAMKREDIT'];?>"><?php echo $value2['KODEPROGRAMKREDIT']." | ".$value2['PROGRAMKREDIT'];?></option>
							<?php } ?>
						</select>
						<?php// echo $data['KODEPROGRAMKREDIT']." - ".$data['PROGRAMKREDIT']; ?>
					</td>
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

		</div>
		
	</div>

</div>
		<div class="col-lg-12">
		<?php if($data['SLIP']==NULL){ ?>
			<div class="alert alert-danger">BUKTI BELUM DI UPLOAD</div>
		<?php }else{?>
				<img src="../../file.upload/<?php echo $data['SLIP'] ?>" alt="" height="250px" >
			<?php } ?>
		</div>
 <?php
	require_once "../../layout/form.foot.php";
 ?>