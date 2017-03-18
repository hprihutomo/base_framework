<?php 
	$page = $_GET['page'];
	$act  = $_GET['action'];

	switch ($page) {
		case 'BANK':
			include 'module/manajemen/list.bank.php';
			break;
		case 'NASABAH':
			include 'module/manajemen/list.nasabah.php';
			break;
		case 'SERTIFIKAT PENJAMINAN':
			include 'module/manajemen/list.sertifikat.php';
		break;
		case 'RE-ASURANSI':
			include 'module/manajemen/list.reass.php';
		break;
		case 'KLAIM':
			include 'module/manajemen/list.klaim.php';
		break;
		case 'PERMOHONAN':
			include 'module/permohonan/produktif.php';
		break;
		case 'USERMANAGER':
			include 'module/usermanager/user.data.php';
		break;
		case 'BANKMANAGER':
			include 'module/manajemen/user.bank.php';
		break;
		case 'IJP':
			include 'module/keuangan/list.penjaminan.php';
		break;
		
		default:
			if ($BAGIAN == 'PENJAMINAN') {
				if($JABATAN == 'STAFF'){
					include 'module/penjaminan/list.permohonan.php';
				}elseif ($JABATAN == 'DIREKSI') {
					include 'module/direksi/list.verifikasi.php';
				}elseif ($JABATAN == 'KABAG') {
					include 'module/penjaminan/list.verifikasi.php';
				}
			}elseif ($BAGIAN == 'KEUANGAN') {
				include 'module/keuangan/list.permohonan.php';
				include 'module/keuangan/list.ijp.php';
			}elseif ($BAGIAN == 'MANAJEMEN RESIKO') {
				include 'module/menrisk/list.permohonan.php';
			}
		break;
	}
 ?>