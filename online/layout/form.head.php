<?php 

    include_once "../../library/database.php";
    include_once "../../library/function.php";

    //include_once "../../library/xss.php";
    include_once "../../library/component.php"; 
    include_once "../../provider/provider.php";
    
    include_once "../../class/user.php";
    //include_once "../../class/master.class.php";


    //$xss = new AntiXSS();
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
    $BAGIAN = $setUser['NAMABAGIAN'];
    $JABATAN = $setUser['NAMAJABATAN'];
    $LEVEL = $setUser['NAMALEVEL'];
    
    $query = "SELECT * FROM MSUSER WHERE IDUSER = $IDUSER";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    $IDBANK = $data['IDBANK'];


    
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
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../assets/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../assets/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        @media print {
            input.noPrint { display: none; }    }
        /*body{
            font-family:Arial, Helvetica, sans-serif;
            font-size:9px;
        }*/
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>