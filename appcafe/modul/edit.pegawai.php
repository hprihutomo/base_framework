<?php
$id = $_GET['idM'];
$query = "SELECT * FROM waitress WHERE idwaitress = $id";
$stmt = $db->prepare($query);
$stmt->execute();
$data = $stmt->fetch();

if (isset($_POST['simpan'])) {

  $query = "UPDATE waitress SET namawaitress=?, onduty=? WHERE idwaitress = ?";
  $stmt = $db->prepare($query);
  $stmt->bindParam(1,$_POST['waitress']);
  $stmt->bindParam(2,$_POST['onduty']);
  $stmt->bindParam(3,$id);
  $action = $stmt->execute();

  if ($action) {
    $pesan = "<div class='alert alert-success'>Data Telah Di Input</div>";
  }else {
      $pesan = "<div class='alert alert-danger'>Data Gagal Di Input</div>";
  }

}



 ?>
<div class="panel panel-primary">
  <div class="panel-body">
    <form class="" method="post">
        <?php include 'form.pegawai.php'; ?>
        <div class="pull-left">
          <a href="?p=PEGAWAI" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> KEMBALI</a>
        </div>
        <div class="pull-right">
          <button type="reset" name="" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-refresh"></i> RESET</button>
          <button type="submit" name="simpan" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-check"></i> GANTI</button>
        </div>
    </form>
  </div>
</div>
