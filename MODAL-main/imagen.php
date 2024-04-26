<?php
require 'conect.php'; 

if (isset($_GET['id_us'])) {
    $id = $_GET['id_us'];

    $sql = "SELECT fotos FROM datos_us WHERE id_us = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        header("Content-type: image/JPG"); 
        echo $row['fotos'];
    } else {
        echo "Imagen no encontrada";
    }
} else {
    echo "ID no proporcionado";
}
?>
