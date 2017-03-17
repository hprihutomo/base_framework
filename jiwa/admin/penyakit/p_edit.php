<?php  
include "../librari/inc.koneksidb.php";

# Baca variabel Form (If Register Global ON)
$TxtKodeH 	 = $_REQUEST['TxtKodeH'];
$penyakit = $_REQUEST['penyakit'];
$penyebab = $_REQUEST['penyebab'];
$keterangan  = $_REQUEST['keterangan'];
$solusi   = $_REQUEST['solusi'];
$namafoto = $_FILES['foto']['name'];

# Validasi Form
if (trim($TxtKodeH)=="") {
	echo "Kode belum terbentuk, ulangi kembali";
	include "edit.php";
}
elseif (trim($penyakit)=="") {
	echo "Nama Penyakit masih kosong, ulangi kembali";
	include "edit.php";
}
elseif (trim($penyebab)=="") {
	echo "penyebab masih kosong, ulangi kembali";
	include "edit.php";
}
elseif (trim($keterangan)=="") {
	echo "Nama keterangan masih kosong, ulangi kembali";
	include "edit.php";
}

elseif (trim($solusi)=="") {
	echo "Solusi masih kosong, ulangi kembali";
	include "edit.php";
}

else  {
        if (!empty($_FILES["photo"]["tmp_name"]))
        {
          $jenis_gambar=$_FILES['photo']['type'];
          if($jenis_gambar=="image/jpeg"  || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif"  || $jenis_gambar=="image/png")
          {           
            $photo  = $namafolder . basename($_FILES['photo']['name']);       
            if  (!move_uploaded_file($_FILES['photo']['tmp_name'], "../photo/".$photo))
            { die("Gambar gagal dikirim"); }
          } else  { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
        }  //end if cek file upload


	//Sql simpan perubahan
$sql = " UPDATE penyakit SET nm_penyakit='$penyakit',penyebab='$penyebab',keterangan='$keterangan',
	     photo='$photo',solusi='$solusi'
		WHERE kd_penyakit='$TxtKodeH'";
mysql_query($sql, $koneksi)
	or die ("SQL ERROR" .mysql_error());
	
	echo "DATA TELAH BERHASIL DIUBAH";
	include "Penyakit.php";
	}
?>
