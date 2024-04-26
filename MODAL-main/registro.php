<?php
session_start();
require 'conect.php';
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
        echo "<script>alert('Correo o contraseña incorrectos.');</script>";
    }  
}
?>
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
                            <form autocomplete="off" class="sign-in-form" id="FormInicioSesion" method="POST">
                                <div class="logo">
                                    <img src="images/logo.png" alt="easyclass"
                                        onclick="location.href='index.php';" />
                                    <h2>CupidCode </h2>
                                </div>

                                <div class="heading">
                                    <h2>¡Bienvenido!</h2>
                                    <h6>¿Aún no estás registrado?</h6>
                                    <a href="#" class="toggle">Registrarme</a>
                                </div>

                                <div class="actual-form">
                                    <div class="input-wrap">
                                        <input type="email" class="input-field" autocomplete="off" required
                                            id="correo_login" name="correo" />
                                        <label>Correo institucional</label>
                                    </div>

                                    <div class="input-wrap">
                                        <input type="password" minlength="4" class="input-field"
                                            autocomplete="off" required id="pass" name="pass" />
                                        <label>Password</label>
                                    </div>

                                    <input type="submit" value="Iniciar Sesion" class="sign-btn" id="ingresar"
                                        name="ingresar" />

                                    <p class="text">
                                        ¿Olvidaste tu password?
                                        <a href="#">Recupéralo</a> para iniciar sesión
                                    </p>
                                </div>
                            </form>

                            <!-- Registro formulario -->
                            <form  autocomplete="off" class="sign-up-form" id="myForm" action="reg_informacion.php" method="post">
                                <div class="logo">
                                    <img src="images/logo.png" alt="easyclass" />
                                    <h2>CupidCode</h2>
                                </div>

                                <div class="heading">
                                    <h2>¡Regístrate!</h2>
                                    <h6>¿Ya tienes una cuenta?</h6>
                                    <a href="#" class="toggle">Iniciar Sesión</a>
                                </div><br>

                                <div class="actual-form">
                                    <div class="input-wrap">
                                        <input type="text" id="nombreRegistro" name="nombreRegistro" minlength="4"
                                            class="input-field" autocomplete="off" required />
                                        <label>Nombre Completo</label>
                                    </div>

                                    <div class="input-wrap">
                                        <input type="email" name="correoRegistro" id="correoRegistro" class="input-field"
                                            autocomplete="off" required />
                                        <label>Email</label>
                                    </div>

                                    <div class="input-wrap">
                                        <input type="password" id="passRegistro" name="passRegistro" minlength="4"
                                            class="input-field" autocomplete="off" required />
                                        <label>Password</label>
                                    </div>

                                    <input type="submit" value="Registrarme" class="sign-btn" />

                                    <p class="text">
                                        Al registrarte, aceptas los
                                        <a href="#">Términos de servicios </a> y
                                        <a href="#">la política de privacidad de CupidCode</a>
                                    </p>
                                </div>
                            </form>
                            <!-- Fin de formulario de registro -->
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
                                        <h2>Y diviértete!<span>&#128147;...</h2></span>
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
        </main>

        <script src="js/registro.js "></script>
        <!-- partial -->
        <script>
            $(document).ready(function () {
                $('.header_load').load('header.html');
            });
        </script>

        <!-- correo -->
        <script>
            function validarCorreo() {
                var correo = document.getElementById("correoRegistro").value;
                var pass = document.getElementById("passRegistro").value;
                var nombre = document.getElementById("nombreRegistro").value;
                // Expresión regular para validar el formato del correo
                var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+tecnm\.mx$/i; // Modificada
                if (regex.test(correo)) {
                    // No se necesita hacer nada, el formulario se enviará normalmente
                } else {
                    alert("El correo no es válido. Por favor, ingresa un correo institucional válido.");
                    // No es necesario redirigir, ya que el formulario se enviará normalmente
                }
            }
        </script>
        

    </div>
</body>

</html>
