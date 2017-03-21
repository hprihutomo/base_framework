<?php
if ($_GET['a']=='TAMBAH') {
  if (isset($_POST['TAMBAH'])) {
    $query = "INSERT INTO Agama (Agama) VALUES (:agama)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':agama',$_POST['agama']);
    $action = $stmt->execute();

    if ($action) {
      $pesan = "berhasil";
    }else {
      $pesan = "gagal";
    }
  }
}elseif($_GET['a']=='EDIT') {
  $query = "SELECT * FROM Agama WHERE idAgama = :id";
  $stmt = $db->prepare($query);
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
  $data = $stmt->fetch();

  if (isset($_POST['EDIT'])) {
    $query = "UPDATE Agama SET Agama = :agama WHERE idAgama = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':agama',$_POST['agama']);
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
