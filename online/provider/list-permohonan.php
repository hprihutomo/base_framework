<?php
include "../library/database.php";
//$userid = $_SESSION['userid'];
		$queryA = "SELECT COUNT(*) FROM DATA_PERMOHONAN WHERE STATUSPERMOHONAN = 'KIRIM'";
		$stmtA = $db->prepare($queryA);
		$stmtA->execute();
		$row = $stmtA->fetchColumn();

			$query = "SELECT * FROM DATA_PERMOHONAN WHERE STATUSPERMOHONAN = 'KIRIM'";
			$stmt = $db->prepare($query);
			$stmt->execute();
		
         if($row > 0)
         {
        	while ($data = $stmt->fetch(PDO::FETCH_OBJ)) 
        		{
	 				echo "<li><a href='javascript:void(0)' onclick=\"Popup('module/check/cekPermohonan.php?id=".$data->IDPERMOHONAN."', '', '800','600')\"> 
                            <b>PERMOHONAN :</b>".$data->NOMORPERMOHONAN."<br> 
                            <b>PRODUK :</b> ".$data->NAMAPRODUK." - ".$data->JIWA."<br> 
                            ".$data->KODE." ".$data->JnSBANK." ".$data->KANTOR."<br>
                            <b>TGL :</b> ".$data->TGLPERMOHONAN."</a>
                            </li>";    	 
 				}
    	 }else{
    		die("<li><a>Tidak ada pesan baru yang belum dibaca</a></li>");
    	 }
    	
    	 echo " <li class='divider'></li>
                        <li>
                            <a class='text-center' href='?page=PENJAMINAN'>
                                <strong>Read All Messages</strong>
                                <i class='fa fa-angle-right'></i>
                            </a>
                        </li>";
?>
