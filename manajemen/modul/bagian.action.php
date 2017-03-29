<?php
if ($_GET['a']=='TAMBAH') {
  if (isset($_POST['TAMBAH'])) {
    $query = "INSERT INTO Bagian (Bagian) VALUES (:bagian)";
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
  $query = "SELECT * FROM Bagian WHERE idBagian = :id";
  $stmt = $db->prepare($query);
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
  $data = $stmt->fetch();

  if (isset($_POST['EDIT'])) {
    $query = "UPDATE Bagian SET Bagian = :bagian WHERE idBagian = :id";
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
