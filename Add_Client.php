<html>
<head>
        <title>Add new Client</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
    
<?php

    require 'db.php';

   
    
	$requette="
		INSERT INTO client 
		SET idClient='".$_POST["idC"]."', 
		NomClient='".$_POST["NC"]."', 
		PrenomClient='".$_POST["PC"]."', 
		DateNaiss='".$_POST["DN"]."', 
		AdressClient='".$_POST["AC"]."', 
		Email= '".$_POST["MC"]."',
		passwd= '".$_POST["PassC"]."'  "
		;
	
    if( mysqli_query($conn, $requette)) {
		echo "Success.";
				
	} else {
		echo "Failed.";
					
	}

	header("Refresh:5 ; url=Display_Client.php");
?>



</body>
</html>