<a href="?p=Form Pendidikan&a=TAMBAH">TAMBAH</a>
<table border="1" width="50%">
  <thead>
    <th>No</th>
    <th>Pendidikan</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
      $query ="SELECT * FROM Pendidikan";
      $stmt = $db->prepare($query);
      $stmt->execute();

      foreach ($stmt->fetchAll() as $key => $value) {
     ?>
    <tr>
      <td><?php echo $value['idPendidikan']; ?></td>
      <td><?php echo $value['Pendidikan']; ?></td>
      <td>
        <a href="?p=Form Pendidikan&a=EDIT&id=<?php echo $value['idPendidikan']; ?>">EDIT</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
