<?php
session_start();
include 'conn.php';
if (isset ($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      if(empty($username) || empty($password)){
             $pesan = "<div class='alert alert-warning'>PERIKSA USERNAME / PASSWORD</div>";

      }
      else {

          $query = "SELECT * FROM pengguna WHERE namapengguna = :namapengguna AND password = :password";
          $stmt = $db->prepare($query);
          $stmt->bindParam(':namapengguna',$username);
          $stmt->bindParam(':password',$password);
          $stmt->execute();
          $login = $stmt->fetch();

          if($login == true){
            $_SESSION['nama'] = $login['namapengguna'];
            header('Location: index.php');
          }else{

            $pesan = "<div class='alert alert-danger'>Login Error</div>";
          }
      }
  }
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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand active" href="index.php" ><i class="glyphicon glyphicon-list"></i> E-CAFE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <?php if ($_SESSION['nama']==""){ ?>
                    <li>
                        <a href="?p=login"><i class="glyphicon glyphicon-log-in"></i> LOGIN</a>
                    </li>
                    <?php }else{ ?>
                    <li>
                        <a href="?p=DATA KASIR"><i class="glyphicon glyphicon-shopping-cart"></i> KASIR</a>
                    </li>
                    <li>
                        <a href="?p=TRANSAKSI"><i class="glyphicon glyphicon-usd"></i> TRANSAKSI</a>
                    </li>
                    <li>
                        <a href="?p=MENU"><i class="glyphicon glyphicon-folder-open"></i> MENU</a>
                    </li>
                    <li>
                        <a href="?p=MEJA"><i class="glyphicon glyphicon-unchecked"></i> MEJA</a>
                    </li>
                    <li>
                        <a href="?p=PEMBELIAN"><i class="glyphicon glyphicon-menu-hamburger"></i> PEMBELIAN</a>
                    </li>
                    <li>
                        <a href="?p=PEGAWAI"><i class="glyphicon glyphicon-user"></i> PEGAWAI</a>
                    </li>
                    <li>
                        <a href="?p=LAPORAN"><i class="glyphicon glyphicon-print"></i> LAPORAN</a>
                    </li>
                    <li>
                        <a href="?p=logout"><i class="glyphicon glyphicon-log-out"></i> LOG OUT</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header -->

    <!-- Page Content -->
    <div class="container">
      <br>
      <div class="panel panel-primary">
        <div class="panel-heading"><?php if($_GET['p']==''){echo 'HOME';}else {echo $_GET['p'];} ?></div>
      </div>
        <?php
              switch ($_GET[p]) {
                case 'DATA KASIR':
                    include 'modul/data.kasir.php';
                  break;
                case 'KASIR':
                    include 'modul/kasir.php';
                  break;
                case 'TRANSAKSI':
                    include 'modul/data.transaksi.php';
                  break;
                case 'PEMBAYARAN':
                   include 'modul/kasir.php';
                  break;
                case 'INPUT TRANSAKSI':
                  include 'modul/input.transaksi.php';
                  break;
                case 'TAMBAH TRANSAKSI':
                  include 'modul/tambah.transaksi.php';
                  break;
                case 'login':
                    include 'login.php';
                  break;
                case 'logout':
                    include 'logout.php';
                  break;
                case 'MEJA':
                    include 'modul/data.meja.php';
                  break;
                case 'TAMBAH MEJA':
                    include 'modul/input.meja.php';
                  break;
                case 'EDIT MEJA':
                    include 'modul/edit.meja.php';
                  break;
                case 'MENU':
                    include 'modul/data.menu.php';
                  break;
                case 'TAMBAH MENU':
                    include 'modul/input.menu.php';
                  break;
                case 'EDIT MENU':
                    include 'modul/edit.menu.php';
                  break;
                case 'PEGAWAI':
                    include 'modul/data.pegawai.php';
                  break;
                case 'TAMBAH PEGAWAI':
                    include 'modul/input.pegawai.php';
                  break;
                case 'EDIT PEGAWAI':
                    include 'modul/edit.pegawai.php';
                  break;
                case 'PEMBELIAN':
                    include 'modul/data.pembelian.php';
                break;
                case 'TAMBAH PEMBELIAN':
                    include 'modul/tambah.pembelian.php';
                break;
                case 'LAPORAN':
                    include 'modul/laporan.php';
                break;
                case 'LAPORAN PEMBELIAN':
                    include 'modul/laporan.pembelian.php';
                break;
                case 'LAPORAN PENJUALAN':
                    include 'modul/laporan.penjualan.php';
                break;
                case 'INPUT PEMBELIAN':
                    include 'modul/input.pembelian.php';
                break;
                default:
                  include 'home.php';
                break;
              }

        ?>
        <!-- Footer
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>-->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

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
    <script type="text/javascript">
      $(document).ready(function(){
        $('#diskon').keyup(function(){
          var harga = parseFloat($('#harga').val());
          var diskon = parseFloat($('#diskon').val());
          var hdiskon = harga*(diskon/100);
          $('#hdiskon').val(hdiskon);

          var hardiskon = parseFloat($('#hdiskon').val());
          var total = harga-hdiskon;
          $('#hargatotal').val(total);

          var stotal   = parseFloat($('#hargatotal').val());

          var qty     = parseFloat($('#qty').val());
          var subtotal = qty*stotal;

          $('#subtotal').val(subtotal);


        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#hargabl').keyup(function(){
          var qtybl = parseFloat($('#qtybl').val());
          var hargabl = parseFloat($('#hargabl').val());
          var subtotalbl = qtybl*hargabl;
          $('#subtotalbl').val(subtotalbl);

        });
      });
    </script>


</body>

</html>
