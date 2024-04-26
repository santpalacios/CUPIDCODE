<?php
  require 'conect.php';
session_start();
if (isset($_GET['id_us'])) {
    $receiver_id = $_GET['id_us'];

  

    $sql = "SELECT nombre FROM datos_us WHERE id_us = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $receiver_id);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $receiver_name = $usuario['nombre'];

        
    } else {
        echo "Usuario no encontrado";
        exit;
    }
} else {
    echo "ID de usuario no proporcionado";
    exit;
}
?>

<html lang="es">
<meta charset="UTF-8">
<title>Chats</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="shortcut icon" href="images/favico.ico" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Pacifico&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap"
    rel="stylesheet">
  <link href="chats.css" rel="stylesheet" type="text/css">
</head>

<body>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

    .light {
      --mainColor: #64bcf4;
      --hoverColor: #5bacdf;
      --backgroundColor: #f1f8fc;
      --darkOne: #312f3a;
      --darkTwo: #45424b;
      --lightOne: #919191;
      --lightTwo: #aaa;
    }

    .dark {
      --mainColor: #64bcf4;
      --hoverColor: #5bacdf;
      --backgroundColor: #192e3a;
      --darkOne: #f3f3f3;
      --darkTwo: #fff;
      --lightOne: #ccc;
      --lightTwo: #e7e3e3;
    }



    body {
      font-family: "Poppins", sans-serif;
    }



    a {
      text-decoration: none;
    }

    .big-wrapper {
      position: relative;
      padding: 1.7rem 0 2rem;
      width: 100%;
      min-height: 100vh;
      overflow: hidden;
      background-color: var(--backgroundColor);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .container {
      position: relative;
      max-width: 81rem;
      width: 100%;
      margin: 0 auto;
      padding-top: 0 3m;
      z-index: 2;

    }

    header {
      padding-top: 2rem;
      position: relative;
      z-index: 6;
    }

    header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .overlay {
      display: none;
    }

    .logo {
      display: flex;
      align-items: center;
      cursor: pointer;
    }

    .logo img {
      width: 1px;
      margin-right: 0.6rem;
      margin-top: -0.6rem;
    }

    .logo h3 {
      color: var(--darkOne);
      font-size: 1.55rem;
      line-height: 1.2;
      font-weight: 700;
    }

    .links_header ul {
      display: flex;
      list-style: none;
      align-items: center;
    }

    .links_header a {
      color: var(--lightTwo);
      margin-left: 4.5rem;
      display: inline-block;
      transition: 0.3s;
    }

    .links_header a:hover {
      color: var(--hoverColor);
      transform: scale(1.05);
      text-decoration: none;
    }


    @media screen and (max-width: 870px) {
      .hamburger-menu {
        display: flex;
      }

      .links_header {
        position: fixed;
        top: 0;
        right: 0;
        max-width: 450px;
        width: 100%;
        height: 100%;
        background-color: var(--mainColor);
        z-index: 95;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translateX(100%);
        transition: 0.5s;
      }

      .links_header ul {
        flex-direction: column;
      }

      .links_header a {
        color: #fff;
        margin-left: 0;
        padding: 2rem 0;
      }

      .links_header .btn {
        background: none;
      }

      .overlay {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        opacity: 0;
        pointer-events: none;
        transition: 0.5s;
      }

      .big-wrapper.active .links_header {
        transform: translateX(0);
        box-shadow: 0 0 50px 2px rgba(0, 0, 0, 0.4);
      }

      .big-wrapper.active .overlay {
        pointer-events: all;
        opacity: 1;
      }

      .showcase-area {
        padding: 2.5rem 0;
        max-width: 700px;
        margin: 0 auto;
      }

      .showcase-area .container {
        grid-template-columns: 1fr;
        justify-content: center;
        grid-gap: 2rem;
      }

      .big-title {
        font-size: 1.1rem;
      }

      .text {
        font-size: 0.95rem;
        margin: 1.4rem 0 1.5rem;
      }

      .person {
        width: 100%;
        transform: none;
      }

      .logo h3 {
        font-size: 1.8rem;
      }

      .shape {
        bottom: -180px;
        left: -150px;
      }
    }

    @media screen and (max-width: 470px) {
      .container {
        padding: 0 1.5rem;
      }

      .big-title {
        font-size: 0.9rem;
      }

      .text {
        margin: 1.1rem 0 1.5rem;
      }

      .showcase-area .btn {
        font-size: 0.8rem;
      }
    }
  </style>

  <header>
    <div class="container">
      <div class="logo">
        <img src="images/logo.png" alt="Logo" />
        <a class="logo" href="index.html">
          <h3 style="color:black;">CupidCode</h3>
        </a>
      </div>

      <div class="links_header">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="#">Sobre nosotros</a></li>
          <li><a href="#">¿Por qué CupidCode?</a></li>
          <li><a href="#"></a></li>

        </ul>
      </div>
  </header>

  <div class="main">
    <div class="container_chat">
     
      
      <div class="box-left">
        <div class="search">
          <input type="search" placeholder="Search" id="search">
          <label for="search" title="Search"></label>
        </div>

        <div class="friends">
          
        <h2>Chat con <?php echo $receiver_name; ?></h2>
          
        <div class = "mensajes" >
          <?php
          $sql = "SELECT * FROM messages WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?) ORDER BY timestamp ASC";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("iiii", $_SESSION['id_us'], $receiver_id, $receiver_id, $_SESSION['id_us']);
          $stmt->execute();
  
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()) {
              echo "<p><b>" . ($row['sender_id'] == $_SESSION['id_us'] ? "Tú" : $receiver_name) . ":</b> " . $row['menssage'] . "</p>";
          }
          ?>
        </div>
        <form method="POST">
        <input type="text" name="mensaje" >
        <input type="submit" value="Enviar" >
        </form>

        </div>

        <div class="btn-flotante">

        </div>
</body>





<script>
  $(document).ready(function () {
    $('.header_load').load('header.html');
  });
</script>
<script>
  $(document).ready(function () {
    $('.btn-flotante').load('btn-flotante.html');
  });
</script>
<script type="text/javascript" src="js/chat_ind.js"></script>
</body>

</html>