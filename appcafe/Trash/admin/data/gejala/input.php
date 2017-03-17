<?php
    $kode = $_POST['kode'];
    $gejala = $_POST['gejala'];

    if (isset($_POST['simpan'])) {
        $sql ="INSERT INTO gejala (kd_gejala,nm_gejala) VALUES ('$kode','$gejala')";
		    mysql_query($sql, $koneksi)  or die ("SQL Error".mysql_error());
        $pesan = "<div class='alert alert-success'>DATA TELAH DI INPUT</div>";
    }
 ?>
<div class="panel panel-primary">
  <div class="panel-heading">
    INPUT GEJALA
  </div>
  <div class="panel-body">
    <?php echo $pesan; ?>
      <form method="post">
          <?php include'form.php'; ?>
          <div class="pull-left">
              <a href="?p=gejala" class="btn btn-sm btn-warning">KEMBALI</a>
          </div>
          <div class="pull-right">
              <button type="submit" name="simpan" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-save"></i> SIMPAN</button>
          </div>
      </form>
  </div>
</div>
