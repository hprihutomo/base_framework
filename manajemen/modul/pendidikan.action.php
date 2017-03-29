<?php
if ($_GET['a']=='TAMBAH') {
  if (isset($_POST['TAMBAH'])) {
    $query = "INSERT INTO Pendidikan (Pendidikan) VALUES (:pendidikan)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':pendidikan',$_POST['pendidikan']);
    $action = $stmt->execute();

    if ($action) {
      $pesan = "berhasil";
    }else {
      $pesan = "gagal";
    }
  }
}elseif($_GET['a']=='EDIT') {
  $query = "SELECT * FROM Pendidikan WHERE idPendidikan = :id";
  $stmt = $db->prepare($query);
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
  $data = $stmt->fetch();

  if (isset($_POST['EDIT'])) {
    $query = "UPDATE Pendidikan SET Pendidikan = :pendidikan WHERE idPendidikan = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':pendidikan',$_POST['pendidikan']);
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
