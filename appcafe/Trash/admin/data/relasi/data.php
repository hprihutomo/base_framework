<div class="panel panel-primary">
  <div class="panel-heading">
    DATA RELASI
  </div>
  <div class="panel-body">
    <div class="pull-right">
        <a href="?p=input" onclick="" name="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
    </div>
    <br><br>
    <table class="table table-condensed table-bordered">
      <thead>
        <th width="100">KODE</th>
        <th>GANGGUAN</th>
        <th>GEJALA</th>
        <!-- <th class="text-center" width="100">Aksi</th> -->
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
          <td>
            <?php
              $sql1 = "SELECT * FROM v_penyakit_gejala where kd_penyakit = '". $data['kd_penyakit']."' ";
              $qry1 = mysql_query($sql1, $koneksi)
                    or die ("SQL Error".mysql_error());
              while ($data1=mysql_fetch_array($qry1)) {
              //$no++;
            ?>
            <li><?php echo $data1['nm_gejala'] ?></li>
            <?php } ?>
          </td>
          <!-- <td class="text-center">
            <a href="?p=detailpenyakit&idp=<?php echo $data['kd_penyakit']?>" onclick="" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-list"></i></a>
            <a href="?p=updatepenyakit&idp=<?php echo $data['kd_penyakit']?>" onclick="" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i></a>
          </td> -->
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
