<div class="panel panel-default">
  <div class="panel-body">
    <div class="pull-right">
      <p>
        <a href="?p=TAMBAH PEGAWAI" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
      </p>
    </div>

    <table class="table table-bordered table-condensed">
      <thead>
        <th width="50">NO</th>
        <th>NAMA</th>
        <th width="100">ON DUTY</th>
        <th width="50">AKSI</th>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM waitress";
          $stmt = $db->prepare($query);
          $stmt->execute();
          foreach ($stmt->fetchALL() as $key => $value) {
         ?>
        <tr>
          <td><?php echo $value['idwaitress']; ?></td>
          <td><?php echo $value['namawaitress']; ?></td>
          <td><?php if($value['onduty'] == 1){ echo "MASUK"; }else{ echo "KELUAR";}; ?></td>
          <td>
            <a href="?p=EDIT PEGAWAI&idM=<?php echo $value['idwaitress'] ?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-check"></i></a>
          </td>
        </tr>
        <?php }  ?>
      </tbody>
    </table>
  </div>
</div>
