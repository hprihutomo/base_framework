<?php
  $id = $_GET['id'];
  $query = "SELECT * FROM headpembelian WHERE idpembelian = $id";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $data = $stmt->fetch();

  if(isset($_POST['tambah'])) {
    $qr ="INSERT INTO detailpembelian (idpembelian,namabarang,harga,qty,satuan,subtotal) VALUES (:idpembelian,:namabarang,:harga,:qty,:satuan,:subtotal)";
    $s = $db->prepare($qr);
    $s->bindParam(':idpembelian',$data['idpembelian']);
    $s->bindParam(':namabarang',$_POST['namabarang']);
    $s->bindParam(':harga',$_POST['hargabl']);
    $s->bindParam(':qty',$_POST['qtybl']);
    $s->bindParam(':satuan',$_POST['satuan']);
    $s->bindParam(':subtotal',$_POST['subtotalbl']);
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
              <td><?php echo $data['idpembelian'] ?></td>
            </tr>
            <tr>
              <td>TANGGAL</td>
              <td><?php echo $data['tglpembelian']; ?></td>
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
              <th align="center">Nama Barang</th>
              <th align="center">Qty</th>
              <th align="center">Satuan</th>
              <th align="center">Harga</th>
              <th align="center">Subtotal</th>
              <th width="50"></th>
            </thead>
            <form class="" id="forms" name="forms" method="post">
              <tr>
                <td align="center">
                  <input type="text" id="namabarang" name="namabarang"  autofocus >
                </td>
                <td align="center"><input id="qtybl" name="qtybl" type="text" size="3"  ></td>
                <td align="center"><input id="satuan" name="satuan" type="text" size="3"  ></td>
                <td align="center"><input id="hargabl" name="hargabl" type="text" value="0"></td>
                <td align="center"><input id="subtotalbl" name="subtotalbl" type="text" size="10"   readonly></td>
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
          <td width="100">QTY</td>
          <td>HARGA</td>
          <td>SUBTOTAL</td>
          <td width="45">AKSI</td>
        </tr>
        <?php
            $query = "SELECT * FROM daftarpembelian WHERE idpembelian =?";
            $stmt = $db->prepare($query);
            $stmt->bindParam('1',$data['idpembelian']);
            $stmt->execute();
            foreach ($stmt->fetchALL() as $key => $value) {
         ?>
        <tr>
          <td><?php echo $value['namabarang']; ?></td>
          <td align="center"><?php echo $value['qty']." - ".$value['satuan']; ?></td>
          <td align="right"><?php echo $value['harga']; ?></td>
          <td align="right"><?php echo $value['subtotal']; ?></td>
          <td align="center">
            <a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i>
            <?php //echo $value['']; ?>
            </a>
          </td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="3" align="right">TOTAL</td>
          <?php
              $q = "SELECT SUM(subtotal) AS total FROM daftarpembelian WHERE idpembelian =?";
              $stm = $db->prepare($q);
              $stm->bindParam('1',$data['idpembelian']);
              $stm->execute();
              $v = $stm->fetch();
           ?>
          <td align="right"><?php echo $v['total']; ?></td>
          <td>
            <!-- <a href="#" onclick="Popup('bayar.php?id=<?php echo $data['idpembelian'];?>','','800','500')"name="simpan" class="btn btn-sm btn-success"> BAYAR</a> -->
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
