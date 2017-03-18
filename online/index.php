<?php 

    include_once "library/component.php";
    include_once "library/function.php";
    include_once "library/database.php";
    
    include "class/user.php";
       $user = new User($db);

    // Jika belum login
    if(!$user->isLoggedIn()){
        header("location: login.php"); //Redirect ke halaman login
    }

    // Ambil data user saat ini
    $setUser = $user->getUser();

    $IDUSER = $setUser['IDUSER'];
    $NAMA = $setUser['NAMAUSER'];
    $PIN = $setUser['PINCODE'];
    $IDBANK = $setUser['IDBANK'];
    $BAGIAN = $setUser['NAMABAGIAN'];
    $JABATAN = $setUser['NAMAJABATAN'];
    $LEVEL = $setUser['NAMALEVEL'];
    $STATUSUSER = $setUser['STATUS'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $main_title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <link href="assets/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/ico/favicon-16x16.png">
    <link rel="manifest" href="img/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body onload="startTime();">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" height="45" ></img>
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <?php if($setUser['NAMALEVEL'] == 'ONLINE'){ ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="pesan">
                        <i class="fa fa-bell fa-fw"></i> <span class="badge" id="notifikasi"></span> 
                    </a>
                    <ul class="dropdown-menu dropdown-messages" id="konten-info">                       
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <?php }elseif ($setUser['NAMALEVEL'] == 'LOCAL') { ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="list">
                        <i class="fa fa-envelope fa-fw"></i> <span class="badge" id="ring"></span> 
                    </a>
                    <ul class="dropdown-menu dropdown-messages" id="list-info">                       
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
               <?php }elseif ($setUser['NAMALEVEL'] == 'SUPER') { ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="pesan">
                        <i class="fa fa-bell fa-fw"></i> <span class="badge" id="notifikasi"></span> 
                    </a>
                    <ul class="dropdown-menu dropdown-messages" id="konten-info">                       
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="list">
                        <i class="fa fa-envelope fa-fw"></i> <span class="badge" id="ring"></span> 
                    </a>
                    <ul class="dropdown-menu dropdown-messages" id="list-info">                       
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
               <?php } ?>
                <!-- /.dropdown 
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <span class="badge" id="alert"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    /.dropdown-alerts 
                </li>
                 /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo strtoupper($setUser['NAMAUSER']); ?> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                        <!--  <li><a><i class="fa fa-user fa-fw"></i> <?php echo strtoupper($currentUser['NAMAUSER']); ?></a>
                           <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            /input-group
                        </li>  -->
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-clock-o fa-fw"></i> <b><span id="clocktime"></span></b></a>
                        </li>
                        <li>
                            <a href="?page=Dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                    <?php 
                        //// Navigasi Kiri

                    if($setUser['NAMALEVEL']=='ONLINE'){
                        if ($STATUSUSER == 'A') {
                           include "layout/online.navigasi.php";
                        }else{
                            echo " ";
                        }    
                    }elseif($setUser['NAMALEVEL']=='LOCAL'){
                        include "layout/local.navigasi.php";
                    }elseif($setUser['NAMALEVEL']=='SUPER'){
                        include "layout/online.navigasi.php";
                        include "layout/local.navigasi.php";
                    }
                     ?>
                        <li>
                            <a href="logout.php"><i class="fa fa-power-off fa-fw"></i> Log Out</a>
                        </li>
                     </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
            <br>

                <!-- <div class="col-lg-12">
                <div class="panel panel-success">
                        <div class="panel-heading">
                        
                        </div>
                </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>
                                <?php if($_GET['page']==''){ echo strtoupper("Dashboard"); }else{echo strtoupper($_GET['page']);} ?>
                            </b>
                            <div class="pull-right">
                                <b><i class="fa fa-bookmark"></i> : <?php echo $JABATAN; ?> | <i class="fa fa-building"></i>  : <?php echo $BAGIAN; ?> | <i class="fa fa-cloud"></i>  : <?php echo $LEVEL; ?></b>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php if ($setUser['NAMALEVEL']=='ONLINE') { 
                if ($STATUSUSER == 'A') {
                         include "online.content.php";  
                        }else{
                         include 'layout/nonaktif.php';
                        } 
            }elseif ($setUser['NAMALEVEL']=='LOCAL') { 
                include "local.content.php";
            }elseif ($setUser['NAMALEVEL']=='SUPER') { 
                include "online.content.php";
                include "local.content.php";
            } ?>
        </div>
        <!-- /#page-wrapper -->
    <input type="hidden" name="IDBANK" id="IDBANK" value="<?php echo $IDBANK;?>">
    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery -->
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript  -->
    <script src="assets/raphael/raphael.min.js"></script>
    <script src="assets/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/datatables/js/jquery.dataTables.js"></script>
    <script src="assets/datatables/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/datatables-responsive/dataTables.responsive.js"></script>
    
    <script src="assets/js/popup.js"></script>
  

    <script>
    $(document).ready(function() {
        $('.mytable').DataTable({
            "responsive": true,
            "searching": false,
            "ordering": false,
            //"info": false,
            "paging": true,
            //"ajax": "module/data.php",

        });
    });
    </script>
    <?php if($setUser['NAMALEVEL']=='ONLINE'){ ?>
    <script  src="assets/js/notifikasi-bank.js"></script>
    <?php }elseif ($setUser['NAMALEVEL']=='LOCAL') { ?>
    <script  src="assets/js/notifikasi-jamkrida.js"></script>
    <?php }elseif ($setUser['NAMALEVEL']=='SUPER') { ?>
    <script  src="assets/js/notifikasi-bank.js"></script>
    <script  src="assets/js/notifikasi-jamkrida.js"></script>
    <?php }  ?>
    <script  src="assets/js/widget.sertifikat.js"></script>
    <script  src="assets/js/widget.permohonan.js"></script>
    <script  src="assets/js/widget.penjaminan.js"></script>

    <script src="assets/js/sb-admin-2.js"></script>
    <script  src="assets/js/time.js"></script>
    

</body>

</html>
