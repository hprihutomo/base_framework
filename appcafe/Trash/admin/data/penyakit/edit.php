<?php
    $id = $_GET['idp'];
    $sql = "SELECT * FROM penyakit WHERE kd_penyakit='$id'";
    $qry = mysql_query($sql, $koneksi) or die ("SQL Error".mysql_error());
    $data = mysql_fetch_array($qry);

    //$kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $penyebab = $_POST['penyebab'];
    $solusi = $_POST['solusi'];

    if (isset($_POST['update'])) {
        $sql ="UPDATE penyakit SET  nm_penyakit = '$nama',penyebab = '$penyebab', solusi = '$solusi' WHERE kd_penyakit ='$id'";
        mysql_query($sql, $koneksi)  or die ("SQL Error".mysql_error());
        $pesan = "<div class='alert alert-success'>DATA TELAH DI UPDATE</div>";
    }

 ?>
<div class="panel panel-primary">
  <div class="panel-heading">
    EDIT GANGGUAN
  </div>
  <div class="panel-body">
    <?php echo $pesan; ?>
      <form class="" method="post">
          <?php include'form.php'; ?>
          <div class="pull-left">
              <a href="?p=penyakit" class="btn btn-sm btn-warning">KEMBALI</a>
          </div>
          <div class="pull-right">
              <button type="submit" name="update" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-check"></i> UPDATE</button>
          </div>
      </form>
  </div>
</div>
