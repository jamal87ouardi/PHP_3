<?php


require 'db.php';

   
    
	$requette="
		Delete from client 
		Where idClient='".$_POST["idC"]."'";
	
    if( mysqli_query($conn, $requette)) {
		echo "Success.";
				
	} else {
		echo "Failed.";
					
	}

    header("Refresh:5 ; url=Display_Client.php");



?>