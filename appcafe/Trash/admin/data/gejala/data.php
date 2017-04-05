<div class="panel panel-primary">
  <div class="panel-heading">
    DATA GEJALA
  </div>
  <div class="panel-body">
    <div class="pull-right">
        <a href="?p=tambahgejala" onclick="" name="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
    </div>
    <br><br>
    <table class="table table-condensed table-bordered">
      <thead>
        <th width="100">KODE</th>
        <th>GEJALA</th>
        <th class="text-center" width="100">EDIT</th>
      </thead>
      <tbody>

        <?php
          $sql = "SELECT * FROM gejala ORDER BY kd_gejala";
          $qry = mysql_query($sql, $koneksi)
                or die ("SQL Error".mysql_error());
          while ($data=mysql_fetch_array($qry)) {
          //$no++;
        ?>
        <tr>
          <td><?php echo $data['kd_gejala']; ?></td>
          <td><?php echo $data['nm_gejala']; ?></td>
          <td class="text-center">
            <!-- <a href="#" onclick="" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a> -->
            <a href="?p=updategejala&id=<?php echo $data['kd_gejala'];?>"  class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
