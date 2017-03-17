<div class="panel panel-primary">
  <div class="panel-heading">
    DATA GANGGUAN
  </div>
  <div class="panel-body">
    <div class="pull-right">
        <a href="?p=tambahpenyakit" onclick="" name="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
    </div>
    <br><br>
    <table class="table table-condensed table-bordered">
      <thead>
        <th width="100">KODE</th>
        <th>PENYAKIT</th>
        <th class="text-center" width="100">Aksi</th>
      </thead>
      <tbody>

        <?php
          $sql = "SELECT * FROM penyakit ORDER BY kd_penyakit";
          $qry = mysql_query($sql, $koneksi)
                or die ("SQL Error".mysql_error());
          while ($data=mysql_fetch_array($qry)) {
          //$no++;
        ?>
        <tr>
          <td><?php echo $data['kd_penyakit']; ?></td>
          <td><?php echo $data['nm_penyakit']; ?></td>
          <td class="text-center">
            <a href="?p=detailpenyakit&idp=<?php echo $data['kd_penyakit']?>" onclick="" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-list"></i></a>
            <a href="?p=updatepenyakit&idp=<?php echo $data['kd_penyakit']?>" onclick="" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
