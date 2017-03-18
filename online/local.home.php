<div class="row">
                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <!--<div class="panel panel-primary">
                        <div class="panel-body">
                             <div class="col-lg-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Biodata</div>
                                        <div class="panel-body">
                                            <table class="table table-bordered table-condensed">
                                                <tr>
                                                    <td width="50">Nama </td>
                                                    <td><?php echo strtoupper($setUser['NAMAUSER']); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan </td>
                                                    <td><?php echo strtoupper($setUser['NAMAJABATAN']); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bagian </td>
                                                    <td><?php echo strtoupper($setUser['NAMABAGIAN']); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status </td>
                                                    <td><?php echo strtoupper($setUser['STATUSUSER']); ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                </div>
                            </div> 
                             <div class="col-lg-12">-->
                   <!--  <div class="panel panel-info">
                        <div class="panel-heading">
                            Permohonan
                        </div> -->
                        <!-- /.panel-heading -->
                        <!-- <div class="panel-body"> -->
                            <!-- Nav tabs -->
                            <?php //include "module/permohonan/data.php"; ?>
                        <!-- </div> -->
                        <!-- /.panel-body -->
                   <!--  </div>
                </div>
                        </div> -->
                   
             <!--    </div>
            </div> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                        <li class="active"><a href="#produktif" data-toggle="tab">PRODUKTIF</a>
                                        </li>
                                        <li><a href="#multiguna" data-toggle="tab">MULTIGUNA</a>
                                        </li>
                                        <li><a href="#konstruksi" data-toggle="tab">KONSTRUKSI</a>
                                        </li>
                                        <!-- <li><a href="#settings" data-toggle="tab">Settings</a>
                                        </li> -->
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="produktif">
                                            
                                        </div>
                                        <div class="tab-pane fade" id="multiguna">
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                <?php include 'module/permohonan/multiguna.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="konstruksi">
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                <?php include 'module/permohonan/konstruksi.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="settings">
                                            <h4>Settings Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                        </div>
                    </div>      
                </div>
            </div>

            <!-- <div class="col-lg-3 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-envelope fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>PERMOHONAN</div>
                                </div>
                            </div>
                        </div>
                        <a href="?page=umkm">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-certificate fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>SERTIFIKAT</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>INFORMASI</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->
                <!-- <div class="col-lg-2 col-md-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cogs fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->