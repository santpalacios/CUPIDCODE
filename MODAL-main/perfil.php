<?php
session_start();
require 'conect.php';
if(isset($_SESSION['id_us'])) {
    $id_usuario = $_SESSION['id_us'];

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
} else {
    echo "No estás logeado";
    exit;
}
?>
 <!--INICIO DE HTLML-->
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
                <a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i> 
                </a>
            </div>
            <div class="datos-perfil">
                <br>
                <h4 class="titulo-usuario" name= "nombre" style="margin-left:165px;" >  <?php echo $usuario['nombre']; ?></h4>
                
                
                
            </div>
            <div class="opcciones-perfil">
            </div>
        </div>

        <center>
        <div>
            <h2>Descripción</h2>
            <p><?php echo $usuario['descripcion']; ?></p>
        </div>
        </center> 

        <style>
    .info-usuario {
        background-color: white;
        border: 1px solid blue;
        padding: 20px;
        margin: 70px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    </style>

       <div class= "info-usuario">
        <center><h2>SOBRE MI</h2></center>
       <h4>Carrera</h4><?php echo $usuario['carrera']; ?><br>
       <h4>Semestre</h4><?php echo $usuario['semestre']; ?> <br>
       <h4>Estoy interesado en </h4><?php echo $usuario['interesado_en']; ?><br>
       <h4>Signo</h4><?php echo $usuario['signo_zodiacal']; ?><br>
       <h4>Busco</h4><?php echo $usuario['busco']; ?><br>
               
        </div>
   
    </div>
</section>

<div class="ful-img" id="fulImgBox">
    <img src="imgs/1.jpg" id="fulImg" alt="">
    <span onclick="closeImg()">X</span>
</div>

<h1><span>Mi foto</span></h1>
<div class="img-gallery">
    <?php echo $usuario['fotos']; ?> <!-- Imprime la ruta de la imagen -->
    <img src="<?php echo $usuario['fotos']; ?>" onclick="openFulImg(this.src)" alt="">
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