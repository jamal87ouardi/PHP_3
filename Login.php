<?php


require 'db.php';

   
    
	$requette="
    SELECT * from client
    Where Email='".$_POST["email"]."'
    and passwd = '".$_POST["pass"]."'
     ";
    
    $result = $conn->query($requette);
    $conn->close();

    
    if( $result->num_rows > 0) {
		echo "Success.";
        session_start();
        
        $row = $result->fetch_assoc();

        $_SESSION["client_id"]=$row["idClient"];
        $_SESSION["client_nom"]=$row["NomClient"];
        $_SESSION["client_prenom"]=$row["PrenomClient"];

        header("Refresh:5 ; url=Display_Client.php");

				
	} else {
		echo "Failed.";
        header("Refresh:5 ; url=Login_Form.php");
					
	}

    



?>