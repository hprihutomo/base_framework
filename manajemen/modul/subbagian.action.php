<?php
if ($_GET['a']=='TAMBAH') {
  if (isset($_POST['TAMBAH'])) {
    $query = "INSERT INTO SubBagian (SubBagian) VALUES (:bagian)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':bagian',$_POST['bagian']);
    $action = $stmt->execute();

    if ($action) {
      $pesan = "berhasil";
    }else {
      $pesan = "gagal";
    }
  }
}elseif($_GET['a']=='EDIT') {
  $query = "SELECT * FROM SubBagian WHERE idSubBagian = :id";
  $stmt = $db->prepare($query);
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
  $data = $stmt->fetch();

  if (isset($_POST['EDIT'])) {
    $query = "UPDATE SubBagian SET SubBagian = :bagian WHERE idSubBagian = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':bagian',$_POST['bagian']);
    $stmt->bindParam(':id',$_POST['id']);
    $action = $stmt->execute();

    if ($action) {
      $pesan = "berhasil";
    }else {
      $pesan = "gagal";
    }
  }
}


 ?>
