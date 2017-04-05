<?php

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$penyebab = $_POST['penyebab'];
$solusi = $_POST['solusi'];

if (isset($_POST['simpan'])) {
    $sql ="INSERT INTO penyakit (kd_penyakit,nm_penyakit,penyebab,solusi) VALUES ('$kode','$nama','$penyebab','$solusi')";
    mysql_query($sql, $koneksi)  or die ("SQL Error".mysql_error());
    $pesan = "<div class='alert alert-success'>DATA TELAH DI INPUT</div>";
}

 ?>
<div class="panel panel-primary">
  <div class="panel-heading">
    INPUT GANGGUAN
  </div>
  <div class="panel-body">
    <?php echo $pesan; ?>
      <form class="" method="post">
          <?php include'form.php'; ?>
          <div class="pull-left">
              <a href="?p=penyakit" class="btn btn-sm btn-warning">KEMBALI</a>
          </div>
          <div class="pull-right">
              <button type="submit" name="simpan" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-save"></i> SIMPAN</button>
          </div>
      </form>
  </div>
</div>
