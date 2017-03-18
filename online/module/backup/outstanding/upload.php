<?php 
	require_once "../../layout/form.head.php";
 ?>
	<div class="panel panel-primary">
		<div class="panel-heading">UPLOAD OUTSTANDING</div>
		<div class="panel-body">
		<div class="panel panel-info">
			<div class="panel-body">
				<form action="" class="form-inline">
				<input type="file" class="">
				<br>
				<div class="pull-left">
					<input type="text" placeholder="PIN"  class="form-control input-sm ">
				</div>
				
				<div class="pull-right">
					<button class="btn btn-sm btn-danger" onclick="tutup()"><i class="fa fa-remove"></i> TUTUP</button>
					<button class="btn btn-sm btn-info "><i class="fa fa-upload"></i> UPLOAD</button>
				</div>
			</form>
			</div>
		</div>
			
			<br>
			<p>
				Format Outstanding dalam bentuk .xls/.xlsx
				dapat di download <a href="">sini</a>
			</p>
		</div>
	</div>
 <?php
	require_once "../../layout/form.foot.php";
 ?>