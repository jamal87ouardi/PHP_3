<?php


$servername = "localhost";
$username = "root";
$password = "bismiL@hiRahman";
$dbname = "ecommerce2";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
    echo "<br>";
}
else {
    echo "Connected successfully";
    echo "<br>";
}    
 
?>
