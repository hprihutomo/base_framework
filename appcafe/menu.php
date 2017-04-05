<?php include 'conn.php'; ?>
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
  <div class="panel panel-default">
    <div class="panel-body">
      <!-- <div class="pull-right">
        <p>
          <a href="?p=TAMBAH MENU" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
        </p>
      </div> -->

      <table class="table table-bordered table-condensed" id="mytable">
        <thead>
          <th width='50'>PILIH</th>
          <th>NO</th>
          <th>NAMA</th>
          <th>DISKON</th>
          <th>HARGA</th>
          <!-- <th>STATUS</th> -->
          <!-- <th>AKSI</th> -->
        </thead>
        <tbody>
          <?php
              $query="SELECT * FROM daftar_menu";
              $stmt = $db->prepare($query);
              $stmt->execute();
              $i = 1;
              foreach ($stmt->fetchALL() as $key => $value) {
                $no = $i++;
          ?>
          <tr>
            <td><a href="#" onClick="ambil('<?php echo $value['idmenu'];?>')" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-check"></i>PILIH</a></td>
            <td id="idmenu<?php echo $value['idmenu'];?>"><?php echo $value['idmenu']; ?></td>
            <td id="namamenu<?php echo $value['idmenu'];?>"><?php echo $value['namamenu']; ?></td>
            <td id="diskon<?php echo $value['idmenu'];?>"><?php echo $value['menudiskon']; ?></td>
            <td id="harga<?php echo $value['idmenu'];?>"><?php echo $value['Harga']; ?></td>
            <!-- <td><?php //if($value['statusMenu']=='1'){ echo "ADA";}else { echo "KOSONG";  } ?></td> -->
            <!-- <td>
              <a href="?p=EDIT MENU&idM=<?php //echo $value['idmenu']; ?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-check"></i></a>
            </td> -->
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    function ambil(a){
          window.opener.document.forms.idmenu.value=document.getElementById("idmenu"+a+"").innerHTML;
          window.opener.document.forms.namamenu.value=document.getElementById("namamenu"+a+"").innerHTML;
          window.opener.document.forms.diskon.value=document.getElementById("diskon"+a+"").innerHTML;
          window.opener.document.forms.harga.value=document.getElementById("harga"+a+"").innerHTML;
          window.close();
          }
  </script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <!-- <script src="js/popup.js"></script> -->


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
