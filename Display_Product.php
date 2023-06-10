<?php

    require 'db.php';

    if($_SERVER['REQUEST_METHOD']=="POST") {
        switch ($_POST['sel']) {
            case "1":
                $sql = "
                SELECT * from produit
                where prixPro between '".$_POST['minPrice']."' and
                '".$_POST['maxPrice']."'
                ";
          
                
                break;
            case "2":
                $sql = "
                SELECT * from produit
                where prixPro between '".$_POST['minPrice']."' and
                '".$_POST['maxPrice']."' order by prixPro ASC
                ";
                
                break;

            case "3":
                $sql = "
                SELECT * from produit
                where prixPro between '".$_POST['minPrice']."' and
                '".$_POST['maxPrice']."' order by prixPro DESC
                ";
                break;
        }



    }

    else {
        $sql = " SELECT * from produit ";

    }

    
    

    
    $result = $conn->query($sql);
    $conn->close();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="search">
    <form action="Display_Product.php" method="POST">

        <input tupe="number" placeholder="min" name="minPrice">
        <input tupe="number" placeholder="max" name="maxPrice">
        <select name="sel">
            <option value="1">--Please select ---</option>
            <option value="2">Prix croissant</option>
            <option value="3">Prix décroissant</option>
            

        </select>
        <input type="submit" value="Search"> 

    </form>

</div>

<div class="container">
    <div class="row">
<?php while($row = $result->fetch_assoc()) { ?>

<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="<?= $row["img"] ?>" class="imgc card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $row["nomProduit"] ?></h5>
          <p class="card-text"><?= $row["prixPro"]." dh" ?></p>
          <a href="#" class="btn btn-primary">Achetter</a>
        </div>
    </div>
</div>

<?php } ?>
</div>
</div>
    
    


    
</body>
</html>