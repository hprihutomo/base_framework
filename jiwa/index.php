<html>
<head>
	<title>.::Sistem Pakar Indikasi Gangguan Jiwa::.</title>
	<link rel="shortcut icon" href="images/icon.ico" />
	<!-- <link rel="stylesheet" href="Asset/css/bootstrap.min.css"> -->
	<link href="css/default.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="css/pop.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/pop.js" type="text/javascript"></script>
	<script type="text/javascript">
		function tutup (bersih) {
			document.getElementById(bersih).innerHTML="";
		}
	</script>
</head>
<body>
<!-- start header -->
<div id="header">
<table  width="50%" align="center" style="font-size:23px;">
			<tr>
				<td align="center"><strong>Sistem Pakar Indikasi Gangguan Jiwa</strong></td>
			</tr>
			<tr>
				<td align="center"><strong>R.S Atma Husada Mahakam Samarinda</strong></td>
			</tr>
	</table>
	<div id="logo"><img src="images/logo.jpg" alt="" title="" width="100" height="100" border="0" /></div>
	<div id="logo2"><img src="images/images-1.jpg" alt="" title="" width="100" height="100" border="0" /></div>
	
	 	
</div>
<!-- end header -->
<!-- star menu -->
<div id="menu">
	<ul>
		<li class="current_page_item"><a href="index.php"><img src="images/i1.png" height="27">Home</a></li>
		<li><a href="index.php?page=dafsakit"><img src="images/i3.png" height="27">Penyakit</a></li>
		<li><a href="index.php?page=daftar"><img src="images/i2.png" height="27">Konsultasi</a></li>
		<li class="tab4"><a href="admin/log/login.php" target="_blank"><img src="images/i4.png" height="27">Admin</a></li>

	</ul><br>
	<?php include "data/kalender/jam.php"; ?>
</div>
<!-- end menu -->
<!-- start page -->
<div id="box"></div>
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
		<?php
		include "inc.bukaprogram.php"
		?>			
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<!-- <div id="search">
			<h2>Search</h2>
			<form id="searchform" method="post" action="?page=cari">
				<fieldset>
				<input type="text" name="kata" size="15" />
				<input type="submit" name="Search" value="Search" />
				</fieldset>
			</form>
		</div> -->
		<ul>
			<li id="Profil">
				<h2>Literatur</h2>
			
					<?php
						include "data/pro/profil.php"
					?>
				
			</li>
			<!-- <li id="calendar">
				<h2>Calendar</h2>
				<div id="calendar_wrap">
					<table id="wp-calendar" summary="Calendar">
						<?php
							include "data/kalender/jam.php";
							include "data/kalender/Hijriah.php";
							//echo hijriah();
						?>
					</table>
				</div>
			</li> -->
		</ul>
	</div>
	<!-- end sidebar -->
	<div id="extra" style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	
</div>
<!-- end footer -->
</body>
</html>
