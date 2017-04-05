<div class="panel panel-primary">
  <div class="panel-body">
    <form class="" method="post">
      Dari : <input type="date" name="awal" value=""> Sampai <input type="date" name="akhir" value="">
      <button type="submit" name="cari" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-search"></i> PERIKSA</button>
    </form>
    <hr>
    <table class="table table-bordered table-condensed">
      <thead>
        <th>No</th>
        <th>Tgl Transaksi</th>
        <th>Nama barang</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Subtotal</th>
      </thead>
      <tbody>
    <?php
      if (isset($_POST['cari'])) {
        $query = "SELECT * FROM daftarpembelian WHERE tglpembelian BETWEEN :awal AND :akhir";
        $quer = "SELECT SUM(subtotal) AS total FROM daftarpembelian WHERE tglpembelian BETWEEN :awal AND :akhir";


        $stm = $db->prepare($quer);
        $stm->bindParam(':awal',$_POST['awal']);
        $stm->bindParam(':akhir',$_POST['akhir']);
        $stm->execute();
        $data = $stm->fetch();

        $stmt = $db->prepare($query);
        $stmt->bindParam(':awal',$_POST['awal']);
        $stmt->bindParam(':akhir',$_POST['akhir']);
        $stmt->execute();
        $i=1;
        foreach ($stmt->fetchAll() as $key => $value) {
        $no=$i++;
     ?>
     <tr>
       <td><?php echo $no ?></td>
       <td><?php echo $value['tglpembelian'] ?></td>
       <td><?php echo $value['namabarang'] ?></td>
       <td><?php echo $value['harga'] ?></td>
       <td><?php echo $value['qty'] ?></td>
       <td align="right"><?php echo $value['subtotal'] ?></td>

     </tr>
     <?php
      }
   }
      ?>
      </tbody>

      <tfoot>
        <tr>
          <td colspan="5" align="right">TOTAL</td>
          <td align="right"><?php echo $data['total'] ?></td>
        </tr>
      </tfoot>
      </table>
  </div>
</div>
