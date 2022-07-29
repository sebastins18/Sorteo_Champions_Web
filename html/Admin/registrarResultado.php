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
    <title>Registro de Resultado</title>
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
                <li><a href="sorteoEquipos.php" class="fa fa-random">Sorteo de equipos</a></li>
                <li><a href="registrarResultado.php" class="fa fa-list-alt seleccionado">Registrar Resultado</a></li>
            </ul>
            <a class="login salir" href="../../php/MYSQL/logout.php">Salir</a>
        </nav>
    </header>
    <!--     NO TOCAR-->
    <h1 class="titulo-principal">Registrar Resultado</h1>

    <main>
        <form action="registrarResultado.php" method="POST" >
            
            <div class="bloque">
            
            <label class="campos">Seleccione la jornada: </label>
                <select  name="Jornada" id="numJornada">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                <input class="boton" type="submit" name="verJornada" value="Ver"/>
            </div>
        </form>    
    </main>
    <?php 
        if(isset($_POST['verJornada']) && isset($_POST["Jornada"])){
            require_once "../../php/conexion.php";
            require_once "../../php/MYSQL/previewResultadoPartido.php";
        }
    ?>

<?php 
        if(isset($_POST['boton'])){
            require_once "../../php/conexion.php";
            require_once "../../php/MYSQL/registrarResultadoPartido.php";
        } 
?>


</body>
</html> 