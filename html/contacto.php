<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>
<body>
     <!--     NO TOCAR-->
     <header>
        <nav>
            <input type="checkbox" id="chbox" class="chbox">
            <label for="chbox" class="drawer">
                <i class="fa fa-bars " aria-hidden="true"></i>
            </label>
            <a class="titulo" href="../index.html"><img src="../img/logotype_dark.svg" alt=""></a>
            <ul class="menu-box">
                <li><a href="../index.php" class="fa fa-home" >Inicio</a></li>
                <li><a href="../html/sorteos.php" class="fa fa-random" >Sorteos</a></li>
                <li><a href="../html/grupos.php"class="fa fa-users">Grupos</a></li>
                <li><a href="../html/verPartidos.php" class="fa fa-clock-o" >Partidos</a></li>
                <li><a href="../html/contacto.php" class="fa fa-arrow-circle-up seleccionado" >Contacto</a></li>
            </ul>
            <a class="login" href="Login/inicioSesion.php">Login</a>
        </nav>
    </header>
    <!--     NO TOCAR-->
    <section>
        
        <form action="contacto.php" method="POST" class="formulario">
            <fieldset>
                <legend>Contactenos</legend>
        
                <div class="contenedor-campos">
                    <div class="campos">
                        <label>Nombre</label>
                        <input class="input-text" type="text" name="nombreUsuario" placeholder="Nombre" />
                    </div>
        
                    <div class="campos">
                        <label>Telefono</label>
                        <input class="input-text" type="tel" name="telefonoUsuario" placeholder="Telefono" />
                    </div>
        
                    <div class="campos">
                        <label>Correo</label>
                        <input class="input-text" type="email" name="correoUsuario" placeholder="Email">
                    </div>


                    <div class="campos">
                        <label>Equipo Favorito</label>
                        <?php
                            require_once "../php/conexion.php";
                            require_once "../php/MYSQL/obtenerEquipos.php";
                        ?>
                    </div>
                </div>
                    <div class="alinear-derecha flex">
                        <input class="boton w-sm-100" name="enviar" type="submit" value="Enviar">
                    </div>
                
            </fieldset>
        </form>

        <?php
            if(isset($_POST["nombreUsuario"]) && isset($_POST["telefonoUsuario"]) && isset($_POST["correoUsuario"]) && isset($_POST["equipos"])  && isset($_POST["enviar"])){
                require_once "../php/conexion.php";
                require_once "../php/MYSQL/ingresoUsuarios.php";
                require_once "../php/envioCorreo.php";
            }
        ?>
    
    </section>

    
</body>
</html>