<?php
    $q = "SELECT * FROM pembelian ORDER BY idpembelian DESC LIMIT 1";
    $smt = $db->prepare($q);
    $smt->execute();
    $data = $smt->fetch();
    $no = $data['idpembelian'];
    $notr = $no+1;

if (isset($_POST['tambah'])) {
  $input = "INSERT INTO pembelian (tglpembelian,waitress,idpengguna) VALUES (?,?,'1')";

  $stmt = $db->prepare($input);
  $stmt->bindParam('1',$_POST['tglTR']);
  $stmt->bindParam('2',$_POST['waitress']);
  $action = $stmt->execute();

  if ($action) {
    $pesan = "<div class='alert alert-success'>Data Telah Di Input <a href='?p=INPUT PEMBELIAN&id=$notr'>LANJUT<a></div>";
  }else {
      $pesan = "<div class='alert alert-danger'>Data Gagal Di Input</div>";
  }
}

 ?>
<div class="col-lg-4">

</div>
<div class="col-lg-4">
  <div class="panel panel-primary">
    <div class="panel-body">

      <form class=""  method="post">
        <!-- action="?p=INPUT TRANSAKSI" -->
        <table class="table table-bordered table-condensed">
          <tr>
            <td>NO. TRANSAKSI</td>
            <td><input type="text" name="noTR" value="<?php echo $notr;?>" size="8"></td>
          </tr>
          <tr>
            <td>TGL TRANSAKSI</td>
            <td><input type="date" name="tglTR" value="<?php echo date('Y-m-d'); ?>"></td>
          </tr>
          <!-- <tr>
            <td>NO MEJA</td>
            <td>
              <select class="" name="noMeja">
                <?php
                  $query = "SELECT * FROM meja WHERE statusmeja = 0";
                  $stmt = $db->prepare($query);
                  $stmt->execute();
                  foreach ($stmt->fetchALL() as $key => $value) {
                 ?>
                <option value="<?php echo $value['idmeja'] ?>"><?php echo $value['nomormeja'] ?></option>
                <?php } ?>
              </select>
            </td>
          </tr> -->
          <tr>
            <td>WAITRESS</td>
            <td>
              <select class="" name="waitress">
                <?php
                  $q = "SELECT * FROM waitress WHERE onduty = 1";
                  $st = $db->prepare($q);
                  $st->execute();
                  foreach($st->fetchALL() as $key => $data){
                 ?>
                <option value="<?php echo $data['namawaitress']?>"><?php echo $data['namawaitress']; ?></option>
                <?php } ?>
              </select>
            </td>
          </tr>
        </table>
        <div class="pull-right">
          <button type="submit" name="tambah" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</button>
        </div>
      </form>
    </div>
    <?php echo $pesan; ?>
  </div>
</div>
<div class="col-lg-4">

</div>
