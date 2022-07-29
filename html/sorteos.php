<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sorteos</title>

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li><a href="../html/sorteos.php" class="fa fa-random seleccionado" >Sorteos</a></li>
                <li><a href="../html/grupos.php" class="fa fa-users">Grupos</a></li>
                <li><a href="../html/verPartidos.php" class="fa fa-clock-o" >Partidos</a></li>
                <li><a href="../html/contacto.php" class="fa fa-arrow-circle-up" >Contacto</a></li>
            </ul>
            <a class="login salir" href="Login/inicioSesion.php">Login</a>
        </nav>
    </header>
    <!--     NO TOCAR-->
    <h1 class="titulo-principal">Sorteos</h1>
    
    <?php
    require_once "../php/conexion.php";
    echo '<div class="contenedor-bombos">';
    require_once "../php/MYSQL/ponerImg.php";
    echo "</echo>";
    ?>

    

</body>
</html> 

