<div class="panel panel-default">
  <div class="panel-body">
    <div class="pull-right">
      <p>
        <a href="?p=TAMBAH MENU" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
      </p>
    </div>

    <table class="table table-bordered table-condensed" id="mytable">
      <thead>
        <th>NO</th>
        <th>NAMA MENU</th>
        <th>JENIS</th>
        <th>DISKON</th>
        <th>HARGA</th>
        <th>STATUS</th>
        <th>AKSI</th>
      </thead>
      <tbody>
        <?php
            $query="SELECT * FROM vmenu";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $i = 1;
            foreach ($stmt->fetchALL() as $key => $value) {
              $no = $i++;
        ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $value['namaMenu']; ?></td>
          <td><?php echo $value['JenisMenu']; ?></td>
          <td><?php echo $value['DiscMenu']; ?></td>
          <td><?php echo $value['HargaMenu']; ?></td>
          <td><?php if($value['StatusMenu']=='1'){ echo "ADA";}else { echo "KOSONG";  } ?></td>
          <td>
            <a href="?p=EDIT MENU&idM=<?php echo $value['idMenu']; ?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-check"></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
