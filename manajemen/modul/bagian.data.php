<a href="?p=Form Bagian&a=TAMBAH">TAMBAH</a>
<table border="1" width="50%">
  <thead>
    <th>No</th>
    <th>Bagian</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
      $query ="SELECT * FROM Bagian";
      $stmt = $db->prepare($query);
      $stmt->execute();

      foreach ($stmt->fetchAll() as $key => $value) {
     ?>
    <tr>
      <td><?php echo $value['idBagian']; ?></td>
      <td><?php echo $value['Bagian']; ?></td>
      <td>
        <a href="?p=Form Bagian&a=EDIT&id=<?php echo $value['idBagian']; ?>">EDIT</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
