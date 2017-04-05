<?php
$id = $_GET['idM'];
$query = "SELECT * FROM daftar_menu WHERE idmenu = $id";
$stmt = $db->prepare($query);
$stmt->execute();
$data = $stmt->fetch();

if (isset($_POST['simpan'])) {

  $query = "UPDATE menu SET idjnsmenu = ? ,namamenu = ?,Hpp = ?,Harga = ?,menudiskon = ?,statusMenu = ? WHERE idmenu = ?";
  $stmt = $db->prepare($query);
  $stmt->bindParam(1,$_POST['jnsmenu']);
  $stmt->bindParam(2,$_POST['namaMenu']);
  $stmt->bindParam(3,$_POST['HPP']);
  $stmt->bindParam(4,$_POST['harga']);
  $stmt->bindParam(5,$_POST['disc']);
  $stmt->bindParam(6,$_POST['status']);
  $stmt->bindParam(7,$id);
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
        <?php include 'form.menu.php'; ?>
        <div class="pull-left">
          <a href="?p=MENU" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> KEMBALI</a>
        </div>
        <div class="pull-right">
          <button type="reset" name="" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-refresh"></i> RESET</button>
          <button type="submit" name="simpan" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-check"></i> GANTI</button>
        </div>
    </form>
  </div>
</div>
