<?php //include 'proses.konsultasi.php'; ?>
<?php echo $pesan; ?>
<div class="col-lg-5">
<div class="panel panel-primary">
  <div class="panel-heading">
    DATA PASIEN
  </div>
  <div class="panel-body">

  <form class="" action="?p=proses" method="post">
    <table class="table table-condensed table-bordered">
      <tr>
        <td>NAMA</td>
        <td>
            <input type="text" name="namapasien" value="" required >
        </td>
      </tr>
      <tr>
        <td>KELAMIN</td>
        <td>
            <select class="" name="kelamin">
                <option value="P">PRIA</option>
                <option value="W">WANITA</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>PEKERJAAN</td>
        <td>
            <input type="text" name="pekerjaan" value="" required>
        </td>
      </tr>
      <tr>
        <td>ALAMAT</td>
        <td>
            <textarea name="alamat" rows="3" cols="25"></textarea>
        </td>
      </tr>
    </table>
    NB:
      <br>Jika tidak Dicentang Maka jawabannya adalah <b>TIDAK</b>
  </div>
</div>
</div>

<div class="col-lg-7">
<div class="panel panel-primary">
  <div class="panel-heading">
    PERTANYAAN
  </div>
  <div class="panel-body" id="konsul">
    <table class="table table-condensed table-bordered">
      <thead>
        <th width="50" class="text-center">No</th>
        <th>Gejala</th>
        <th width="50">Aksi</th>
      </thead>
      <tbody>

        <?php
          $sql = "SELECT * FROM gejala ORDER BY kd_gejala";
          $qry = mysql_query($sql, $koneksi) or die ("SQL Error".mysql_error());
          $no=1;
          while ($data=mysql_fetch_array($qry)) {
          $i=$no++;
        ?>
        <tr>
          <td class="text-center"><?php echo $i; ?></td>
          <td>Apakah Pasien <?php echo $data['nm_gejala']; ?> ?</td>
          <td class="text-center">
                <input type="checkbox" name="pilih[]" value="<?php echo $data['kd_gejala'];?>">
          </td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="3">

            <button type="submit" name="proses" class="btn btn-sm btn-primary pull-right">PROSES <i class="glyphicon glyphicon-arrow-right "></i></button>
          </td>
        </tr>
      </tbody>
    </table>
    </form>
  </div>
</div>
</div>
