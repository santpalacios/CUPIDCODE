<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0
.0/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min
.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/p
opper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.
min.js"></script>
  <link rel="shortcut icon" href="images/favico.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CupidCode</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="scroll.css" />
  <link rel="stylesheet" href="nosotros.css" />


</head>

<body>
  <main>
    <div class="big-wrapper light">
      <img src="./img/shape.png" alt="" class="shape" />

      <header>
        <div class="container">
          <div class="logo">
            <img src="images/logo.png" alt="Logo" />
            <h3>CupidCode</h3>
          </div>

          <div class="links">
            <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="#nosotros">Sobre nosotros</a></li>
              <li><a href="#porque">¿Por qué CupidCode?</a></li>
              <li><a href="registro.php" class="btn">Iniciar Sesión</a></li>
            </ul>
          </div>

          <div class="overlay"></div>
          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </header>

      <div class="showcase-area">
        <div class="container">
          <div class="left">
            <div class="big-title">
              <h1>Tu match ideal,</h1>
              <h1>A un clic de distancia</h1>
            </div>
            <p class="text" style="font-size: 1.5rem;">
              Conoce gente dentro del campus Iztapalapa I, descubre nuevas posibilidades en el amor.
              <span style="font-weight:900">¡Portate mal y cuidate bien!</span>
            </p>
            <div class="cta">
              <a href="registro.php" class="btn">Llevame ahí!</a>
            </div>
          </div>
          <div class="box">
            <div class="right">
              <img src="images/personas2.gif" alt="Person Image" class="person" />
            </div>
          </div>
        </div>
      </div>

      <div class="bottom-area" >
        <div class="container"  >
          <button class="toggle-btn"  style="padding-bottom:-180px; background-color:transparent;">
            <i></i>
            <i ></i>
          </button>
        </div>
      </div>
    </div>

  </main>
  <!-- Sobre nosotros -->
  <div style="background-color: #f1f8fc;" id="nosotros">
    <div class="container-fluid">
      <div class="row d-sm-flex align-items-center justify-content-between">
        <div class="col-md-6 order-2 order-sm-1 p-3 p-sm-5">
          <div class="p-5 p-sm-5">
            <small class="text-uppercase" style="color: #9B5DE5;">Conocenos...</small>
            <h1 class="mb-4 display-4" style="font-weight: 600; font-size: 50px;">Sobre el equipo <span
                style="color: #9B5DE5;">CupidCode &#128156</span></h1>
            <p class="text-secondary" style="line-height: 2; text-align:justify;">Somos un Grupo de desarrolladores de el Instituto
              Tecnológico de Iztapalapa I, los cuales formamos equipo para desarrollar este proyecto
              de la materia de tópicos selectos de programación web. El equipo esta conformado por 5 integrantes.
              ¡Únete a nosotros en esta emocionante aventura de conectar corazones y mentes en el Instituto Tecnológico
              de México, Campus Iztapalapa! <span style="width:20px; height: 20px;">&#128526</span>
            </p>
          </div>
        </div>


        <div class="w-100 col-md-6 order-1 order-sm-2" style="background-image: url('images/nosotros.jpg'); 
        height: 100vh; min-height: 400px; background-position:center; background-size: cover; width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: bottom;
        background-repeat:no-repeat;
        ">
      </div>
      </div>
    </div>
  </div>

<!-- seccion por que cupidcode -->

<div class="about-section">
  <div class="inner-container" style>
    <h1 style="text-align:center; font-size: 50px; ">¿Por qué elegir <span style="color:#9B5DE5;">CupidCode?</span><span>&#128513</span></h1>
    <p class="text" style="text-align:justify; padding: 0 50px; ">
      CupidCode ofrece una plataforma exclusiva para los estudiantes del Instituto Tecnológico de México, Campus Iztapalapa, lo que facilita encontrar conexiones significativas dentro de la propia comunidad estudiantil.    </p>
    <div class="skills" style="font-size:20px; color:#9B5DE5">
      <div class="uno"><span>Seguridad</span></div>
      <div class="dos"><span>Compromiso</span></div>
      <div class="tres"><span>Diversión</span></div>
    </div>
  </div>
</div>
<!--  -->






  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="js/index.js"></script>
  <script src="js/scroll.js"></script>
  <script src="js/progressbar.js"></script>
  <script src="js/script.js"></script>

</body>
</html>
