<?php
      session_start();
      if($_SESSION['username'] == ""){
        header("Location: ../../index.php");
      }
      $now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado";
echo "<br><a href='../../index.php'>Salir</a>";
exit;
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo de equipos</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../img/ucl-logo-rounded-frame.webp">
</head>
<body class="cuerpo-admin">
    <!--     NO TOCAR-->
    <header>
        <nav class="nav-admin">
            <input type="checkbox" id="chbox" class="chbox">
                <label for="chbox" class="drawer">
                    <i class="fa fa-bars " aria-hidden="true"></i>
                </label>
            <a class="titulo" href="indexAdmin.html"><img src="../../img/logotype_dark.svg" alt=""/></a>
            <ul class="menu-box menu-admin">
                <li><a href="indexAdmin.php" class="fa fa-home">Inicio Admin</a></li>
                <li><a href="ingresoEquipo.php" class="fa fa-users">Ingreso equipos</a></li>
                <li><a href="sorteoEquipos.php" class="fa fa-random seleccionado">Sorteo de equipos</a></li>
                <li><a href="registrarResultado.php" class="fa fa-list-alt">Registrar Resultado</a></li>
            </ul>
            <a class="login salir" href="../../php/MYSQL/logout.php">Salir</a>
        </nav>
    </header>
    <!--     NO TOCAR-->
    <h1 class="titulo-principal">Sorteo de grupos</h1>

    <main>
        <form action="sorteoEquipos.php" method="POST" >
            <div class="bloque">
                <legend class="campos">Sortear equipos:</legend>
                <input class="boton" type="submit" name="sortear" value="Sortear"/>
                
            </div>
        </form>     
    </main>
    <?php 
        if(isset($_POST['sortear'])){
            require_once "../../php/equipo.php";
            require_once "../../php/conexion.php";
            require_once '../../php/MYSQL/sorteo.php';
            require_once '../../php/MYSQL/crearPartidos.php';
        }
    ?>


</body>
</html> 