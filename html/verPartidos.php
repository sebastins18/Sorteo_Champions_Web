<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
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
                <li><a href="../html/sorteos.php" class="fa fa-random" >Sorteos</a></li>
                <li><a href="../html/grupos.php" class="fa fa-users">Grupos</a></li>
                <li><a href="../html/verPartidos.php" class="fa fa-clock-o seleccionado" >Partidos</a></li>
                <li><a href="../html/contacto.php" class="fa fa-arrow-circle-up" >Contacto</a></li>
            </ul>
            <a class="login salir" href="Login/inicioSesion.php">Login</a>
        </nav>
    </header>
    <!--     NO TOCAR-->
    <br/><br/>
    <br/><br/>
    <main>
        <form action="verPartidos.php" method="POST" >
            
            <div class="bloque">
            <label class="campos">Seleccione la jornada: </label>
                <select name="Jornada" id="numJornada">
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
            require_once "../php/conexion.php";
            require_once "../php/MYSQL/mostrarJornadas.php";
        }
    ?>
</body>
</html> 