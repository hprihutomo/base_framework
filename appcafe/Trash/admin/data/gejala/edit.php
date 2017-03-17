<?php
    $kode = $_POST['kode'];
    $gejala = $_POST['gejala'];
    $id = $_GET['id'];

  $sql = "SELECT * FROM gejala WHERE kd_gejala='$id'";
	$qry = mysql_query($sql, $koneksi) or die ("SQL Error".mysql_error());
	$data=mysql_fetch_array($qry);

    if (isset($_POST['update'])) {
        $sql ="UPDATE gejala SET  nm_gejala = '$gejala' WHERE kd_gejala ='$id'";
		    mysql_query($sql, $koneksi)  or die ("SQL Error".mysql_error());
        $pesan = "<div class='alert alert-success'>DATA TELAH DI UPDATE</div>";
    }
 ?>
<div class="panel panel-primary">
  <div class="panel-heading">
    EDIT GEJALA
  </div>
  <div class="panel-body">
      <?php echo $pesan; ?>
      <form class="" method="post">
          <?php include'form.php'; ?>
          <div class="pull-left">
              <a href="?p=gejala" class="btn btn-sm btn-warning">KEMBALI</a>
          </div>
          <div class="pull-right">
              <button type="submit" name="update" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-check"></i> UPDATE</button>
          </div>
      </form>
  </div>
</div>
