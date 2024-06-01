<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>¡Comunidad de CC!</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" href="images/favico.ico" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="registro.css" />
</head>


<body>
  <div class="big-wrapper light">
    <img src="./img/shape.png" alt="" class="shape" />
    <div class="header_load">
    </div>

    <main class="reg">
      <div class="big-wrapper light">
        <img src="./img/shape.png" alt="" class="shape" />
        <div class="box">
          <div class="inner-box">
            <div class="forms-wrap">


              <!-- Inicio de sesión formulario -->
              <form action="ingresar.php" autocomplete="off" class="sign-in-form"
              id="FormInicioSesion" method="POST">
                <div class="logo">
                  <!-- <img src="images/logo.png" alt="easyclass" /> -->
                  <h2>CupidCode</h2>
                </div>

                <div class="heading">
                  <h2>¡Bienvenido!</h2>
                  <h6>¿Aún no estas registrado?</h6>
                  <a href="#" class="toggle">Registrarme</a>
                </div>
                   
                <div class="actual-form">
                  <div class="input-wrap">
                    <input type="email"  class="input-field" autocomplete="off" required
                    id="correo_login" name="correo"/>
                    <label>Correo institucional</label>
                  </div>

                  <div class="input-wrap">
                    <input type="password" minlength="4" class="input-field" autocomplete="off" required
                    id="pass" name="pass"  />
                    <label>Password</label>
                  </div>

                  <input type="submit"  value="Sign In" class="sign-btn" 
                  id="ingresar" name="ingresar"/>

                  
                </div>
              </form>


              <!-- Registro formulario -->
              <form  autocomplete="off" class="sign-up-form"id="myForm" method="POST" 
              onsubmit="return validarCorreo()">
                <div class="logo">
                  <img src="images/logo.png" alt="easyclass" />
                  <h2>CupidCode</h2>
                </div>

                <div class="heading">
                  <h2>¡Registrate!</h2>
                  <h6>¿Ya tienes una cuenta?</h6>
                  <a href="#" class="toggle">Iniciar Sesión</a>
                </div><br>

                <div class="actual-form">
                  <div class="input-wrap">
                    <input type="text" minlength="4" class="input-field" autocomplete="off" required 
                    id="nombreRegistro" name="nombreRegistro"/>
                    <label>Nombre</label>
                  </div>

                  <div class="input-wrap">
                    <input type="email" class="input-field" autocomplete="off" required 
                    name="correoRegistro" id="correoRegistro"/>
                    <label>Email</label>
                  </div>

                  <div class="input-wrap">
                    <input type="password" minlength="4" class="input-field" autocomplete="off" required 
                    id="passRegistro" name="passRegistro"/>
                    <label>Password</label>
                  </div>

                  <input type="submit" formaction="reg_informacion.php" value="Sign Up" class="sign-btn" />

                  <p class="text">
                    Al registrarte, aceptas los
                    <a href="#">Terminos de servicios </a> y
                    <a href="#">la política de privacidad de CupidCode</a>
                  </p>
                </div>
              </form>
            </div>
            <div class="carousel">
              <div class="images-wrapper">
                <img src="" class="image img-1 show" alt="" />
                <img src="" class="image img-2" alt="" />
                <img src="" class="image img-3" alt="" />
              </div>

              <div class="text-slider">
                <div class="text-wrap">
                  <div class="text-group">
                    <h2>Conoce gente<span>&#128519</span>...</h2>
                    <h2>Has match<span>&#128520</span>...</h2>
                    <h2>Y dieviértete!<span>&#128147;...</h2></span>
                  </div>
                </div>

                <div class="bullets">
                  <span class="active" data-value="1"></span>
                  <span data-value="2"></span>
                  <span data-value="3"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </main>


  <script src="js/registro.js "></script>
  <!-- partial -->
  <script>
    $(document).ready(function () {
      $('.header_load').load('header.php');
    });
  </script>
<!--SCRIPT DE CORREO-->
<script>
  function validarCorreo() {
    var correo = document.getElementById("correoRegistro").value;
    var pass = document.getElementById("passRegistro").value;
    var nombre = document.getElementById("nombreRegistro").value;
    // Expresión regular para validar el formato del correo
    var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+tecnm\.mx$/i; 
    if (regex.test(correo)) {
   
      localStorage.setItem('nombre', nombre);
      localStorage.setItem('correo', correo);
      localStorage.setItem('pass', pass);
    
      window.location.href = 'reg_informacion.php';
      return true;
    } else {
      alert("El correo no es válido. Por favor, ingresa un correo institucional válido.");
      return false;
    }
  }
</script>

</body>

</html>