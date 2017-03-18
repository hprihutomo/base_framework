
<table class="table table-condensed table-bordered">
				<tr>
					<td><label>DARI </label></td>
					<td><?php echo $setValue['KODE']." ".$setValue['JNSBANK']." ".$setValue['KANTOR'];?></td>
				</tr>
				<tr>
					<td width="200"><label>NOMOR</label></td>
					<td><?php echo $setValue['NOMORPERMOHONAN']?> </td>
				</tr>
				<tr>
					<td><label>PRODUK - JIWA</label></td>
					<td><?php echo $setValue['NAMAPRODUK'] ." - ".$setValue['JIWA']?></td>
				</tr>
				<tr>
					<td><label>TANGGAL PERMOHONAN</label></td>
					<td><?php echo date_idn($setValue['TGLPERMOHONAN'],'j F Y' )?></td>
				</tr>
				<tr>
					<td><label>DIBUAT OLEH</label></td>
					<td><?php echo $setValue['NAMAUSER']?></td>
				</tr>
				
				<!-- <tr >
					<td colspan="2">
					<a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
						<div class="pull-right">
							<form method="post" class="form-inline">
								 <input type="text" name="PIN" placeholder="PIN" autocomplete="false" class="form-control input-sm" autofocus>
								 <button name="KIRIM" id="KIRIM" class="btn btn-sm btn-primary"><i class="fa fa-send"></i> KIRIM</button>
							 </form>
						 </div>
					</td>
				</tr> -->
				
				<!-- <tr>
					<td><label>Nomor Agenda</label></td>
					<td><?php echo $setValue['NOMORAGENDA']?></td>
				</tr>
				<tr>
					<td><label>Tanggal Diterima</label></td>
					<td><?php echo date_idn($setValue['TGLDITERIMA'],'j F Y')?></td>
				</tr>
				<tr>
					<td><label>Disposisi Pertama</label></td>
					<td><?php echo $setValue['DISPOSISIPERTAMA']?></td>
				</tr>
				<tr>
					<td><label>Tanggal Pertama</label></td>
					<td><?php echo date_idn($setValue['TGLPERTAMA'],'j F Y')?></td>
				</tr>
				<tr>
					<td><label>Disposisi Kedua</label></td>
					<td><?php echo $setValue['DISPOSISIKEDUA']?></td>
				</tr>
				<tr>
					<td><label>Tanggal Kedua</label></td>
					<td><?php echo date_idn($setValue['TGLKEDUA'],'j F Y')?></td>
				</tr>
				 -->

			</table>
			<?php 
	require_once "../../layout/form.foot.php";
 ?>