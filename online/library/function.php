<?php 

function date_idn ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = '') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',

    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan ','Feb ','Mar ','Apr ','Mei ','Jun ','Jul ','Ags ','Sep ','Okt ','Nov ','Des ',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    return $date;
}

function alert($exec){
	if($exec == true){
		 $pesan = "<div id='peringatan' class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
	}else{
		 $pesan = "<div id='peringatan' class='alert alert-warning' role='alert'>Data Gagal Disimpan... Segera Hubungi Bagian IT</div>";
	}
	return $pesan;
}


function autonumber($no,$tbl){
  include "database.php";
       $sql   = "SELECT TOP 1 $no as max_id FROM $tbl order by $no DESC";
       $st    = $db->query($sql);
       $rs    = $st->fetch(PDO::FETCH_OBJ);
       $urut = $rs->max_id;
       $urut++;

       $new = $urut;
       return $new;
}

function IDR($angka){
 $jadi = number_format($angka,'2',',','.');
return $jadi;
}

/////////////////FORMAT PLAFOND/////////////////////
function kodePL($plafond){
  if($plafond <= '50000000'){
    $kode = "MIK";
  }elseif ($plafond <= '250000000') {
    $kode = 'KCL';
  }elseif ($plafond <= '500000000') {
    $kode = 'KUM';
  }
  return $kode;
}

 ?>
