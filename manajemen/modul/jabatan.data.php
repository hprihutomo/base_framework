<a href="?p=Form Jabatan&a=TAMBAH">TAMBAH</a>
<table border="1" width="50%">
  <thead>
    <th>No</th>
    <th>Jabatan</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
      $query ="SELECT * FROM Jabatan";
      $stmt = $db->prepare($query);
      $stmt->execute();

      foreach ($stmt->fetchAll() as $key => $value) {
     ?>
    <tr>
      <td><?php echo $value['idJabatan']; ?></td>
      <td><?php echo $value['Jabatan']; ?></td>
      <td>
        <a href="?p=Form Jabatan&a=EDIT&id=<?php echo $value['idJabatan']; ?>">EDIT</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
