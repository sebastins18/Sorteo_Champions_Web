<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../img/ucl-logo-rounded-frame.webp">
</head>
<body>
    <!--     NO TOCAR-->
    <header>
    <nav>
            <input type="checkbox" id="chbox" class="chbox">
            <label for="chbox" class="drawer">
                <i class="fa fa-bars " aria-hidden="true"></i>
            </label>
            <a class="titulo" href="../../index.php"><img src="../../img/logotype_dark.svg" alt=""></a>
            <ul class="menu-box">
                <li><a href="../../index.php" class="fa fa-home" >Inicio</a></li>
                <li><a href="../sorteos.php" class="fa fa-random" >Sorteos</a></li>
                <li><a href="../grupos.php" class=" fa fa-users">Grupos</a></li>
                <li><a href="../verPartidos.php" class="fa fa-clock-o" >Partidos</a></li>
                <li><a href="../contacto.php" class="fa fa-arrow-circle-up" >Contacto</a></li>
            </ul>
            <a class="login salir" href="../../html/Login/inicioSesion.php">Login</a>
        </nav>
    </header>
    <!--     NO TOCAR-->
    <h1 class="titulo-principal">Iniciar Sesion</h1>
      
      <form method="POST" action="inicioSesion.php" class="formulario">
        <label class="campos">Correo</label>
        <input type="text" name="email" class="input-text"><br><br>
        <label class="campos">Clave</label>
        <input type="password" name="clave" class="input-text"><br><br>
        <input type="submit" value="Ingresar" name="boton" class="boton">
        </form>
    
        <?php
      
      if(isset($_POST['boton'])){
            if(isset($_POST['email']) && isset($_POST['clave'])){
                require_once "../../php/conexion.php";
                require_once "../../php/MYSQL/login.php";
          
            }
      }
        ?>
</body>
</html> 