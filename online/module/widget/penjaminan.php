<?php
	include "../../library/database.php";

		$query = "SELECT COUNT(*) FROM DATA_PENJAMINAN  WHERE IDBANK = '".$IDBANK."'";
		$stmt = $db->prepare($query);
		$stmt->execute();
        $row = $stmt->fetchColumn();
         if($row > 0)
         {
        	echo $row;
    	 }elseif($row == 0)
    	 {
    	 	echo "0";
    	 }
 ?>
