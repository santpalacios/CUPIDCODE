<?php
session_start();
require_once 'conect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar la existencia de variables POST
    if(isset($_POST['busco'], $_POST['sexo'], $_POST['descripcion'], $_POST['signo_zodiacal'])) {
        $busco = $_POST['busco'];
        $sexo = $_POST['sexo'];
        $descripcion = $_POST['descripcion'];
        $signo_zodiacal = $_POST['signo_zodiacal'];

   
        $sql = "UPDATE datos_us SET descripcion = ?, busco = ?, sexo = ?, signo_zodiacal = ? WHERE id_us = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $descripcion, $busco, $sexo, $signo_zodiacal, $_SESSION['id_us']);
        $stmt->execute();
        
        if ($stmt->error) {
            echo "Error: " . $stmt->error;
        } else {
            echo "<script>alert('SE ACTUALIZÓ TU PERFIL')</script>";
            header("Location: perfil.php");
            exit;
        }
    } 
} 
?>