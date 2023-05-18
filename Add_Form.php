<?php

session_start();

if(!isset($_SESSION["client_id"]))
{
    header("location: Login_Form.php");

} 


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Client</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
      <div class="b1">

        <form action="Add_Client.php" method="POST">
            <table>
                    <tr>
                        <td>ID :</td>
                        <td><input type="text" name="idC"></td>
                    </tr>
                    
                    <tr>
                        <td>Nom :</td>
                        <td><input type="text" name="NC"></td>
                    </tr>
                    
                    <tr>
                        <td>Prenom :</td>
                        <td><input type="text" name="PC"></td>
                    </tr>
                    <tr>
                        <td>Date Naissance :</td>
                        <td><input type="text" name="DN"></td>
                    </tr>

                    <tr>
                        <td>Adresse :</td>
                        <td><input type="text" name="AC"></td>
                    </tr>

                    <tr>
                        <td>Email :</td>
                        <td><input type="text" name="MC"></td>
                    </tr>

                    <tr>
                        <td>Password :</td>
                        <td><input type="password" name="PassC"></td>
                    </tr>
                   
                    <tr>
                        <td>
                            <input type="submit" class="s1" value="Envoyer">
                        </td>
                        <td>
                            
                        </td>

                    </tr>               

            </table>
        </form>


      </div>

</body>
</html>
