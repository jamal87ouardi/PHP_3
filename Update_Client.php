<?php


require 'db.php';

   
    
	$requette="
        UPDATE client
        SET NomClient='".$_POST["NCu"]."', 
        PrenomClient='".$_POST["PCu"]."', 
        DateNaiss='".$_POST["DNu"]."', 
        AdressClient='".$_POST["ACu"]."', 
        Email= '".$_POST["MCu"]."'
		Where idClient='".$_POST["idC"]."' ";
	
    if( mysqli_query($conn, $requette)) {
		echo "Success.";
				
	} else {
		echo "Failed.";
					
	}

    header("Refresh:5 ; url=Display_Client.php");



?>