<?php
session_start();
require 'conect.php';

if(isset($_GET['id_us'])) {
    $id_usuario = $_GET['id_us'];

    $sql = "SELECT * FROM datos_us WHERE id_us = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        echo "No se encontró al usuario";
        exit;
    }
}
?>

<!-- Resto de tu código HTML... -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="images/favico.ico" />
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" type="text/css" href="perfil.css">
    <link rel="stylesheet" type="text/css" href="carrusel_fotos.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

<section class="perfil-usuario">

    
    <!-- <div class="header_load" style="margin-bottom:2rem;">
    </div> -->

    <div class="contenedor-perfil">
        <div class="portada-perfil" style="background-color:red">
            <div class="sombra"></div>
            <div class="avatar-perfil">
                <img src="images/personas2.gif" alt="img">
                
                    <i class="fas fa-camera"></i> 
                </a>
            </div>
            <div class="datos-perfil">
                <br>
                <h4 class="titulo-usuario" name= "nombre" style="margin-left:160px;" >
                    <?php 
                    if (isset($usuario)) {
                        echo $usuario['nombre'];
                    } else {
                        echo "Usuario no encontrado";
                    } ?>
                </h4>
                
                
                
            </div>
            <div class="opcciones-perfil">
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i>Carrera: <?php 
                    if (isset($usuario)) {
                        echo $usuario['carrera'];
                    } else {
                        echo "Usuario no encontrado";
                    } ?></a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i>Semestre: <?php 
                    if (isset($usuario)) {
                        echo $usuario['semestre'];
                    } else {
                        echo "Usuario no encontrado";
                    } ?></a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i>Busco:<?php 
                    if (isset($usuario)) {
                        echo $usuario['interesado_en'];
                    } else {
                        echo "Usuario no encontrado";
                    } ?></a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i>Signo Zodiacal: <?php 
                    if (isset($usuario)) {
                        echo $usuario['signo_zodiacal'];
                    } else {
                        echo "Usuario no encontrado";
                    } ?></a></li>
                
  
            </ul>
        </div>
        <div style="margin: 20px 20px;">
            <h2 >Descripción</h2>
            <p><?php 
                    if (isset($usuario)) {
                        echo $usuario['descripcion'];
                    } else {
                        echo "Usuario no encontrado";
                    } ?></p>
        </div>    
    </div>


    <a href="chats.php?id_us=<?php echo $usuario['id_us']; ?>">
    <input type="button" value="EnviarMensaje" class="myButton">
    </a>

    <style>
        .myButton {
    background-color: red;
    color: white;
    border: none;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 20px 450px;
    cursor: pointer;
}
    </style>
</section>

<div class="ful-img" id="fulImgBox">
    <img src="imgs/1.jpg" id="fulImg" alt="">
    <span onclick="closeImg()">X</span>
</div>

<h1><span>Mi foto</span></h1>
<div class="img-gallery">
    <?php 
    if (isset($usuario)) {
        echo $usuario['fotos']; // Imprime la ruta de la imagen
        echo '<img src="'.$usuario['fotos'].'" onclick="openFulImg(this.src)" alt="">';
    } else {
        echo "Usuario no encontrado";
    }
    ?>
</div>



<div class="btn-flotante">

</div>



<script src="js/carrusel_fotos.js"> </script>
<script>
    $(document).ready(function () {
        $('.header_load').load('header.php');
    });
</script>
<!--  -->
<script>
    $(document).ready(function () {
      $('.btn-flotante').load('btn-flotante.php');
    });
  </script>
  <script type="text/javascript">
    function redirect()
    {
   
    window.location.href="registro.php";
    }
    </script>
</body>

</html>