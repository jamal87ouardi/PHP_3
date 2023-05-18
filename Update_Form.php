<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Client</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
      <div class="b1">

        <form action="Update_Client.php" method="POST">
            <table>
                    <tr>
                        <input type="hidden" name="idC" value="<?= $_POST["idC"] ?>">
                    </tr>
                    
                    <tr>
                        <td>Nom :</td>
                        <td><input type="text" name="NCu" value="<?= $_POST["NC"]?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Prenom :</td>
                        <td><input type="text" name="PCu" value="<?= $_POST["PC"]?>"></td>
                    </tr>
                    <tr>
                        <td>Date Naissance :</td>
                        <td><input type="text" name="DNu" value="<?= $_POST["DN"]?>"></td>
                    </tr>

                    <tr>
                        <td>Adresse :</td>
                        <td><input type="text" name="ACu" value="<?= $_POST["AC"]?>"></td>
                    </tr>

                    <tr>
                        <td>Email :</td>
                        <td><input type="text" name="MCu" value="<?= $_POST["MC"]?>"></td>
                    </tr>
                   
                   
                    <tr>
                        <td>
                            <input type="submit" class="s1" value="Update">
                        </td>
                        <td>
                            
                        </td>

                    </tr>               

            </table>
        </form>


      </div>

</body>
</html>
