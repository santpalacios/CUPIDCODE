<?php
session_start();
include 'conexion.php';
if(isset($_POST['ingresar'])){
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    $sql = "SELECT id_us FROM datos_us WHERE correo = ? AND pass = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $correo, $pass);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Obtener el id_us del resultado de la consulta
        $row = $result->fetch_assoc();
        $id_us = $row['id_us'];

        // Iniciar la sesión y establecer el id_us en la sesión
        $_SESSION['id_us'] = $id_us;

        // Redirigir al usuario a perfil.php
        echo "<script>window.open('perfil.php','_self')</script>";
    } else {
        echo "<script>
        alert('Correo o contraseña incorrectos.');
        window.location.href = 'registro.php';
        </script>";

    }  
}
?>