<div class="panel panel-default">
  <div class="panel-body">
    <!-- <div class="pull-right">
      <p>
        <a href="?p=TAMBAH TRANSAKSI" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
      </p>
    </div> -->

    <table class="table table-bordered table-condensed" id="mytable">
      <thead>
        <!-- <th width="50">NO</th> -->
        <th>NO TRANSAKSI</th>
        <th>NO MEJA</th>
        <th>KASIR</th>
        <th>WAITRESS</th>
        <th>TGL TRANSAKSI</th>
        <th width="150">AKSI</th>
      </thead>
      <tbody>
        <?php
          $today = date('Y-m-d');
          $query = "SELECT * FROM head_transaksi WHERE tgltransaksi = '".$today."'";
          $stmt = $db->prepare($query);
          $stmt->execute();
          $i = 1;
          foreach ($stmt->fetchALL() as $key => $value) {
            $no = $i++;
         ?>
        <tr>
          <!-- <td><?php echo $no; ?></td> -->
          <td><?php echo $value['idtransaksi']; ?></td>
          <td><?php echo $value['nomormeja']; ?></td>
          <td><?php echo $value['namapengguna']; ?></td>
          <td><?php echo $value['waitress']; ?></td>
          <td><?php echo $value['tgltransaksi']; ?></td>
          <td>
            <a href="?p=INPUT TRANSAKSI&id=<?php echo $value['idtransaksi']?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-check"></i> BUKA</a>
            <a href="#" onclick="Popup('nota.php?id=<?php echo $value['idtransaksi']?>','','800','500')" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-file"></i> NOTA</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
