<?php 
  require_once "../../layout/form.head.php";
	$query = "SELECT * FROM DATA_PERMOHONAN WHERE IDPERMOHONAN = '".$_GET['id']."'";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	if (isset($_POST['proses'])) {
		try {
			$query = "UPDATE MSPERMOHONAN SET STATUSPERMOHONAN = 'VALID' WHERE IDPERMOHONAN = '".$_GET['id']."'";
			$stmt = $db->prepare($query);
			$stmt->execute();
		} catch (PDOException $e) {
			
		}
		
	}
 ?>
<div class="panel panel-default">
<div class="panel-heading"> <i class='fa fa-cogs fa-fw'></i> PENOMORAN <?php echo $data->tglPermohonan;?></div>
<div class="panel-body">
<form id="forms" name="forms" method="POST" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>?id=<?=$_GET['id'];?>')" class="form-horizontal">
    <div class="col-lg-12 ">
    <div class="form-group">
    <input type="hidden" name="id_umkm_permohonan" id="id_umkm_permohonan" value="<?php echo $_GET['id']?>"/>
        <label for="inputEmail3" class="col-sm-2 control-label">NOMOR SP</label>
            <div class="col-sm-1">
              <select name="kode_sertifikat">
                <option>----------</option>
                <option>MIK</option>
                <option>KCL</option>
                <option>KUM</option>
              </select>
          </div>
          <div class="col-sm-1">
          <?php
                 // $no_auto = autonumberDBSYS('Nomor','msSertifikat');
                 // $auto_no = sprintf("%04d", $no_auto);
          ?>
            <input type="text" size="5" id="inputEmail3" name="nomor_sertifikat" value="<?php echo "$auto_no"; ?>">
        </div>
        <div class="col-sm-1">

            <!--<input type="hidden" name="id_kota" id="id_kota" value=""/>-->
            <input type="text" size="5" id="inputEmail3"  name="kode_kota" value="<?php echo $data->kode_kota?>" readonly>
        </div>
        <div class="col-sm-1">
              <input type="text" size="5" id="inputEmail3"  name="bulan" value="<?php echo date_idn($data->tglMasuk,'m');?>" readonly>
        </div>
        <div class="col-sm-1">
              <input type="text" size="5" id="inputEmail3"  name="tahun" value="<?php echo  date_idn($data->tglMasuk,'Y');?>" readonly>
        </div>
        <div class="col-sm-1">
              <input type="text" size="5" id="inputEmail3"  name="Reass" value="<?php if($data->PlusJiwa==1){ echo "JW";}else{echo "";};?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">TGL. TERBIT</label>
          <div class="col-sm-4">
              <input type="hidden" size="5" id="inputEmail3"  value="<?php echo date('d F Y');?>" readonly>
              <input type="date" class="form-control input-sm " id="inputEmail3"  name="tgl_sertifikat" value="<?php echo date('d/m/Y');?>">
          </div>
      </div>
      <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">TTD KIRI</label>
          <div class="col-sm-4">
              <select id="id_ttd_kiri" name="id_ttd_kiri" >
                <option><?php echo $data2->nama_direksi." | ". $data2->jabatan_direksi;?></option>
          </select>
          </div>
        <label for="inputPassword3" class="col-sm-2 control-label">TTD KANAN</label>
          <div class="col-sm-4">
          <select id="id_ttd_kanan" name="id_ttd_kanan" >
                <option <?php if($data1->id_direksi=='2'){echo "selected";}?>><?php echo $data1->nama_direksi." | ". $data1->jabatan_direksi;?></option>
          </select>

          </div>
      </div>
          <div class="col-sm-offset-2 col-sm-5">
              <div class="col-sm-12">
              <button type="submit" class="btn btn-sm btn-success" id="simpan" name="simpan" ><i class="glyphicon glyphicon-save"></i> Save</button>
              <a onClick="window.close();"class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
          </div>
         </div>
      </div>
    </form>
</div>

</div>
</div>
<div class="col-lg-12">
<Strong>MIK</Strong> = <?php echo $dat->code;?>  NASABAH || <strong>KCL</strong> = <?php echo $datq->code;?> NASABAH || <strong>KUM</strong> = <?php echo $datk->code;?> NASABAH
<table class="table table-striped table-bordered table-hover table-condensed">

  <thead>
    <tr>
      <th width="150">Aksi</th>
      <th>Nomor</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <td>
           <a class="btn btn-sm btn-<?php if($data->p2 == '1'){ echo "primary";} else { echo "success";}?>"
              onClick=window.open('../../module/produktif/pilihNasabah.php?no=<?php echo $datas->idSertifikat?>&id=<?php echo $datas->idPermohonan?>','','width=1200,height=400')
              <?php if($datas->k_analis == '1'){ echo "disabled";}?>><i class="glyphicon glyphicon-paste"></i> Pilih Nasabah</a>
       </td>
      <td><strong><?php echo $datas->kodeSertifikat; ?></strong></td>
    </tr>
    <?php //} ?>
  </tbody>
</table>
<div class="pull-right">
<form  method="post"><button align="center" class="btn btn-xs btn-primary" name="proses"><i class="fa fa-send fa-fw"></i> PERMINTAAN VERIFIKASI</button>
</form></div>
<!-- href="#" onclick=window.open('../../module/produktif/permintaan_verifikasi.php?id=<?php echo $_GET['id'];?>','','width=900,height=600'); -->
<div class="pull-left">
          <a onclick='tutup()' class="btn btn-xs btn-danger"><i class="fa fa-arrow-left fa-fw"></i> SELESAI</a>
        </div>
 <?php
require_once "../../layout/form.foot.php";
?>