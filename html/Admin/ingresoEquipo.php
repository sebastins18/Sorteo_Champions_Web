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
    <title>Ingreso de equipo</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../img/ucl-logo-rounded-frame.webp">
</head>
<body class="cuerpo-admin">
    <header>
        <nav class="nav-admin">
            <input type="checkbox" id="chbox" class="chbox">
                <label for="chbox" class="drawer">
                    <i class="fa fa-bars " aria-hidden="true"></i>
                </label>
            <a class="titulo" href="indexAdmin.php"><img src="../../img/logotype_dark.svg" alt=""/></a>
            <ul class="menu-box menu-admin">
                <li><a href="indexAdmin.php" class="fa fa-home">Inicio Admin</a></li>
                <li><a href="ingresoEquipo.php" class="fa fa-users seleccionado">Ingreso equipos</a></li>
                <li><a href="sorteoEquipos.php" class="fa fa-random">Sorteo de equipos</a></li>
                <li><a href="registrarResultado.php" class="fa fa-list-alt">Registrar Resultado</a></li>
            </ul>
            <a class="login salir" href="../../php/MYSQL/logout.php">Salir</a>
        </nav>
    </header>
<h1 class="titulo-principal">Ingreso de equipos</h1>
<!-- Formulario ingreso de jugadores-->
<main>
    <form class="formulario" action="ingresoEquipo.php" method="POST" enctype="multipart/form-data">
        <div class="bloque">
            <legend class="campos">Ingreso de equipos:</legend>

                <div class="campo">
                    <br/>
                    <label class="campos">Nombre del club: </label>
                    <input class="input-text" type="text"  name="nombreEquipo" />
                    <br/><br/>
                </div>

                <div class="campo">
                    <label class="campos">Liga: </label>
                    <select class="input-text" name="ligas" id="idLiga">
                        <option value="España">España</option>
                        <option value="Francia">Francia</option>
                        <option value="Belgica">Belgica</option>
                        <option value="Alemania">Alemania</option>
                        <option value="Inglaterra">Inglaterra</option>
                        <option value="Italia">Italia</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Holanda">Holanda</option>
                        <option value="Turquia">Turquia</option>
                        <option value="Moldavia">Moldavia</option>
                        <option value="Ukrania">Ukrania</option>
                        <option value="Rusia">Rusia</option>
                        <option value="Suiza">Suiza</option>
                        <option value="Suecia">Suecia</option>
                        <option value="Austria">Austria</option>
                    </select>
                    <br/><br/>
                </div>

                <div class="campo">
                    <label class="campos">Seleccione la imagen para subir :</label>
                    
                    <input type="file" name="image"/>
                    <br/><br/>
                </div>

                <div class="alinear-derecha flex">
                    <input class="boton w-sm-100" type="submit" value="Enviar" name="enviar">
                </div>
        </div>
    </form>    
</main>  
<!-----------Fin----------------------->
<?php
if(isset($_POST["nombreEquipo"]) && isset($_POST["ligas"]) && isset($_POST["enviar"])){
    if(isset($_POST["image"])==false){
    require_once "../../php/conexion.php";
    require_once "../../php/MYSQL/ingresoEquipos.php";
    }else{
        
        echo "<br/><br/>";
        
        echo "Seleccione una imagen para subir";
    }
}
?>

</body>
</html> 