<?php
include "../library/database.php";
//$userid = $_SESSION['userid'];
		$queryA = "SELECT COUNT(*) FROM MSPERMOHONAN WHERE STATUSPERMOHONAN = 'TERBIT'";
		$stmtA = $db->prepare($queryA);
		$stmtA->execute();
		$row = $stmtA->fetchColumn();

			$query = "SELECT * FROM MSPERMOHONAN WHERE STATUSPERMOHONAN = 'TERBIT'";
			$stmt = $db->prepare($query);
			$stmt->execute();
		
         if($row > 0)
         {
        	while ($data = $stmt->fetch(PDO::FETCH_OBJ)) 
        		{
	 				echo "<li><a href='javascript:void(0)' onclick=\"Popup('module/check/cekPemberitahuan.php?id=".$data->IDPERMOHONAN."', '', '800','600')\"> 
                            <b> PERMOHONAN : </b>".$data->NOMORPERMOHONAN."<br>
                            Waktu : ".$data->TGLPERMOHONAN."</a>
                            </li>";    	 
 				}
    	 }else{
    		die("<li><a>Tidak ada pesan baru yang belum dibaca</a></li>");
    	 }
    	
    	 echo " <li class='divider'></li>
                        <li>
                            <a class='text-center' href='?page=umkm'>
                                <strong>Read All Messages</strong>
                                <i class='fa fa-angle-right'></i>
                            </a>
                        </li>";
?>

+