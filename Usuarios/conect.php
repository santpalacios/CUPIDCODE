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

$correo = $_POST['correo'];

$sql = "SELECT * FROM datos_us WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "El correo electrónico ya existe en la base de datos.";
} else {
    echo "El correo electrónico no existe en la base de datos.";
}

$stmt->close();
$conn->close();

// Cerrar conexión
$conn->close();
?>