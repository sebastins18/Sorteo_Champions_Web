<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grupos</title>
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="../img/ucl-logo-rounded-frame.webp">
  </head>
  <body>
    <!--     NO TOCAR-->
    <header>
    <nav>
            <input type="checkbox" id="chbox" class="chbox">
            <label for="chbox" class="drawer">
                <i class="fa fa-bars " aria-hidden="true"></i>
            </label>
            <a class="titulo" href="../index.php"><img src="../img/logotype_dark.svg" alt=""></a>
            <ul class="menu-box">
                <li><a href="../index.php" class="fa fa-home" >Inicio</a></li>
                <li><a href="sorteos.php" class="fa fa-random" >Sorteos</a></li>
                <li><a href="grupos.php" class=" fa fa-users seleccionado">Grupos</a></li>
                <li><a href="verPartidos.php" class="fa fa-clock-o" >Partidos</a></li>
                <li><a href="contacto.php" class="fa fa-arrow-circle-up" >Contacto</a></li>
            </ul>
            <a class="login salir" href="Login/inicioSesion.php">Login</a>
        </nav>
    </header>
    <!--     NO TOCAR-->

    <div class="contenedor">
      <img class="img-trofeo" src="../img/bg-mobile.webp" alt="" />
      <form action="grupos.php" method="POST">
        <?php
          require_once "../php/conexion.php";
          require_once "../php/MYSQL/generaTablaGrupos.php";
        ?>
      </form>
    </div>
  </body>
</html>
