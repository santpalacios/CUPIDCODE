<?php
require_once 'db.php';
if(issent($_POST['save'])){
    $nombre = $_POST['name'];
    $apellidos = $_POST['apellidos'];
    $numerodeControl = $_POST['numerodeControl'];
    $fecha_n = $_POST['fecha_n'];
    $sexo = $_POST['sexo'];
    $interesado_en = $_POST['interesado_en'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $signo_zodiacal = $_POST['signo_zodiacal'];
    $correo = $_POST['correo'];
    $validacion = $_POST['validacion'];
    $pass = $_POST['pass'];
    $descripcion = $_POST['descripcion'];
    $fotos = $_POST['fotos'];

    $sqlU = "INSERT INTO usuarios (nombre, apellidos, fecha_n, sexo, interesado_en, carrera, semestre, signo_zodiacal, correo, validacion, pass, descripcion, fotos) VALUES ('$nombre', '$apellidos', '$fecha_n', '$sexo', '$interesado_en', '$carrera', '$semestre', '$signo_zodiacal', '$correo', '$validacion', '$pass', '$descripcion', '$fotos')";
     
    $consulta= mysqli_query($conn, $sqlU);
    header("location: ../")
    
}
?>

