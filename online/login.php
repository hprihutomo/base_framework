<?php
    // Lampirkan db dan User
    require_once "library/database.php";
    require_once "class/user.php";


    //Buat object user
    $user = new User($db);

    //Jika sudah login
    if($user->isLoggedIn()){
        header("location: index.php"); //redirect ke index
    }

    //jika ada data yg dikirim
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Proses login user
        if($user->login($username, $password)){
            header("location: index.php");
        }else{
            // Jika login gagal, ambil pesan error
            $error = $user->getLastError();
        }
    }
    // if ($error) {
    //    echo '<script language="javascript">';
    //     echo 'alert("USERNAME DAN PASSWORD TIDAK SAMA")';
    //     echo '</script>';
    // }
 ?>


 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT.JAMKRDIRAKALTIM</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS
    <link href="assets/metisMenu/dist/metisMenu.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
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

<body> <!-- onload="startTime();" -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header text-center">
      <a class="navbar-brand " href="#">
        <img src="img/logo.png" height="45" ></img>
      </a>
    </div>
     <ul class="nav navbar-top-links navbar-right">
           <!--  <li><a><span id="clocktime"></span></a></li> -->

           <form class="form-inline" style="margin-top:5px; padding-bottom:5px;" role="form" method="post">
              <div class="form-group">
                <!-- <label class="sr-only" for="exampleInputEmail3">Email address</label> -->
                <input type="text" class="form-control" placeholder="Username" name="username" type="text" autofocus required autocomplete="off">
              </div>
              <div class="form-group">
                <!-- <label class="sr-only" for="exampleInputPassword3">Password</label> -->
                <input type="password" class="form-control" placeholder="Password" name="password" type="password" value="" required>
              </div>
              <button type="submit" name="login" class="btn btn-sm btn-success">Log In <i class="glyphicon glyphicon-log-in"></i></button>
            </form>
                <!-- /.dropdown -->
            </ul>
  </div>
</nav>
<?php echo $error; ?>
    <div class="container">

            <div class="col-lg-12">
                <marquee behavior="" direction=""><h3> SELAMAT DATANG DI SISTEM INFORMASI PENJAMINAN</h3> </marquee>
            </div>

                <div class="col-lg-8">
                    <div class="panel panel-info">
                        <div class="panel-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="http://125.160.21.147/online/img/logo.png" alt="...">
                              <!-- <div class="carousel-caption">
                                <h3>Caption Text</h3>
                              </div> -->
                            </div>
                            <div class="item">
                              <img src="http://125.160.21.147/online/img/logo.png" alt="...">
                              <!-- <div class="carousel-caption">
                                <h3>Caption Text</h3>
                              </div> -->
                            </div>
                            <div class="item">
                              <img src="http://125.160.21.147/online/img/logo.png" alt="...">
                              <!-- <div class="carousel-caption">
                                <h3>Caption Text</h3>
                              </div> -->
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                        </div> <!-- Carousel -->
                    </div>
                    </div>
                    </div>

            <div class="col-lg-4">
                <div class="panel panel-info">
                  <div class="panel-heading">PENGUMUMAN</div>
                    <div class="panel-body">
                    Kepada Seluruh Operator
                      <ul>
                        <li>Hindari login melalui link email</li>
                        <li>Jangan pernah beritahukan password Anda ke siapapun</li>
                        <li>Beritahu kami jika Anda menemukan website serupa/palsu</li>
                      </ul>
                      Browser yang direkomendasikan adalah <a href="https://www.google.com/chrome/browser/desktop/#" target="_blank"><b><i>Google Chrome</i></b></a><p></p>
                      <div class="text-center"><a href=""><label for="">Syarat & Ketentuan</label></a></div>

                    </div>
                </div>
            </div>

        <div class="col-lg-12">
            <div class="panel panel-info">
              <div class="panel-heading">MITRA KERJA</div>
                <div class="panel-body">
                  <div class="col-lg-4"><img height="45" src="img/BPR Permata Hati Jaya.jpg" alt="" class="img-responsive"></div>
                  <div class="col-lg-4 text-center"><img height="45" src="img/Bankaltim.jpg" alt="" class="img-responsive"></div>
                  <div class="col-lg-4" style="padding-bottom:50px;"><img height="45" src="img/BPR BePeDe Kutai Sejahtera.jpg" alt="" class="img-responsive"></div>

                  <div class="col-lg-4"><img height="45" src="img/BPR Bulungan.jpg" alt="" class="img-responsive"></div>
                  <div class="col-lg-4 text-center"><img height="45" src="img/BPR Kota Samarinda.PNG" alt="" class="img-responsive"></div>
                  <div class="col-lg-4"><img height="45" src="img/BPR Kutim.jpg" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $('.carousel').carousel({
                interval: 3000
            })
        </script>

    <!-- Metis Menu Plugin JavaScript
    <script src="assets/metisMenu/dist/metisMenu.min.js"></script>-->
    <script  src="assets/js/time.js"></script>

    <!-- Custom Theme JavaScript
    <script src="assets/dist/js/sb-admin-2.js"></script>-->

</body>

</html>
<!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <div align="center">
                         <img src="img/logo.png" height="45" ></img>
                         </div>
                    </div>
                    <div class="panel-body">
                    <?php //if (isset($error)): ?>
                          <div class="alert alert-danger">
                              <?php //echo $error ?>
                          </div>
                      <?php //endif; ?>
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group form-group-sm">
                                    <input class="form-control input-sm" >
                                </div>
                                <div class="form-group form-group-sm">
                                    <input class="form-control input-sm" >
                                </div>
                                <div class="form-group form-group-sm">
                                    <select class="form-control input-sm" name="pilih">
                                        <option value="Jamkrida">Member Alpha</option>
                                        <option value="Bank">Member Beta</option>
                                    </select>
                                </div>

                                <button type="submit" name="login" class="btn btn-xs btn-primary"> Log in <i class="glyphicon glyphicon-log-in"></i></button>
                                <a href="index.php" class="btn btn-xs btn-warning"> Forget Password <i class="fa fa-question fa-fw"></i></a>
                            </fieldset>
                        </form>
                    </div>
                </div> -->
