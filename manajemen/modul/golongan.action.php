<?php
if ($_GET['a']=='TAMBAH') {
  if (isset($_POST['TAMBAH'])) {
    $query = "INSERT INTO Golongan (Golongan) VALUES (:golongan)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':golongan',$_POST['golongan']);
    $action = $stmt->execute();

    if ($action) {
      $pesan = "berhasil";
    }else {
      $pesan = "gagal";
    }
  }
}elseif($_GET['a']=='EDIT') {
  $query = "SELECT * FROM Golongan WHERE idGolongan = :id";
  $stmt = $db->prepare($query);
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
  $data = $stmt->fetch();

  if (isset($_POST['EDIT'])) {
    $query = "UPDATE Golongan SET Golongan = :golongan WHERE idGolongan = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':golongan',$_POST['golongan']);
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
