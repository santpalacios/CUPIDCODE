<html lang="es">
    <meta charset="UTF-8">
  <title>Chats</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="shortcut icon" href="images/favico.ico" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
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
            <a class="logo" href="index.php"><h3 style="color:black;">CupidCode</h3></a>
          </div>
    
          <div class="links_header">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="#">Sobre nosotros</a></li>
              <li><a href="#">¿Por qué CupidCode?</a></li>
              <li><a href="#"></a></li>
    
            </ul>
          </div>
      </header>
    
<div class="main">
        <div class="container_chat">
           
            <input type="radio" name="check" id="jose">
            <input type="radio" name="check" id="erick" checked>
            <input type="radio" name="check" id="sandra">
            <input type="radio" name="check" id="carla">
            <input type="radio" name="check" id="michel">
            <input type="radio" name="check" id="steph">
            <div class="box-left">
                <div class="search">
                    <input type="search" placeholder="Search" id="search">
                    <label for="search" title="Search"></label>
                </div>
                <div class="friends">
                    <label for="jose" title="Thomas Bangalter">
                        <img src="https://i.ibb.co/58TJZNb/jose.jpg" alt="jose">
                        <div class="text">
                            <h2>
Sandra                                <time datetime="14:09">2:09 PM</time>
                            </h2>
                            <p>Que show</p>
                        </div>
                    </label>
                    <label for="erick" title="erick">
                        <img src="https://i.ibb.co/HC6Z6gV/erick.png" alt="erick">
                        <div class="text">
                            <h2>
                                Erick
                                <time datetime="13:44">1:44 PM</time>
                            </h2>
                            <p>Se va a hacer o nooo...</p>
                        </div>
                    </label>
                    <label for="sandra" title="sandra">
                        <img src="https://i.ibb.co/52b24Ff/sandra.jpg" alt="sandra">
                        <div class="text">
                            <h2>
                                sandra
                                <time datetime="14:09">2:09 PM</time>
                            </h2>
                            <p>Unas caguamas si o que....</p>
                        </div>
                    </label>
                    <label for="carla" title="carla">
                        <img src="https://i.ibb.co/XJQDTtg/carla.jpg" alt="carla">
                        <div class="text">
                            <h2>
                                carla
                                <time datetime="14:09">2:09 PM</time>
                            </h2>
                            <p>Holi caryoliiii</p>
                        </div>
                    </label>
                    <label for="michel" title="michel">
                        <img src="https://i.ibb.co/DVvnBhP/michel.jpg" alt="michel">
                        <div class="text">
                            <h2>
                                michel
                                <time datetime="14:09">2:09 PM</time>
                            </h2>
                            <p>Answer me don't make me feel lonely</p>
                        </div>
                    </label>
                    <label for="stheph" title="steph">
                        <img src="https://i.ibb.co/Hd6hK5t/stheph.jpg" alt="stheph">
                        <div class="text">
                            <h2>
                                steph
                                <time datetime="14:09">2:09 PM</time>
                            </h2>
                            <p>Hay que vernos, urgente</p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="box-right">
                
                <div class="jose">
                    <div class="name">
                        <span>Para:</span>
                        <span>Juan Pérez</span>
                    </div>
                    <div class="chat">
                        <time datatime="06:48">Today, 6:48 AM</time>
                        <span>Que rollo,</span>
                        <span>Sacaaaa.</span>
                        <span>Estoy esperando...</span>
                        <div class="send">
                            <input type="text">
                            <img src="https://i.ibb.co/GPRy4gx/attachment.png" alt="attachment">
                            <img src="https://i.ibb.co/PY4GMmD/smiley.png" alt="smiley">
                            <img src="https://i.ibb.co/CMZQB1g/send.png" alt="send">
                        </div>
                    </div>
                </div>
                <div class="header">
                    <h2>Hola</h2>
                </div>
                <div class="erick">
                    <div class="name">
                        <span>To:</span>
                        <span>erick</span>
                    </div>
                    <div class="chat">
                        <time datatime="17:38">Today, 5:38 PM</time>
                        <span>En cortinas paaaaaa</span>
                        <span>Se va a hcaer o no</span>
                        <span class="right">Si vamos o no</span>
                        <span class="right">Paso por ti padrino</span>
                        <span>Jalas o pandeas</span>
                        <span>En cortoooo</span>
                        <div class="send">
                            <input type="text">
                            <img src="https://i.ibb.co/GPRy4gx/attachment.png" alt="attachment">
                            <img src="https://i.ibb.co/PY4GMmD/smiley.png" alt="smiley">
                            <img src="https://i.ibb.co/CMZQB1g/send.png" alt="send">
                        </div>
                    </div>
                </div>
                <div class="sandra">
                    <div class="name">
                        <span>To:</span>
                        <span>sandra</span>
                    </div>
                    <div class="chat">
                        <time datatime="03:38">Today, 3:38 AM</time>
                        <span>Hey guapo</span>
                        <span>Umm... Contestame</span>
                        <span class="right">... ash.</span>
                        <span class="right">me chocas</span>
                        <span>creo que....</span>
                        
                        <div class="send">
                            <input type="text">
                            <img src="https://i.ibb.co/GPRy4gx/attachment.png" alt="attachment">
                            <img src="https://i.ibb.co/PY4GMmD/smiley.png" alt="smiley">
                            <img src="https://i.ibb.co/CMZQB1g/send.png" alt="send">
                        </div>
                    </div>
                </div>
                <div class="carla">
                    <div class="name">
                        <span>To:</span>
                        <span>carla</span>
                    </div>
                    <div class="chat">
                        <time datatime="04:20">Yesterday, 4:20 AM</time>
                        <span class="right">Que tranzaaaaa</span>
                        <span class="right">Vamos a pistear</span>
                        <span>Si o no?.</span>
                        <span class="right">Vamos</span>
                        <span class="right">Yo jalo</span>
                        <div class="send">
                            <input type="text">
                            <img src="https://i.ibb.co/GPRy4gx/attachment.png" alt="attachment">
                            <img src="https://i.ibb.co/PY4GMmD/smiley.png" alt="smiley">
                            <img src="https://i.ibb.co/CMZQB1g/send.png" alt="send">
                        </div>
                    </div>
                </div>
                <div class="michel">
                    <div class="name">
                        <span>To:</span>
                        <span>michel</span>
                    </div>
                    <div class="chat">
                        <time datatime="06:28">Today, 6:28 AM</time>
                        <span>Wasup</span>
                        <span>Wasup</span>
                        <span>Vamoooooos</span>
                        <div class="send">
                            <input type="text">
                            <img src="https://i.ibb.co/GPRy4gx/attachment.png" alt="attachment">
                            <img src="https://i.ibb.co/PY4GMmD/smiley.png" alt="smiley">
                            <img src="https://i.ibb.co/CMZQB1g/send.png" alt="send">
                        </div>
                    </div>
                </div>
                <div class="stheph">
                    <div class="name">
                        <span>To:</span>
                        <span>steph</span>
                    </div>
                    <div class="chat">
                        <time datatime="13:27">Monday, 1:27 AM</time>
                        <span>Salgamos</span>
                        <span>A platicar un rato cualquier dia.</span>
                        <span class="right">steph?</span>
                        <span class="right">Pa recordar esos momentos</span>
                        <span>Cuando tu eras mia</span>
                        <div class="send">
                            <input type="text">
                            <img src="https://i.ibb.co/GPRy4gx/attachment.png" alt="attachment">
                            <img src="https://i.ibb.co/PY4GMmD/smiley.png" alt="smiley">
                            <img src="https://i.ibb.co/CMZQB1g/send.png" alt="send">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



        <div class="btn-flotante">

        </div>
    </body>
    
      <script>
        $(document).ready(function () {
          $('.btn-flotante').load('btn-flotante.php');
        });
      </script>
    <script type="text/javascript" src="js/chat_ind.js"></script>
  </body>
</html>              