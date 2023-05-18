
<?php


session_start();

if(isset($_SESSION["client_id"]))
{
    echo 'vous etes déja authentifié';
    header("Refresh:5, url=Display_Client.php");
} 
?>


<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>  
<body>








<form method="post" action="Login.php" >

            <fieldset style="width: 300px;">
                <legend>Authentification</legend>
                <label >Email:</label> 
                <input type="text" name="email" > <br><br>
                <label >Password:</label> 
                <input type="password" name="pass" > <br><br>
                 <br><br>
                

                <button type="submit" >Envoyer</button>

               
            </fieldset>
        </form>

       
    </body>
</html>




