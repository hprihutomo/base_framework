                        <?php if ($setUser['NAMABAGIAN']=='PENJAMINAN') { 
                                include 'nav.penjaminan.php';
                         }elseif ($setUser['NAMABAGIAN']=='KEUANGAN') {  
                                include 'nav.keuangan.php';
                         }elseif ($setUser['NAMABAGIAN']=='PENGENDALIAN') { 
                                include 'nav.pengendalian.php';
                         }elseif ($setUser['NAMABAGIAN']=='MANAJEMEN RESIKO') { 
                                include 'nav.menrisk.php';
                         }elseif ($setUser['NAMABAGIAN']=='SUPER') { ?>
                            <li>
                            <a href="javascript:void(0)"><i class="fa fa-server fa-fw"></i> MANAJEMEN DATA<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=BANK"> BANK</a>
                                </li>
                                <li>
                                    <a href="?page=NASABAH"> NASABAH</a>
                                </li>
                                <li>
                                    <a href="?page=SERTIFIKAT PENJAMINAN"> SERTIFIKAT PENJAMINAN</a>
                                </li>
                                <li>
                                    <a href="?page=RE-ASURANSI"> RE-ASURANSI</a>
                                </li>
                                <li>
                                    <a href="?page=KLAIM"> KLAIM</a>
                                </li>
                                <li>
                                    <a href="?page=SUBROGASI"> SUBROGASI</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                     
                        <li>
                            <a href="?page=PENJAMINAN"><i class="fa fa-bar-chart-o fa-fw"></i> PENJAMINAN <!-- <span class="fa arrow"></span> --></a>
                        </li>
                         <li>
                            <a href="javascript:void(0)"><i class="fa fa-wrench fa-fw"></i> KEUANGAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=REKENING KORAN">REK. KORAN</a>
                                </li>
                                <li>
                                    <a href="?page=IJP">IJP</a>
                                </li>
                                <li>
                                    <a href="?page=STATUS KOLEKTIBILITAS"> STATUS KOLEKTIBILITAS</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="javascript:void(0)"><i class="fa fa-sitemap fa-fw"></i> PENGENDALIAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=OUTSTANDING">OUTSTANDING</a>
                                </li>
                                <li>
                                    <a href="?page=STATUS">STATUS</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-archive fa-fw"></i> PERSETUJUAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=PERSETUJUAN PENJAMINAN">PENJAMINAN</a>
                                </li>
                                <li>
                                    <a href="?page=PERSETUJUAN SERTIFIKAT">SERTIFIKAT</a>
                                </li>
                            </ul>
                         <li>
                            <a href="javascript:void(0)"><i class="fa fa-archive fa-fw"></i> LAPORAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="javascript:void(0)">DATA PENJAMINAN</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">DATA SERTIFIKAT</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="?page=USERMANAGER"><i class="fa fa-users fa-fw"></i> USERMANAGER</a>
                        </li>
                        <li>
                            <a href="?page=BANKMANAGER"><i class="fa fa-users fa-fw"></i> BANK MANAGER</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-sitemap fa-fw"></i> ARSIP<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=PERMOHONAN">Data Permohonan</a>
                                </li>
                                <li>
                                    <a href="?page=PENJAMINAN">Data Penjaminan</a>
                                </li>
                                <li>
                                    <a href="?page=SERTIFIKAT">Data Sertifikat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>