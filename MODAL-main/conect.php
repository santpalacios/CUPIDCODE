<?php
$servername = "localhost";
$username = "root"; 
$password = "1906"; 
$database = "cupidcode"; 

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
//echo "Conexión exitosa";



?>