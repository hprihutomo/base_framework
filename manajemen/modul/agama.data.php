<a href="?p=Form Agama&a=TAMBAH">TAMBAH</a>
<table border="1" width="50%">
  <thead>
    <th>No</th>
    <th>Agama</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
      $query ="SELECT * FROM Agama";
      $stmt = $db->prepare($query);
      $stmt->execute();

      foreach ($stmt->fetchAll() as $key => $value) {
     ?>
    <tr>
      <td><?php echo $value['idAgama']; ?></td>
      <td><?php echo $value['Agama']; ?></td>
      <td>
        <a href="?p=Form Agama&a=EDIT&id=<?php echo $value['idAgama']; ?>">EDIT</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
