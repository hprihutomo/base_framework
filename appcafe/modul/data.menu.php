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
            $query="SELECT * FROM daftar_menu";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $i = 1;
            foreach ($stmt->fetchALL() as $key => $value) {
              $no = $i++;
        ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $value['namamenu']; ?></td>
          <td><?php echo $value['jnsmenu']; ?></td>
          <td><?php echo $value['menudiskon']; ?></td>
          <td><?php echo $value['Harga']; ?></td>
          <td><?php if($value['statusMenu']=='1'){ echo "ADA";}else { echo "KOSONG";  } ?></td>
          <td>
            <a href="?p=EDIT MENU&idM=<?php echo $value['idmenu']; ?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-check"></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
