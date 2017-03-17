<div class="panel panel-default">
  <div class="panel-body">
    <div class="pull-right">
      <p>
        <a href="?p=TAMBAH TRANSAKSI" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
      </p>
    </div>

    <table class="table table-bordered table-condensed" id="mytable">
      <thead>
        <th width="50">NO</th>
        <th>NO TRANSAKSI</th>
        <th>NO MEJA</th>
        <th>KASIR</th>
        <th>TGL TRANSAKSI</th>
        <th>STATUS</th>
        <th width="50">AKSI</th>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM mstable";
          $stmt = $db->prepare($query);
          $stmt->execute();
          $i = 1;
          foreach ($stmt->fetchALL() as $key => $value) {
            $no = $i++;
         ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $value['code_tables']; ?></td>
          <td><?php echo $value['code_tables']; ?></td>
          <td><?php echo $value['code_tables']; ?></td>
          <td><?php echo $value['code_tables']; ?></td>
          <td><?php echo $value['code_tables']; ?></td>
          <td>
            <a href="?p=EDIT TRANSAKSI&idM=<?php echo $value['id_tables']?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-check"></i> EDIT</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
