<?php 
	require_once "../../layout/form.head.php";
	require_once "../../class/permohonan.php";

	//$permohonan = new permohonan($db);
    //$set = new Master($db);

	//$setValue = $permohonan->getPermohonan($_GET['id']);
	//echo $setValue['NOMORPERMOHONAN'];


	
	
    $query ="SELECT * FROM DATA_PERMOHONAN WHERE IDPERMOHONAN = ".$_GET['id']."";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $setValue = $stmt->fetch();
	
 ?>

                    <div class="panel panel-default">
                        <div class="panel-body">
                         <?php echo $pesan; ?>
                            <ul class="nav nav-tabs">
                                        <li class="active"><a href="#permohonan" data-toggle="tab"><i class="fa fa-file"></i> PERMOHONAN (A-1)</a>
                                        </li>
                                        <li><a href="#nasabah" data-toggle="tab"><i class="fa fa-users"></i> NASABAH (A-2)</a>
                                        </li>
                                        <!-- <li><a href="#berkas" data-toggle="tab"><i class="fa fa-folder"></i> BERKAS (A-3)</a>
                                        </li> 
                                        <li><a href="#settings" data-toggle="tab"> <i class="fa fa-send"></i> KIRIM</a>
                                        </li>-->
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="permohonan">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                               		<?php include 'review.permohonan.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nasabah">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                <?php include 'review.nasabah.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="tab-pane fade" id="berkas">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                <?php //include 'review.berkas.php'; ?>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="tab-pane fade" id="settings">
                                        <div class="panel panel-default">
                                           <div class="panel-body">
                                           	<?php //include 'review.kirim.php'; ?>
                                           </div>
                                         </div>
                                        </div> -->
                                    </div>
                                    <a href="javascript:void(0)" onclick="tutup()" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> TUTUP</a>
                               </div>

                        </div>
                    </div>      
           
<?php
	require_once "../../layout/form.foot.php";
?>
