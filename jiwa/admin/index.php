<?php
session_start();
if (isset($_SESSION['user']) ==""){
	header('location:log/login.php');
}
?>
<html>
	<head>
		<title>Admin Sisitem Pakar</title>
		<link href="css/stylelog.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="shortcut icon" href="../images/icon.ico" />
		<script type="text/javascript" src="js/inrelasi.js"></script>
		<style type="text/css">
			.info{
				background:rgba(100,100,200,0.4);font:0.9em arial;padding:5px;
				color: white;font-weight:bold;text-align:center;margin-top:-19px;width:100%;
			}
		</style>
	</head>	
	<body>
		<div class="container" style="min-height:300px;">
			<div id="menu"><h1>Menu</h1>
  					<a href="index.php"><li>Home</li></a>
					<a href="index.php?page=inpenyakit"><li>Penyakit</li></a>
					<a href="index.php?page=ingejala"><li>Gejala</li></a>
					<a href="index.php?page=inrelasi"><li>Relasi</li> </a>
					<a href="index.php?page=lap"><li>lihat relasi</li> </a>
					<a href="index.php?page=statis"><li>laporan Penyakit</li> </a>
					<a href="index.php?page=kon"><li>laporan Konsultasi</li> </a>
					<a href="log/logout.php"><li>LogOut</li> </a>
  			</div>
			<div id="kanan">
				<div class="isi">
					<?php
					include "inc.bukaprogram.php";
 				 	?>
				</div>
 			</div>
		</div>
	</body>
</html>
