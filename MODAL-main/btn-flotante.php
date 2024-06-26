<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-w2nHjr+dIYUWxjUvBp+OXQmU5FKdqUxX0qCmqnpFQSgk/xC79vZ2cbqGNdHywqJT3tzijTk5Sj2EZKc+IWQ62w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="btn-flotante.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div class="btn-flotante">
   
      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>
    
        <ul class="menu__box">
          <li> <a class="menu__item" href="perfil.php">Mi Perfil <span>&#128583</span></a> </li>
          <li><a class="menu__item" href="chats.php">Mis conversaciones <span>&#128140</span></a></li>
          <li><a class="menu__item" href="match.php">Match <span>&#128145</span></a></li>
          <li><a class="menu__item" href="registro.php">Cerrar sesión <span>&#9996</span></a></li>

          
        </ul>
      </div>
    </div>

      <style>
    
        #menu__toggle {
          opacity: 0;
        }
        #menu__toggle:checked + .menu__btn > span {
          transform: rotate(45deg);
        }
        #menu__toggle:checked + .menu__btn > span::before {
          top: 0;
          transform: rotate(0deg);
        }
        #menu__toggle:checked + .menu__btn > span::after {
          top: 0;
          transform: rotate(90deg);
        }
        #menu__toggle:checked ~ .menu__box {
          left: 0 !important;
        }
        .menu__btn {
          position: fixed;
          top: 20px;
          right: 20px;
          width: 26px;
          height: 26px;
          cursor: pointer;
          z-index: 99;
        }
        .menu__btn > span,
        .menu__btn > span::before,
        .menu__btn > span::after {
          display: block;
          position: absolute;
          width: 100%;
          height: 2px;
          background-color: black;
          transition-duration: .25s;
        }
        .menu__btn > span::before {
          content: '';
          top: -8px;
        }
        .menu__btn > span::after {
          content: '';
          top: 8px;
        }
        .menu__box {
          display: block;
          position: fixed;
          top: 0;
          left: -100%;
          width: 300px;
          height: 100%;
          margin: 0;
          padding: 80px 0;
          list-style: none;
          background-color: #e3f3fd;
          box-shadow: 2px 2px 6px rgba(0, 0, 0, .4);
          transition-duration: .25s;
        }
        .menu__item {
          display: block;
          padding: 12px 24px;
          color: #333;
          font-family: 'Roboto', sans-serif;
          font-size: 20px;
          font-weight: 600;
          text-decoration: none;
          transition-duration: .25s;
        }
        .menu__item:hover {
          background-color: #CFD8DC;
        }
      
      </style>
      <script>
        $('.botonF1').hover(function(){
          $('.btnf').addClass('animacionVer');
        })
        $('.contenedor_btn').mouseleave(function(){
          $('.btnf').removeClass('animacionVer');
        })
      </script>
</body>
</html>