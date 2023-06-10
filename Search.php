<?php

session_start();

if(!isset($_SESSION["client_id"]))
{
    header("location: Login_Form.php");

} 


?>



<html>
    <head>
        <title>search Clients</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
    </head>  
    <body>

  
        <div class="bjr">
            <?php 
                $msg= "Bonjour ".$_SESSION["client_nom"]." ".$_SESSION["client_prenom"];
                echo $msg;
            ?>
            <form action="Logout.php">
                        
                        <input type="submit" class="s2" value="Logout">
            </form>

        </div>


        <div class="srch">
            
            <form method="POST" action="Search.php" >

                Nom:
                <input type="text" name="NC">
                <input type="submit" class="s2" value="Search">
            </form>

        </div>

        <div class="b1">

        <?php

            if(isset($_POST["NC"])) {

            require 'db.php';

            $sql = "
            SELECT * 
            from client 
            Where NomClient='".$_POST["NC"]."'"; 
            $result = $conn->query($sql);
            $conn->close();
        ?>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th> Nom</th>
                <th> Prenom </th>
                <th> Date Naissance</th>
                <th> Adresse</th>
                <th> Email</th>

               
            </tr>

            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row["idClient"]; ?></td>
                <td><?php echo $row["NomClient"] ?></td>
                <td><?php echo $row["PrenomClient"]; ?></td>
                <td><?php echo $row["DateNaiss"]; ?></td>
                <td><?php echo $row["AdressClient"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                

                <td>
                    <form action="Delete_Client.php" method="POST">
                        <input type="hidden" name="idC" value="<?= $row["idClient"] ?>">
                        <input type="submit" class="s2" value="Delete">
                    </form>
                </td>
                <td>
                    <form action="Update_Form.php" method="POST">
                        <input type="hidden" name="idC" value="<?= $row["idClient"] ?>">
                        <input type="hidden" name="NC" value="<?= $row["NomClient"] ?>">
                        <input type="hidden" name="PC" value="<?= $row["PrenomClient"] ?>">
                        <input type="hidden" name="DN" value="<?= $row["DateNaiss"] ?>">
                        <input type="hidden" name="AC" value="<?= $row["AdressClient"] ?>">
                        <input type="hidden" name="MC" value="<?= $row["Email"] ?>">
                        
                        
                        <input type="submit" class="s3" value="Update">
                    </form>
                </td>
                        
            </tr> <?php } ?>

        </table>
        <?php } ?>
    </div>
    </body>
</html>

