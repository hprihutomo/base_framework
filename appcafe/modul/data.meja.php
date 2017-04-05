<div class="panel panel-default">
  <div class="panel-body">
    <div class="pull-right">
      <p>
        <a href="?p=TAMBAH MEJA" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
      </p>
    </div>

    <table class="table table-bordered table-condensed" id="mytable">
      <thead>
        <th width="50">NO</th>
        <th>NO MEJA</th>
        <th width="50">AKSI</th>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM meja";
          $stmt = $db->prepare($query);
          $stmt->execute();
          $i = 1;
          foreach ($stmt->fetchALL() as $key => $value) {
            $no = $i++;
         ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $value['nomormeja']; ?></td>
          <td>
            <a href="?p=EDIT MEJA&idM=<?php echo $value['idmeja']?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-check"></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
