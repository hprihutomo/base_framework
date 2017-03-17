<?php include '../conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>.::SISTEM PAKAR INDIKASI GANGGUAN JIWA::.</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/one-page-wonder.css" rel="stylesheet">

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
                <a class="navbar-brand active" href="index.php" ><i class="glyphicon glyphicon-home"></i> HALAMAN ADMIN</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="?p=penyakit"><i class="glyphicon glyphicon-alert"></i> GANGGUAN</a>
                    </li>
                    <li>
                        <a href="?p=gejala"><i class="glyphicon glyphicon-question-sign"></i> GEJALA</a>
                    </li>
                    <li>
                        <a href="?p=relasi"><i class="glyphicon glyphicon-random"></i> RELASI</a>
                    </li>
                    <!-- <li>
                        <a href="?p=analisa"><i class="glyphicon glyphicon-file"></i> HASIL ANALISA</a>
                    </li> -->
                    <li>
                        <a href="../"><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
                    </li>
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


        <?php
              switch ($_GET[p]) {
                case 'penyakit':
                    include 'data/penyakit/data.php';
                  break;
                case 'gejala':
                    include 'data/gejala/data.php';
                  break;
                case 'relasi':
                    include 'data/relasi/data.php';
                  break;
                case 'analisa':
                    include 'data/hasil/data.php';
                  break;
                case 'tambahgejala':
                    include 'data/gejala/input.php';
                  break;
                case 'updategejala':
                    include 'data/gejala/edit.php';
                  break;
                case 'tambahpenyakit':
                    include 'data/penyakit/input.php';
                  break;
                case 'updatepenyakit':
                    include 'data/penyakit/edit.php';
                  break;
                case 'detailpenyakit':
                    include 'data/penyakit/detail.php';
                  break;
                  case 'input':
                      include 'data/relasi/input.php';
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
        </footer> -->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
