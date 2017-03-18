<?php
	require_once "../../layout/form.head.php";
?>
		<div class="panel panel-default">
			<div class="panel-heading"><label for="">DATA RE-ASURANSI</label></div>
			<div class="panel-body">

		<table class='table table-bordered table-condensed mytable' ><!-- id="mytable" -->
	        <thead>
	            <th width="45" >ID </th>
	            <th >NAMA</th>
	            <th >ALAMAT</th>
	            <th >PRODUKTIF</th>
	            <th >MULTIGUNA</th>
	            <th >KONSTRUKSI</th>
	            <th width="175" >AKSI</th>
	            
	        </thead>
	        <tbody>
	        <?php
	        	$query = "SELECT * FROM MSREASS";
	        	$stmt = $db->prepare($query);
	        	$stmt->execute();
	            foreach ($stmt->fetchAll() as $key => $value) {
	        ?>
	            <tr>
	                <td id="idr<?php echo $value['IDREASS']; ?>"><?php echo $value['IDREASS']; ?></td>
	                <td id="namareass<?php echo $value['IDREASS']; ?>"><?php echo $value['NAMAREASS'] ?></td>
	                <td><?php echo $value['ALAMATREASS'] ?></td>
	                <td id="produktif<?php echo $value['IDREASS']; ?>"><?php echo $value['PRODUKTIF'] ?></td>
	                <td id="multiguna<?php echo $value['IDREASS']; ?>"><?php echo $value['MULTIGUNA'] ?></td>
	                <td id="konstruksi<?php echo $value['IDREASS']; ?>"><?php echo $value['KONSTRUKSI'] ?></td>
	                <td class="text-center">
	                	<a href="#" onClick="setreass('<?php echo $value['IDREASS']; ?>')"   class="btn btn-xs btn-primary">PILIH</a>
					</td>
	                </td>
	            </tr>
	            <?php } ?>
	        </tbody>
	    </table>
			</div>
		</div>

<?php
	require_once "../../layout/form.foot.php";
 ?>
