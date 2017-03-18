<?php if ($JABATAN == 'STAFF' OR $JABATAN == 'KABAG') {?>
<li>
    <a href="?page=PENJAMINAN"><i class="fa fa-bar-chart-o fa-fw"></i> PENJAMINAN <!-- <span class="fa arrow"></span> --></a>
</li>
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
<?php }elseif ($JABATAN == 'DIREKSI') { ?>
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
            <!-- <li>
                <a href="javascript:void(0)">DATA PERMOHONAN</a>
            </li>
            <li>
                <a href="javascript:void(0)">DATA NASABAH</a>
            </li> -->
            <li>
                <a href="javascript:void(0)">DATA PENJAMINAN</a>
            </li>
            <li>
                <a href="javascript:void(0)">DATA SERTIFIKAT</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
<?php } ?>