<?php 
	include "../library/database.php";

		$query = "SELECT COUNT(*) FROM MSPERMOHONAN WHERE STATUSPERMOHONAN = 'TERBIT'";
		$stmt = $db->prepare($query);
		$stmt->execute();
        $row = $stmt->fetchColumn();
         if($row > 0)
         {
        	echo $row;
    	 }
 ?>