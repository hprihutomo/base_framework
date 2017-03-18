<?php  
    // Lampirkan db dan User
    require_once "library/database.php";
    require_once "class/user.php";

    // Buat object user
    $user = new User($db);

    // Jika sudah login
    // if($user->isLoggedIn()){
    //     header("location: index.php"); //Redirect ke index
    // }

    //Jika ada data dikirim
    if(isset($_POST['register'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        //$kode = $_POST['kode'];

        // Registrasi user baru
        $action = $user->register($nama, $email, $username, $password);

        if($action){
                $pesan = "<div class='alert alert-success'> BERHASIL, Silakan Log In <a href='login.php'>disini</a></div>";
            }else{
                $pesan = "<div class='alert alert-danger'>GAGAL </div>";
                //$error = $user->getLastError();
            }
    }

    // $no = 1;
    // $data = $user->getData($no);
            
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
<body>

<div class="col-lg-4">
<div class="panel-primary">
    <div class="panel-heading">REGISTER</div>
    <div class="panel-body">
    <?php echo $pesan; ?>
        <form method="post">
         <table class='table table-bordered table-condensed'>
             <tr>
                 <td>Nama</td>
                 <td>:</td>
                 <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
             </tr>
             <tr>
                 <td>Email</td>
                 <td>:</td>
                 <td><input type="text" name="email" autocomplete="off"></td>
             </tr>
             <tr>
                 <td>Username</td>
                 <td>:</td>
                 <td><input type="text" name="username" autocomplete="off"></td>
             </tr>
             <tr>
                 <td>Password</td>
                 <td>:</td>
                 <td><input type="password" name="password" autocomplete="off"></td>
             </tr>
            <!--              
            <tr>
                 <td>Kode</td>
                 <td>:</td>
                 <td><input type="text" name="kode"></td>
             </tr>
              -->
             <tr>
                 <td colspan="2"></td>
                 <td><button id="register" name="register" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-list"></i> Register</button></td>
             </tr>
         </table>
    </form>
    </div>
</div>
</div>
<!-- <div class="col-lg-4">
    <table class='table table-bordered table-condensed'>
        <thead>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Aksi</th>
        </thead>
        <tbody>
        <?php  

            foreach ($user->tampil() as $key => $value) {
        ?>
            <tr>
                <td><?php echo $value['NAMAUSER'] ?></td>
                <td><?php echo $value['EMAIL'] ?></td>
                <td><?php echo $value['USERNAME'] ?></td>
                <td>
                    <?php echo $value['IDUSER'] ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div> -->
    
     </body>
</html> 