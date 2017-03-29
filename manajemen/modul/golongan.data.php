<a href="?p=Form Golongan&a=TAMBAH">TAMBAH</a>
<table border="1" width="50%">
  <thead>
    <th>No</th>
    <th>Golongan</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
      $query ="SELECT * FROM Golongan";
      $stmt = $db->prepare($query);
      $stmt->execute();

      foreach ($stmt->fetchAll() as $key => $value) {
     ?>
    <tr>
      <td><?php echo $value['idGolongan']; ?></td>
      <td><?php echo $value['Golongan']; ?></td>
      <td>
        <a href="?p=Form Golongan&a=EDIT&id=<?php echo $value['idGolongan']; ?>">EDIT</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
