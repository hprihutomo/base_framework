<?php
if ($_GET['a']=='TAMBAH') {
  if (isset($_POST['TAMBAH'])) {
    $query = "INSERT INTO Jabatan (Jabatan) VALUES (:jabatan)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':jabatan',$_POST['jabatan']);
    $action = $stmt->execute();

    if ($action) {
      $pesan = "berhasil";
    }else {
      $pesan = "gagal";
    }
  }
}elseif($_GET['a']=='EDIT') {
  $query = "SELECT * FROM Jabatan WHERE idJabatan = :id";
  $stmt = $db->prepare($query);
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
  $data = $stmt->fetch();

  if (isset($_POST['EDIT'])) {
    $query = "UPDATE Jabatan SET Jabatan = :jabatan WHERE idJabatan = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':jabatan',$_POST['jabatan']);
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
