<?php
  include 'conn.php';
  $id = $_GET['id'];
  $query = "SELECT * FROM head_transaksi WHERE idtransaksi = $id";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $data = $stmt->fetch();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="">
         <meta name="author" content="">

         <title>.::E-CAFE::.</title>

         <!-- Bootstrap Core CSS -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/jquery.dataTables.min.css">
         <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">


         <!-- Custom CSS -->
         <link href="css/one-page-wonder.css" rel="stylesheet">

     <title></title>
   </head>
   <body>
     <table class="table table-condensed">
       <tr>
         <td width="100">No Transaksi</td>
         <td><?php echo $data['idtransaksi']; ?></td>
         <td width="100">Tgl Transaksi</td>
         <td><?php echo $data['tgltransaksi'] ?></td>
       </tr>
       <tr>
         <td width="100">Nomor Meja</td>
         <td><?php echo $data['nomormeja']; ?></td>
         <td width="100">Waitress</td>
         <td><?php echo $data['waitress'] ?></td>
       </tr>
     </table>
     <table class="table table-bordered table-condensed">
       <tr>
         <td>Menu</td>
         <td width="50">Qty</td>
         <td width="50">Disc</td>
         <td>Harga</td>
         <td>Subtotal</td>
       </tr>
       <?php
          $Q = "SELECT * FROM body_transaksi WHERE idtransaksi=$id";
          $s = $db->prepare($Q);
          $s->execute();
          foreach ($s->fetchALL() as $key => $value) {
        ?>
       <tr>
         <td><?php echo $value['namamenu']; ?></td>
         <td width="50"><?php echo $value['qty']; ?></td>
         <td width="50"><?php echo $value['diskon']; ?></td>
         <td><?php echo $value['Harga']; ?></td>
         <td><?php echo $value['subtotal']; ?></td>
       </tr>
       <?php } ?>
       <tr>
         <?php
             $q = "SELECT SUM(subtotal) AS total FROM body_transaksi WHERE idtransaksi =?";
             $stm = $db->prepare($q);
             $stm->bindParam('1',$data['idtransaksi']);
             $stm->execute();
             $v = $stm->fetch();
          ?>
         <td colspan="4" align="right">TOTAL</td>
         <td><?php echo $v['total'] ?></td>
       </tr>
         <?php
           $q = "SELECT * FROM pembayaran WHERE idtransaksi =?";
           $stm = $db->prepare($q);
           $stm->bindParam('1',$data['idtransaksi']);
           $stm->execute();
           $vl = $stm->fetch();
          ?>
        <tr>
         <td colspan="4" align="right">UANG</td>
         <td><?php echo $vl['jmlhuang'] ?></td>
       </tr>
       <tr>
         <td colspan="4" align="right">REFUND</td>
         <td><?php echo $vl['kembalian'] ?></td>
       </tr>
     </table>

     <!-- UANG : Rp <?php echo $vl['jmlhuang']; ?> <br> KEMBALIAN : Rp <?php echo $vl['kembalian']; ?> -->
   </body>
 </html>
