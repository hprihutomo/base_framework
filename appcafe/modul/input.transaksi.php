<?php
  $id = $_GET['id'];
  $query = "SELECT * FROM head_transaksi WHERE idtransaksi = $id";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $data = $stmt->fetch();

  if(isset($_POST['tambah'])) {
    $qr ="INSERT INTO detailtransaksi (idtransaksi,idmenu,qty,diskon,subtotal) VALUES (:idtransaksi,:idmenu,:qty,:diskon,:subtotal)";
    $s = $db->prepare($qr);
    $s->bindParam(':idtransaksi',$data['idtransaksi']);
    $s->bindParam(':idmenu',$_POST['idmenu']);
    $s->bindParam(':qty',$_POST['qty']);
    $s->bindParam(':diskon',$_POST['diskon']);
    $s->bindParam(':subtotal',$_POST['subtotal']);
    $action = $s->execute();

    if($action) {
     $pesan = "berhasil";
   }else {
     $pesan = "gagal";
   }
  }
  //echo $pesan;
 ?>

<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-lg-3">
      <div class="panel panel-primary">
        <div class="panel-body">
          <table class="table table-bordered table-condensed">
            <tr>
              <td>NO. TRANS</td>
              <td><?php echo $data['idtransaksi'] ?></td>
            </tr>
            <tr>
              <td>TANGGAL</td>
              <td><?php echo $data['tgltransaksi']; ?></td>
            </tr>
            <tr>
              <td>NO. MEJA</td>
              <td><?php echo $data['nomormeja'] ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="panel panel-primary">
        <div class="panel-body">
          <table class="table table-condensed table-bordered">
            <thead>
              <th align="center">Nama Menu</th>
              <th align="center">Qty</th>
              <th align="center">Diskon</th>
              <th align="center">Harga</th>
              <th align="center">Subtotal</th>
              <th width="50"></th>
            </thead>
            <form class="" id="forms" name="forms" method="post">
              <tr>
                <td align="center">
                  <input type="hidden" id="idmenu" name="idmenu" value="">
                  <input type="text" id="namamenu" name="namamenu" onclick="Popup('menu.php','','800','500')" autofocus readonly>
                </td>
                <td align="center"><input id="qty" name="qty"type="text" size="3"  ></td>
                <td align="center"><input id="diskon" name="diskon" type="text" size="3"  value="0"></td>
                <td align="center">
                  <input id="hdiskon" name="hargadiskon" type="hidden" size="5"  value="">
                  <input id="harga" name="harga" type="hidden" size="10"   readonly>
                  <input id="hargatotal" name="hargatotal" type="text" size="10"   readonly>
                </td>
                <td align="center"><input id="subtotal" name="subtotal" type="text" size="10"   readonly></td>
                <td align="right">
                  <button type="submit" name="tambah" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i>TAMBAH </button>
                </td>
              </tr>
            </form>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <table class="table table-condensed table-bordered">
        <tr>
          <td>MENU</td>
          <td width="50">QTY</td>
          <td>HARGA</td>
          <td width="50">DISKON</td>
          <td>SUBTOTAL</td>
          <td width="45">AKSI</td>
        </tr>
        <?php
            $query = "SELECT * FROM body_transaksi WHERE idtransaksi =?";
            $stmt = $db->prepare($query);
            $stmt->bindParam('1',$data['idtransaksi']);
            $stmt->execute();
            foreach ($stmt->fetchALL() as $key => $value) {
         ?>
        <tr>
          <td><?php echo $value['namamenu']; ?></td>
          <td align="center"><?php echo $value['qty']; ?></td>
          <td align="right"><?php echo $value['Harga']; ?></td>
          <td align="right"><?php echo $value['diskon']; ?></td>
          <td align="right"><?php echo $value['subtotal']; ?></td>
          <td align="center">
            <a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i>
            <?php //echo $value['']; ?>
            </a>
          </td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="4" align="right">TOTAL</td>
          <?php
              $q = "SELECT SUM(subtotal) AS total FROM body_transaksi WHERE idtransaksi =?";
              $stm = $db->prepare($q);
              $stm->bindParam('1',$data['idtransaksi']);
              $stm->execute();
              $v = $stm->fetch();
           ?>
          <td align="right"><?php echo $v['total']; ?></td>
          <td>
            <a href="#" onclick="Popup('bayar.php?id=<?php echo $data['idtransaksi'];?>','','800','500')"name="simpan" class="btn btn-sm btn-success"> BAYAR</a>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
