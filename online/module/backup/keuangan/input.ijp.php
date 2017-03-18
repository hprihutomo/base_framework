<?php

  require_once "../../layout/form.head.php";

  $id = $_GET['id'];
  $query = "SELECT * FROM CEK_IJP WHERE IDPENJAMINAN = $id";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $data = $stmt->fetch();

if (isset($_POST['simpan'])) {

  $update = "UPDATE MSPENJAMINAN SET IJPDITERIMA = :ijpditerima, IJPSELISIH = :ijpselisih, TGL_IJP_DITERIMA = :tglijpditerima WHERE IDPENJAMINAN = :idpenjaminan";
  $smt = $db->prepare($update);
  $smt->bindParam(':ijpditerima',$_POST['nilai_ijp_diterima']);
  $smt->bindParam(':ijpselisih',$_POST['selisih']);
  $smt->bindParam(':tglijpditerima',$_POST['tgl_diterima']);
  $smt->bindParam(':idpenjaminan',$id);
  $action = $smt->execute();
         if($action){
              $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
           }else{
              $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
           }
}
?>

<form id="forms" method="POST" class="form-horizontal">
<br>
<div class="col-lg-12">
<?php echo $pesan;?>
<div class="panel panel-default">
<div class="panel-heading"><strong>INPUT IJP</strong></div>
<div class="panel-body">
	 <table class="table table-condensed">
      <tr>
          <td><label for="inputPassword3" class="control-label">NAMA NASABAH</label></td>
          <td>
            <!-- <input type="hidden" id="id_umkm_penjaminan"   name="id_umkm_penjaminan"    value="<?php echo $dat->idPenjaminan;?>" -->
            <input type="text"   id="nama_nasabah"  name="nama_nasabah"   readonly value="<?php echo $data['NAMADEPAN']." ".$data['NAMABELAKANG'];?>">
          </td>
        </tr>
        <tr>
          <td><label for="inputEmail3" class="control-label">IJP</label></td>
          <td>
          		<!-- <input type="text" id="nilai_ijp"  name="nilai_ijp"  readonly value="<?php //echo rp($dat->IjpTotal);?>"> -->
          		<input type="text" id="n_ijp"  name="n_ijp"  readonly value="<?php echo $data['IJPTOTAL'];?>">
          </td>
        </tr>
        <tr>
          <td><label for="inputEmail3" class="control-label">IJP DTERIMA</label></td>
          <td>
          		<input type="text" id="nilai_ijp_diterima"  autofocus name="nilai_ijp_diterima" >
          		<input type="hidden" id="n_ijp_diterima"  name="n_ijp_diterima" >
          </td>
        </tr>
        <tr>
          <td><label for="inputEmail3" class="control-label">SELISIH</label></td>
          <td><input type="text" id="selisih"  name="selisih"  readonly="true"></td>
        </tr>
        <tr>
          <td><label for="inputEmail3" class="control-label">TGL DITERIMA</label></td>
          <td><input type="date" id="tgl_diterima"  name="tgl_diterima" ></td>
        </tr>
      </table>
      <a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
      					<div class="pull-right">
                            <button type="submit" name="simpan" id="simpan" class="btn btn-sm btn-success"><i class="fa fa-save fa-fw"></i> SAVE</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-remove fa-fw"></i> RESET</button>
                        </div>
</div>
</div>
</div>
</form>
<?php
  require_once "../../layout/form.foot.php";
?>