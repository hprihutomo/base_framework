<?php  
include "../librari/inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtKodeH 	 = $_POST['TxtKodeH'];
$penyakit = $_POST['penyakit'];
$penyebab = $_POST['penyebab'];
$keterangan  = $_POST['keterangan'];
$solusi   = $_POST['solusi'];
$namafoto = $_FILES['foto']['name'];

# Validasi Form
if (trim($TxtKodeH)=="") {
	echo "Kode belum terbentuk, ulangi kembali";
	include "tambah_penyakit.php";
}
elseif (trim($penyakit)=="") {
	echo "Nama Penyakit masih kosong, ulangi kembali";
	include "tambah_penyakit.php";
}
elseif (trim($penyebab)=="") {
	echo "penyebab masih kosong, ulangi kembali";
	include "tambah_penyakit.php";
}
elseif (trim($keterangan)=="") {
	echo "Nama keterangan masih kosong, ulangi kembali";
	include "tambah_penyakit.php";
}

elseif (trim($solusi)=="") {
	echo "Solusi masih kosong, ulangi kembali";
	include "tambah_penyakit.php";
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


	$sql  = " INSERT INTO penyakit (kd_penyakit,nm_penyakit,penyebab,keterangan,solusi,photo) ";
	$sql .=	" VALUES ('$TxtKodeH','$penyakit','$penyebab','$keterangan','$solusi','$photo')";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());

	echo "Data Berhasil disimpan";
		include "penyakit.php";
}
?>
