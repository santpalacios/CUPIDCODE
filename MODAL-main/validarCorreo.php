<?php
require 'conect.php';

if(isset($_POST['correo'])){
    $correo = $_POST['correo'];

    $sql = "SELECT * FROM datos_us WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "registrado";
    } else {
        echo "no_registrado";
    }  
}
?>


