<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
    // Verificar la fecha de nacimiento
    if (isset($_POST['fecha_n'])) {
        $fecha_n = DateTime::createFromFormat('Y-m-d', $_POST['fecha_n']);
        $fecha_actual = new DateTime();
        $fecha_mayor_de_edad = $fecha_actual->sub(new DateInterval('P18Y'));

        if ($fecha_n > $fecha_mayor_de_edad) {
            echo "<script>alert('Debes ser mayor de edad')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            exit;
        }
    }

    if ($_FILES['fotos']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['fotos']['name'];
        $rutaTemporal = $_FILES['fotos']['tmp_name'];
        $destino = "../FOTOS/" . $nombreArchivo; 

        if (!move_uploaded_file($rutaTemporal, $destino)) {
            echo "Error al mover la imagen.";
            exit;
        }
    } else {
        echo "Error: No se cargó ninguna imagen.";
        exit;
    }

    $keys = ['nombre', 'sexo', 'interesado_en', 'carrera', 'semestre', 'busco', 'fecha_n', 'signo_zodiacal', 'correo', 'descripcion', 'pass'];
    foreach ($keys as $key) {
        if (!isset($_POST[$key]) || empty($_POST[$key])) {
            echo "Error: no se proporcionó '$key'.";
            exit;
        }
    }

    $query = "INSERT INTO datos_us (nombre, fecha_n, sexo, interesado_en, carrera, busco, semestre, signo_zodiacal, correo, descripcion, nombrefotos, pass, rutaFotos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssssssss", $_POST['nombre'], $_POST['fecha_n'], $_POST['sexo'], $_POST['interesado_en'], $_POST['carrera'], $_POST['busco'], $_POST['semestre'], $_POST['signo_zodiacal'], $_POST['correo'], $_POST['descripcion'], $nombreArchivo, $_POST['pass'], $destino);
    
    if ($stmt->execute()) {
        echo "<script>alert('Registro exitoso, ya puedes ingresar')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

