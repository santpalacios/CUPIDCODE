<?php

require 'conect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['save'])){
    {  if (isset($_POST['fecha_n'])) {
        $fecha_n = DateTime::createFromFormat('Y-m-d', $_POST['fecha_n']);
        $fecha_actual = new DateTime();
        $fecha_mayor_de_edad = $fecha_actual->sub(new DateInterval('P18Y'));

        if ($fecha_n > $fecha_mayor_de_edad) {
            echo "<script>alert('Debes ser mayor de edad')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            exit;
        }
    }
       
        // Obtener los datos del formulario
        $keys = ['nombre', 'sexo', 'interesado_en', 'carrera','semestre', 'busco','fecha_n','signo_zodiacal', 'correo', 'descripcion', 'fotos' ,'pass'];
foreach ($keys as $key) {
    if (!isset($_POST[$key]) || empty($_POST[$key])) {
        echo "Error: no se proporcionó '$key'.";
        exit;
    }
}

}

    // Ahora puedes usar estos valores en tu consulta SQL
    $stmt = $conn->prepare("INSERT INTO datos_us (nombre, fecha_n, sexo, interesado_en, carrera,busco, semestre, signo_zodiacal, correo, descripcion, fotos,pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)");
    $stmt->bind_param("ssssssssssss", $_POST['nombre'], $_POST['fecha_n'], $_POST['sexo'], $_POST['interesado_en'], $_POST['carrera'], $_POST['semestre'], $_POST['signo_zodiacal'], $_POST['correo'], $_POST['descripcion'], $_POST['fotos'], $_POST['pass'], $_POST['busco']);


        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<script>alert('Registro exitoso,ya puedes ingresar')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}


?>