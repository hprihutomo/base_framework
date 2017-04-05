<div class="panel panel-primary">
  <div class="panel-heading">
    DATA RELASI
  </div>
  <div class="panel-body">
<!--  -->
<div class="col-lg-2">

</div>
<?php
    $penyakit = $_POST['penyakit'];
    $gejala = $_POST['gejala'];

    if (isset($_POST['simpan'])) {
        $sql ="INSERT INTO relasi (kd_penyakit,kd_gejala) VALUES ('$penyakit','$gejala')";
		    mysql_query($sql, $koneksi)  or die ("SQL Error".mysql_error());
        $pesan = "<div class='alert alert-success'>DATA TELAH DI INPUT</div>";
    }
 ?>
<div class="col-lg-8">
  <?php echo $pesan; ?>
  <form class="" method="post">
      <table class="table table-condensed table-bordered">
        <tr>
        <td width="100"><label for="">PENYAKIT</label></td>
          <td>
            <select name="penyakit">
              <option value=""></option>
              <?php
                $sql = "SELECT * FROM penyakit";
                $qry = mysql_query($sql, $koneksi)
                      or die ("SQL Error".mysql_error());
                while ($data=mysql_fetch_array($qry)) {
                //$no++;
              ?>
              <option value="<?php echo $data['kd_penyakit']?>"><?php echo $data['kd_penyakit']?> | <?php echo $data['nm_penyakit']?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
        <tr>
        <td width="100"><label for="">GEJALA</label></td>
          <td>
            <select name="gejala">
              <option value=""></option>
              <?php
                $sql = "SELECT * FROM gejala";
                $qry = mysql_query($sql, $koneksi)
                      or die ("SQL Error".mysql_error());
                while ($data=mysql_fetch_array($qry)) {
                //$no++;
              ?>
              <option value="<?php echo $data['kd_gejala']?>"><?php echo $data['kd_gejala']?> | <?php echo $data['nm_gejala']?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
      </table>
      <div class="pull-left">
        <a href="?p=relasi" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-arrow-left"></i> KEMBALI</a>
        <button type="reset" name="button"class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-refresh"></i> RESET</button>
      </div>
      <button type="submit" name="simpan" class="btn btn-sm btn-primary pull-right"><i class="glyphicon glyphicon-save"></i> SIMPAN</button>
    </form>
</div>
<div class="col-lg-2">
  <div class="pull-left">

  </div>
</div>
  </div>
</div>
