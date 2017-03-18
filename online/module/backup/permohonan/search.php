<?php 
	require_once "../../layout/form.head.php";
	require_once "../../class/permohonan.php";

	$permohonan = new permohonan($db);

	//$setValue = $permohonan->getPermohonan($_GET['id']);
 ?>
	<div class="panel panel-primary">
		<div class="panel-heading">PENCARIAN BERDASARKAN</div>
		<div class="panel-body">
		<?php echo $pesan; ?>
		 <ul class="nav nav-tabs">
            <li class="active"><a href="#nomor" data-toggle="tab"><label>Nomor</label></a>
            </li>
            <!-- <li><a href="#profile" data-toggle="tab">Profile</a>
            </li>
            <li><a href="#messages" data-toggle="tab">Messages</a>
            </li>
            <li><a href="#settings" data-toggle="tab">Settings</a>
            </li> -->
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="nomor">
            <br>
					<form method="post">
						<div class="form-group input-group">
			                <input type="text" class="form-control" name="nomor">
			                <span class="input-group-btn">
			                    <button class="btn btn-default" type="submit" name="cari"><i class="fa fa-search"></i>
			                    </button>
			                </span>
			            </div>
					</form>
					
					<?php 	
					if (isset($_POST['cari'])) {
						$nomor = $_POST['nomor'];
						$find = $permohonan->SearchPermohonan($nomor);

						if ($find) { ?>
						<table class="table table-condensed table-bordered" >
							<tr>
								<td><?php echo $find['NOMORPERMOHONAN']; ?></td>
								<td><?php echo $find['TGLPERMOHONAN']; ?></td>
							</tr>
						</table>
							<?php
						}else{
							echo "Data Tidak Ditemukan";
						}
					} ?>
			</div>
			<div class="tab-pane fade" id="profile"></div>
			<div class="tab-pane fade" id="message"></div>
			<div class="tab-pane fade" id="settings"></div>
		</div>
	</div>
	</div>
 <?php 
	require_once "../../layout/form.foot.php";
 ?>