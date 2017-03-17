<?php 
include "librari/inc.koneksidb.php";
?>

<style type="text/css">
/*.muncul_p{border:0px solid rgba(10,10,100,0.2);background:rgba(17,17,251,0.1);width: 80%;border-bottom: hidden; margin: 10px 50px 0 10px; border-radius: 8px;}*/
.muncul_p h1{font: 12px; color: #06067e; }
.muncul_p td{border:0px solid green;padding:5px;}
a{cursor: pointer;}
</style>
<div>
	<h2>NAMA-NAMA GANGGUAN JIWA</h2>
	<?php
	$q = mysql_query("SELECT * FROM penyakit");

	?>
	<?php
	    while ($rl = mysql_fetch_array($q)) {
	        $penyakit = $rl['nm_penyakit'];
	        $idp      = $rl['kd_penyakit'];	    
	?>
			<table class="muncul_p">
			  <tr>
			    <td><a onclick="window.open('data/penyakit/data.php?idp=<?=$idp?>','',width='50',height='50')"><?=$penyakit?></a></td>
			  </tr>
			 </table>
	  <?php
	   }
	    ?>
</div>