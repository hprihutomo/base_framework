<?php 
	if (isset($_POST['proses'])) {
   // $NOAGENDA = $_POST['NOAGENDA'];
    //$TGLAGENDA = $_POST['TGLAGENDA'];
    try {
            $query = "UPDATE MSPERMOHONAN SET NOAGENDA = '".$_POST['NOAGENDA']."', TGLAGENDA = '".$_POST['TGLAGENDA']."' WHERE IDPERMOHONAN = '".$_GET['id']."'";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $pesan = "<div class='alert alert-success'> BERHASIL </div>";
    } catch (PDOException $e) {
        $pesan = "<div class='alert alert-danger'>GAGAL </div>";
    }
}
 ?>
<?php echo $pesan; ?>
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
				
				

			</table>
			<form method="post" class="form-inline">
			<table class="table table-condensed table-bordered">
				<tr>
					<td width="200"><label>NOMOR AGENDA</label></td>
					<td><input type="text" name="NOAGENDA" value="<?php echo $setValue['NOAGENDA'];?>"  > </td>
				</tr>
				<tr>
					<td><label>TANGGAL AGENDA</label></td>
					<td><input type="date" name="TGLAGENDA" value="<?php echo $setValue['TGLAGENDA'];?>" > </td>
				</tr>
				<tr >
					<td colspan="2">
					
						<div class="pull-right">
							
								<!--  <input type="text" name="PIN" placeholder="PIN" autocomplete="false" class="form-control input-sm" autofocus> -->
								 <button name="proses" id="proses" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> SIMPAN</button>
							
						 </div>
					</td>
				</tr>
				<!-- <tr>
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
				</tr> -->
				
			</table> 
			</form>
			<?php 
	require_once "../../layout/form.foot.php";
 ?>