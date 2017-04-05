<div class="panel panel-primary">
  <div class="panel-heading">
    DATA HASIL ANALISA
  </div>
  <div class="panel-body">
    <table class="table table-condensed table-bordered">
      <thead>
        <th width="100">NAMA</th>
        <th>ALAMAT</th>
        <th>PEKERJAAN</th>
        <th>TANGGAL</th>
      </thead>
      <tbody>

        <?php
          $sql = "SELECT * FROM analisa_hasil";
          $qry = mysql_query($sql, $koneksi)
                or die ("SQL Error".mysql_error());
          while ($data=mysql_fetch_array($qry)) {
          //$no++;
        ?>
        <tr>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['alamat']; ?></td>
          <td><?php echo $data['pekerjaan']; ?></td>
          <td><?php echo $data['tanggal']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
