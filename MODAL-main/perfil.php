<?php
session_start();
require 'conexion.php';
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
<!DOCTYPE html>
<html lang="en">

<?php
$fecha_nacimiento = new DateTime($usuario['fecha_n']);
$fecha_actual = new DateTime();

$diferencia = $fecha_actual->diff($fecha_nacimiento);
$edad = $diferencia->y;

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="images/favico.ico" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="perfil.css">
</head>

<body> 
    <div class="header_load" >
    </div>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">

                    <div class="profile-img">
                        <img src="<?php echo $usuario['rutaFotos']; ?>" alt=""/>
                        <div class="file btn btn-lg btn-primary">Cambiar foto
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <!-- INFORMACION DE LA BD DEL USUARIO LOGUEADO-->
                        <h5> <?php echo $usuario['nombre']; ?></h5>
                                <h6>
                                <?php echo $usuario['carrera']; ?>
                                </h6>
                               <!--  <p class="proile-rating" style="font-size:20px;"><a href="chats.php" style="text-decoration:none;"><span>	&#128140</span> Enviar mensaje...</a></p>-->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre mí...</a>
                            </li>
                
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar perfil"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                    <p>Mis preferencias: </p>
                         <a><span>  </span> Edad: </a> 
                            <text><?php echo $edad; ?></text>
                        <a><span>  &#129313</span> Me interesan: </a> 
                            <text><?php echo $usuario['interesado_en']?></text>
                        <a href=""><span>  &#128293</span> Me identifico como: </a>
                            <input type="text" id="sexo" name="sexo" value="<?php echo $usuario['sexo']; ?>" disabled>
                        <a href=""><span>  &#128586</span> Busco: </a>
                        <input type="text" id="busco" name="busco" value="<?php echo $usuario['busco']?>" disabled >
                        <a href=""><span>&#9801
                        </span> Signo zodiacal: </a>
                        <input type="text" id="signo_zodiacal" name="signo_zodiacal" value="<?php echo $usuario['signo_zodiacal'];?>" disabled> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                            <textarea class="descripcion" minlength="4" maxlength="200" placeholder="Aqui va la descripcionde la persona"
                            required style=" width: 400px; /* Ancho del contenedor */
                            height: 300px; /* Altura del contenedor */
                            border: 1px solid #ccc;
                            padding: 10px;
                            box-sizing: border-box; 
              word-wrap: break-word;
              border: none; /* Eliminar borde del textarea */
        outline: none; /* Eliminar contorno del textarea */
              resize: none; 
              overflow-wrap: break-word;"></textarea>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>           
    </div>
<!-- hamburguer menu -->
 <div class="btn-flotante">
</div> 

<!-- UPDATE PORFILE -->
<script>
    document.getElementById("edit").addEventListener("click", function() {
        document.getElementById("sexo").disabled = false;
        document.getElementById("busco").disabled = false;
        document.getElementById("signo_zodiacal").disabled = false;
        document.getElementById("descripcion").disabled = false;
    });
</script>


<!-- header 
<script>
    $(document).ready(function () {
        $('.header_load').load('header.php');
    });
</script>
-->

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