<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CupidCode</title>
    <link rel="shortcut icon" href="images/favico.ico" />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href="registro_inf.css">
    <link rel='stylesheet' href="modal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pacifico&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <div class="big-wrapper light">
            <img src="./img/shape.png" alt="" class="shape" />

            <!-- ESTE S EL HEADER PONER ESTE EN EL HTML Y ABAJO ESTA EL SCRIPT -->

            <div class="header_load">
            </div>
            <!--CONTENEDOR DEL FORMULARIO-->
            <div class="container-fluid"  >
                <div class="row justify-content-center" >
                    <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3" >
                            <h2 style="font-weight:700;" id="heading">Queremos conocerte un poco más</h2>
                            <p>Agrega tu información personal para que la comunidad TECNM pueda saber de ti</p>
                           <!-- FORMULARIO-->
                            <form id="msform" action="saveForm.php" method="POST" enctype="multipart/form-data">
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Cuenta</strong></li>
                                    <li id="personal"><strong>Información Personal</strong></li>
                                    <li id="payment"><strong>Conociendote</strong></li>
                                    <li id="confirm"><strong>Sube una foto!</strong></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br>
                               
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7 d-flex justify-content-center">
                                                <h2 class="fs-title">Información escolar:</h2>
                                            </div>
                                <!-- CAMPOS DEL FORMULARIO-->
                                <form id="msform" action="saveForm.php" method="POST">
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Cuenta</strong></li>
                                    <li id="personal"><strong>Información Personal</strong></li>
                                    <li id="payment"><strong>Conociéndote</strong></li>
                                    <li id="confirm"><strong>Sube una foto</strong></li>
                                </ul>

                                <!-- Primer paso del formulario: Información escolar -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Información escolar:</h2>

                                        <label class="fieldlabels">Correo electrónico institucional: *</label>
                                        <input type="email" name="correo" id ="correo" />

                                        <label class="fieldlabels">Nombre Completo: *</label>
                                        <input type="text" name="nombre" id ="nombre"   />

                                        <label class="fieldlabels">Contraseña: *</label>
                                        <input type="text" name="pass" id = "pass"  />

                                        <label class="fieldlabels">Número de control: *</label>
                                        <input type="text" name="numerodeControl" placeholder="Número de Control"  />

                                        <label class="fieldlabels">Carrera: *</label><br>
                                        <select name="carrera" id = "carrera">
                                            <option value="Ing. en Sistemas Computacionales">Ing. en Sistemas Computacionales</option>
                                            <option value="Ing. en Gestión Empresarial">Ing. en Gestión Empresarial</option>
                                            <option value="Ing. Mecatrónica">Ing. Mecatrónica</option>
                                            <option value="Ing. Industrial">Ing. Industrial</option>
                                        </select><br><br>
                                    </div>

                                    <!-- Botones de navegación del formulario -->
                                    <input type="button" name="next" class="next action-button" value="Siguiente" />
                                    <input type="button" name="back" class="next action-button" value="Regresar" onclick="location.href='index.php';" />
                                </fieldset>

                                <!-- Segundo paso del formulario: Información Personal -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Información Personal:</h2>

                                        <label class="fieldlabels">Semestre que cursas actualmente: *</label>
                                        <input type="number" name="semestre" min="1" max="12" placeholder="Semestre"  />

                                        <label class="fieldlabels">Número Telefónico: *</label>
                                        <input type="text" name="numero_tel" placeholder="Número telefónico" />

                                        <label class="fieldlabels">Edad: *</label>
                                        <input type="date" name="fecha_n" id= "fecha_n" />
                                        
                                    </div>

                                    <!-- Botones de navegación -->
                                    <input type="button" name="next" class="next action-button" value="Siguiente" />
                                    <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />
                                </fieldset>

                                <!-- Tercer paso del formulario: Conociéndote -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Muéstrate ante la comunidad:</h2>

                                        <label class="fieldlabels">Busco: *</label><br>
                                        <select name="busco" style="width:90%" >
                                            <option value="Amistad con derechos">Amistad con derechos</option>
                                            <option value="Ampliar círculo de amigos">Ampliar círculo de amigos</option>
                                            <option value="Relación seria">Relación seria</option>
                                            <option value="Relación libre">Relación libre</option>
                                            <option value="Un 'Break'">Un 'Break'</option>
                                        </select><br><br>

                                        <label class="fieldlabels">Sexo: *</label><br>
                                        <select name="sexo" style="width:90%">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Otro">Otro</option>
                                        </select><br><br>

                                        <label class="fieldlabels">Interesado en: *</label><br>
                                        <select name="interesado_en" style="width:90%">
                                            <option value="Conocer hombres">Conocer hombres</option>
                                            <option value="Conocer mujeres">Conocer mujeres</option>
                                            <option value="Un poquito de todo">Un poquito de todo</option>
                                        </select><br><br>

                                        <label class="fieldlabels">Signo Zodiacal: *</label><br>
                                        <select name="signo_zodiacal" style="width:90%">
                                            <option value="Piscis">Piscis</option>
                                            <option value="Tauro">Tauro</option>
                                            <option value="Leo">Leo</option>
                                            <option value="Geminis">Geminis</option>
                                            <option value="Aries">Aries</option>
                                            <option value="Acuario">Acuario</option>
                                            <option value="Sagitario">Sagitario</option>
                                            <option value="Escorpio">Escorpio</option>
                                            <option value="Cancer">Cancer</option>
                                            <option value="Libra">Libra</option>
                                            <option value="Capricornio">Capricornio</option>
                                            <option value="Virgo">Virgo</option>

                                            <!-- Otras opciones -->
                                        </select><br><br>
                                        <label class="fieldlabels" for="descripcion">Agrega una breve descripción de ti:</label><br>
                                        <textarea id="descripcion" name="descripcion" minlength="4" maxlength="200" placeholder="Máximo 200 caracteres" style="width: 90%; height: 150px;"></textarea>
                                         </div>

                                    <!-- Botones de navegación -->
                                    <input type="button" name="next" class="next action-button" value="Siguiente" />
                                    <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />
                                </fieldset>

                                <!-- Cuarto paso del formulario: Sube una foto -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Sube tus mejores fotos!</h2>

                                        <!-- Input para cargar una foto -->
                                        <div class="mb-3">
                                            <input class="form-control" type="file" name="fotos" id="fotos">
                                        </div>
                                    </div>

                                    <!-- Botones de navegación -->
                                    <input type="submit" name="save" class="next action-button" value="Listo" />
                                    <input type="button" name="previous" class="previous action-button" value="Regresar" />
                                </fieldset>
                            </form>

                            <!-- Ventana Modal -->
                            <div class="ventana_modal"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   <!-- VIENE DE REGISTRO.PHP -->
    <script>
             window.onload = function() {
           
            var nombreInput = document.getElementById('nombre');
            var correoInput = document.getElementById('correo');
            var passInput = document.getElementById('pass');
       
            var nombre = localStorage.getItem('nombre');
            var correo = localStorage.getItem('correo');
            var pass = localStorage.getItem('pass');
        
            nombreInput.value = nombre;
            correoInput.value = correo;
            passInput.value = pass;
        }
    </script>

    <!-- SCRIPT DE HEADER -->
    <script>
        $(document).ready(function () {
            $('.header_load').load('header.php');
        });
    </script>
    <!--  -->
    <script>
        $(document).ready(function () {
            $('.ventana_modal').load('modal_registro.php');
        });
    </script>

</html>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="js/registro_inf.js"></script>
<script src="js/index.js"></script>
<script src="js/modal.js"></script>


</body>

</html>