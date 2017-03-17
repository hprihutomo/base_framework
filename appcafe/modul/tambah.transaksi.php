<div class="col-lg-4">

</div>
<div class="col-lg-4">
  <div class="panel panel-primary">
    <div class="panel-body">
      <form class="" action="?p=INPUT TRANSAKSI" method="post">
        <table class="table table-bordered table-condensed">
          <tr>
            <td>NO. TRANSAKSI</td>
            <td><input type="text" name="noTR" value="" size="8"></td>
          </tr>
          <tr>
            <td>TGL TRANSAKSI</td>
            <td><input type="date" name="tglTR" value=""></td>
          </tr>
          <tr>
            <td>NO MEJA</td>
            <td>
              <select class="" name="noMeja">
                <?php
                  $query = "SELECT * FROM mstable";
                  $stmt = $db->prepare($query);
                  $stmt->execute();
                  foreach ($stmt->fetchALL() as $key => $value) {
                 ?>
                <option value="<?php echo $value['id_tables'] ?>"><?php echo $value['code_tables'] ?></option>
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
  </div>
</div>
<div class="col-lg-4">

</div>
