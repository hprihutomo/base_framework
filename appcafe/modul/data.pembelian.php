<div class="panel panel-default">
  <div class="panel-body">
    <div class="pull-right">
      <p>
        <a href="?p=TAMBAH PEMBELIAN" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
      </p>
    </div>

    <table class="table table-bordered table-condensed">
      <thead>
        <th>NO</th>
        <th>TANGGAL</th>
        <th>PEGAWAI</th>
        <th>AKSI</th>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM headpembelian";
          $stmt = $db->prepare($query);
          $stmt->execute();
          foreach ($stmt->fetchALL() as $key => $value) {
         ?>
        <tr>
          <td><?php echo $value['idpembelian'] ?></td>
          <td><?php echo $value['tglpembelian'] ?></td>
          <td><?php echo $value['waitress'] ?></td>
          <td>
            <a href="?p=INPUT PEMBELIAN&id=<?php echo $value['idpembelian']?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-check"></i></a>
          </td>
        </tr>
        <?php  } ?>
      </tbody>
    </table>
  </div>
</div>
