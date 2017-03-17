<table class="table table-condensed table-bordered">
  <thead>
    <th width="50" class="text-center">No</th>
    <th>Gejala</th>
    <th width="50">Aksi</th>
  </thead>
  <tbody>

    <?php
      include 'conn.php';
      $sql = "SELECT * FROM gejala ORDER BY kd_gejala";
      $qry = mysql_query($sql, $koneksi) or die ("SQL Error".mysql_error());
      $no=1;
      while ($data=mysql_fetch_array($qry)) {
      $i=$no++;
    ?>
    <tr>
      <td class="text-center"><?php echo $i; ?></td>
      <td>Apakah Pasien <?php echo $data['nm_gejala']; ?> ? <?php echo $data['kd_gejala']; ?></td>
      <td class="text-center"><input type="checkbox" name="pilih[]" value="<?php echo $data['kd_gejala']; ?>"></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="3">
        <button type="submit" name="proses" class="btn btn-sm btn-primary pull-right">PROSES <i class="glyphicon glyphicon-arrow-right "></i></button>
      </td>
    </tr>
  </tbody>
</table>
