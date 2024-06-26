<?php
session_start();
require 'conexion.php';

function obtenerUsuariosDeLaBaseDeDatos($id_usuario) {
    global $conn;
    $sql = "SELECT * FROM datos_us WHERE id_us != ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
      echo "<script>
      alert('Lo sentimos, no hay usuarios disponibles para mostrar');
      window.location.href = 'perfil.php';
      </script>";
        exit;
    }
}

if(isset($_SESSION['id_us'])) {
    $id_usuario = $_SESSION['id_us'];
    $usuarios = obtenerUsuariosDeLaBaseDeDatos($id_usuario);
} else {
  echo "<script>
  alert('No estas logeado.');
  window.location.href = 'perfil.php';
  </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Match</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
  <title>Match</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="match.css">


  
</head>
<style>
  .btn-perfil {
    
    background-color: #CD0569; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition-duration: 0.4s;
  }

  .btn-perfil:hover {
    background-color: #CD051D;
  }
  .btn-container {
      display: flex;
      justify-content: center;
   
  }
</style>

<body>

<body>

<div class="header_load">
    </div>


<?php $i = 0; foreach ($usuarios as $usuario): ?>
    <div class="usuario" id="usuario-<?php echo $i; ?>" style="<?php echo $i > 0 ? 'display: none;' : ''; ?>">
        <h2 class="nombre-usuario"><?php echo $usuario['nombre']; ?></h2>
        <div class="img-container">
          <img src="<?php echo $usuario['rutaFotos']; ?>" width="200px"  />
        </div>
        <div class="btn-container">
          <a href="perfil_usuario.php?id_us=<?php echo $usuario['id_us']; ?>">
            <button class="btn-perfil">Ver Perfil</button>
          </a>
        </div>
        <h2 class="carrera-usuario"><?php echo $usuario['carrera']; ?></h2>
         <h2 class="descripccion-usuario"><?php echo $usuario['descripcion']; ?></h2>
    </div>
   
<?php $i++; endforeach; ?>

<div class="frame"></div>
<div class="icons">
  <svg id="hate"  viewBox="0 0 128.07 127.89">
    <path class="a" d="M128.07,64.07c-.5,36.31-28,63.57-64,63.82S-.17,99.33,0,63.29C.17,28.25,29.23-.3,64.43,0A63.88,63.88,0,0,1,128.07,64.07ZM45.32,38.54c-2.44.36-4.63,1.12-6,3.68a6.39,6.39,0,0,0,.94,7.83A143,143,0,0,0,50.42,60.36c2.73,2.48,3.44,4.31.2,7a98.44,98.44,0,0,0-9.52,9.53c-3.62,4-3.66,7.48-.47,10.59,2.82,2.76,7.12,2.54,10.7-.79,3.05-2.83,5.91-5.86,8.85-8.8,2.58-2.57,5.16-2.53,7.73,0,2.83,2.81,5.62,5.67,8.52,8.42,3.87,3.68,8.08,4.08,11,1.15,3.23-3.21,3-6.85-.83-11C83.57,73.21,80.44,70,77.1,67c-2.37-2.13-2.71-3.65-.13-5.91,3.24-2.85,6.15-6.08,9.2-9.15,4.17-4.2,4.66-8,1.45-11.34-2.93-3-7.58-2.61-11.49,1.19-3.34,3.25-6.66,6.52-9.85,9.91-1.64,1.74-2.85,1.73-4.49,0-3.32-3.5-6.84-6.81-10.21-10.26A9,9,0,0,0,45.32,38.54Z"/>
    <path d="M45.32,38.54a9,9,0,0,1,6.26,2.87c3.37,3.45,6.89,6.76,10.21,10.26,1.64,1.73,2.85,1.74,4.49,0,3.19-3.39,6.51-6.66,9.85-9.91C80,38,84.69,37.52,87.62,40.57c3.21,3.34,2.72,7.14-1.45,11.34-3,3.07-6,6.3-9.2,9.15-2.58,2.26-2.24,3.78.13,5.91,3.34,3,6.47,6.24,9.53,9.52,3.87,4.16,4.06,7.8.83,11-2.95,2.93-7.16,2.53-11-1.15-2.9-2.75-5.69-5.61-8.52-8.42-2.57-2.54-5.15-2.58-7.73,0-2.94,2.94-5.8,6-8.85,8.8-3.58,3.33-7.88,3.55-10.7.79-3.19-3.11-3.15-6.6.47-10.59a98.44,98.44,0,0,1,9.52-9.53c3.24-2.72,2.53-4.55-.2-7A143,143,0,0,1,40.28,50.05a6.39,6.39,0,0,1-.94-7.83C40.69,39.66,42.88,38.9,45.32,38.54Z"/>
  </svg>
  <svg id="like"  viewBox="0 0 128.06 127.99">
    <path class="a" d="M128.06,63.83a63.65,63.65,0,0,1-64,64.16A63.57,63.57,0,0,1,0,64a64,64,0,0,1,128.06-.13ZM96,56.53c0-5.82-3.9-13.3-10.19-16.05-6.9-3-13.67-2.67-19.37,2.82-2,1.9-3.16,1.41-4.93-.17-2.34-2.08-4.86-3.89-8.25-4.24-9.13-.92-15.31,2.3-19.11,10.25-3.89,8.11-2.42,17.27,4,23.34,7.5,7,15.22,13.88,22.77,20.89,2.06,1.92,3.76,2.27,6,.21C74.36,86.7,82,80,89.39,73.09,93.57,69.21,96.06,64.45,96,56.53Z"/>
    <path d="M96,56.53c.08,7.92-2.41,12.68-6.59,16.56C82,80,74.36,86.7,66.93,93.58c-2.23,2.06-3.93,1.71-6-.21-7.55-7-15.27-13.84-22.77-20.89-6.46-6.07-7.93-15.23-4-23.34,3.8-8,10-11.17,19.11-10.25,3.39.35,5.91,2.16,8.25,4.24,1.77,1.58,2.95,2.07,4.93.17,5.7-5.49,12.47-5.84,19.37-2.82C92.08,43.23,96,50.71,96,56.53Z"/>
  </svg>
</div>

<script>
var usuarioActual = 0;
var totalUsuarios = <?php echo count($usuarios); ?>;
var usuariosQueNoGustan = [];

document.getElementById('like').addEventListener('click', function() {
  alert('Has indicado que te gusta esta persona');
  cambiarUsuario();
});
document.getElementById('hate').addEventListener('click', function() {
  usuariosQueNoGustan.push(usuarioActual);
  cambiarUsuario();
});

function cambiarUsuario() {
  document.getElementById('usuario-' + usuarioActual).style.display = 'none';

  if (usuariosQueNoGustan.length === totalUsuarios) {
    alert('Has marcado a todos los usuarios como "hate". No hay más usuarios para mostrar.');
    return;
  }

  do {
    usuarioActual++;
    if (usuarioActual >= totalUsuarios) {
      usuarioActual = 0;
    }
  } while (usuariosQueNoGustan.includes(usuarioActual))

  document.getElementById('usuario-' + usuarioActual).style.display = 'block';
}
</script>

<div class="btn-flotante">

</div>
 <!--  
<script>
    $(document).ready(function () {
      $('.header_load').load('header.html');
    });
  </script>
-->
  <script>
    $(document).ready(function () {
      $('.btn-flotante').load('btn-flotante.php');
    });
  </script>
  <script src="js/btn-flotante.js"></script>
</body>
</body>

</html> 
