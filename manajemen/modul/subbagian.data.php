<a href="?p=Form Sub Bagian&a=TAMBAH">TAMBAH</a>
<table border="1" width="50%">
  <thead>
    <th>No</th>
    <th>Sub Bagian</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
      $query ="SELECT * FROM SubBagian";
      $stmt = $db->prepare($query);
      $stmt->execute();

      foreach ($stmt->fetchAll() as $key => $value) {
     ?>
    <tr>
      <td><?php echo $value['idSubBagian']; ?></td>
      <td><?php echo $value['SubBagian']; ?></td>
      <td>
        <a href="?p=Form Sub Bagian&a=EDIT&id=<?php echo $value['idSubBagian']; ?>">EDIT</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
