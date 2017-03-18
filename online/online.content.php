<?php 
	$page = $_GET['page'];
	$act  = $_GET['action'];

	switch ($page) {
		// case 'BANK':
		// 	include 'module/master/list.bank.php';
		// 	break;
		// case 'NASABAH':
		// 	include 'module/master/list.nasabah.php';
		// 	break;
		case 'sertifikat':
			include 'module/master/list.sertifikat.php';
		break;
		case 'faq':
			include 'module/bantuan/faq.php';
		break;
		case 'bantuan':
			include 'module/bantuan/bantuan.php';
		break;
		case 'chat':
			include 'module/bantuan/chat.php';
		break;
		// case 'KLAIM':
		// 	include 'module/master/list.klaim.php';
		// break;
		// case 'SUBROGASI':
		// 	include 'module/master/list.subrogasi.php';
		// break;
		default:
			include "online.home.php";
		break;
	}
 ?>