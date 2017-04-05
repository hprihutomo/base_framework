<?php
include 'conn.php';

$id = $_GET['id'];
$quer = "SELECT * FROM pembayaran WHERE idtransaksi = $id";
$stm = $db->prepare($quer);
$stm->execute();
$data = $stm->fetch();


$quer1 = "SELECT * FROM head_transaksi WHERE idtransaksi = $id";
$stm1 = $db->prepare($quer1);
$stm1->execute();
$dt = $stm1->fetch();

?>
<!DOCTYPE html>
<html lang="en">

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <?php
  if (isset($_POST['simpan'])) {
    $Q="INSERT INTO pembayaran (idtransaksi,jnsbayar,nomorkartu,diskon,jmlhdiskon,jmlhuang,totalbayar,kembalian)
        VALUES (:idtransaksi,:jnsbayar,:nomorkartu,:diskon,:jmlhdiskon,:jmlhuang,:totalbayar,:kembalian)";
    $S= $db->prepare($Q);
    $S->bindParam(':idtransaksi',$id);
    $S->bindParam(':jnsbayar',$_POST['jnspembayaran']);
    $S->bindParam(':nomorkartu',$_POST['nomorkartu']);
    $S->bindParam(':diskon',$_POST['diskon']);
    $S->bindParam(':jmlhdiskon',$_POST['distotal']);
    $S->bindParam(':jmlhuang',$_POST['jmlhuang']);
    $S->bindParam(':totalbayar',$_POST['bayar']);
    $S->bindParam(':kembalian',$_POST['kembalian']);
    $action = $S->execute();

    // $Q2 = "UPDATE meja SET statusmeja = 0 WHERE idmeja = '".$dt['idmeja']."'";
    // $S2= $db->prepare($Q2);
    // $S2->execute();

    if ($action) {
      $pesan = "<div class='alert alert-success'>Data Telah Di Input <a href='#'onclick=\"Popup('nota.php?id=$id','','800','500')\" >CETAK NOTA<a></div>";
    }else {
        $pesan = "<div class='alert alert-danger'>Data Gagal Di Input</div>";
    }

  }
   ?>
<form class="" method="post">
  <div class="panel panel-default">
    <div class="panel-heading">
      PEMBAYARAN | NOMOR TRANSAKSI : <?php echo $id; ?> NOMOR MEJA: <?php echo $dt['idmeja']; ?>
    </div>
    <div class="panel-body">
      <table class="table table-bordered table-condensed">
        <tr>
          <td width="200">JENIS PEMBAYARAN</td>
          <td>
            <select class="" name="jnspembayaran">
                <option value="CASH">CASH</option>
                <option value="DEBIT CARD">DEBIT CARD</option>
                <option value="CREDIT CARD">CREDIT CARD</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>NOMOR KARTU</td>
          <td><input type="text" name="nomorkartu" value="<?php echo $data['nomorkartu']?>"></td>
        </tr>
        <tr>
          <td>DISKON</td>
          <td><input type="text" id="diskon" name="diskon" value="<?php echo $data['diskon']?>" size="2"> % </td>
        </tr>
        <tr>
          <td>JUMLAH UANG</td>
          <td><input type="text" id="jmlhuang" name="jmlhuang" value="<?php echo $data['jmlhuang']?>"></td>
        </tr>
        <?php
            $q = "SELECT SUM(subtotal) AS total FROM body_transaksi WHERE idtransaksi =?";
            $stm = $db->prepare($q);
            $stm->bindParam('1',$id);
            $stm->execute();
            $v = $stm->fetch();
         ?>
        <tr>
          <td>TOTAL</td>
          <td>
            <input type="hidden" id="sbtotal"name="sbtotal" value="<?php echo $v['total']?>">
            <input type="hidden" id="distotal"name="distotal" value="<?php echo $v['total']?>">
            <input type="text" id="bayar"name="bayar" value="<?php echo $v['total']?>">
          </td>
        </tr>
        <tr>
          <td>KEMBALIAN</td>
          <td><input type="text" id="kembalian" name="kembalian" value="<?php echo $data['kembalian']?>"></td>
        </tr>
        <tr>
          <td colspan="2" align="right">
            <button type="submit" class="btn btn-sm btn-primary" name="simpan"><i class="glyphicon glyphicon-ok"></i> BAYAR</button>
          </td>
        </tr>
      </table>
      <?php echo $pesan; ?>
    </div>
  </div>
</form>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#diskon').keyup(function(){
      var diskon = parseFloat($('#diskon').val());
      var sbtotal = parseFloat($('#sbtotal').val());
      var distotal = sbtotal*(diskon/100);
      $('#distotal').val(distotal);
      var bayar = sbtotal-distotal;
      $('#bayar').val(bayar);
    });

    $('#jmlhuang').keyup(function() {
      var jmluang = parseFloat($('#jmlhuang').val());
      var bayar = parseFloat($('#bayar').val());
      var kembalian = jmluang-bayar;
      $('#kembalian').val(kembalian);
    })
  });
  </script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/popup.js"></script>


  <script type="text/javascript">
  $(document).ready(function() {
      $('#mytable').DataTable({
              responsive: true,
              "order": [[ 0, "asc" ]]
      });
  });
  </script>

</body>
</html>
