<?php

$nombreUsuario=$_POST['nombreUsuario'];
$telefonoUsuario=$_POST['telefonoUsuario'];
$correoUsuario=$_POST['correoUsuario'];
$equipo=$_POST['equipos'];


$Select = $mysqli->query("SELECT idEquipos FROM champions.Equipos where nombreEquipo='$equipo'");


if($Select->num_rows > 0){
    while($fila2=$Select->fetch_array(MYSQLI_ASSOC)){
        $Insert = $mysqli->query("INSERT INTO champions.Usuario (nombreUsuario,correoUsuario,telefonoUsuario,Equipos_idEquipos)
        VALUES ('".$nombreUsuario."', '".$correoUsuario."', '".$telefonoUsuario."', '".$fila2['idEquipos']."')");

        if($Insert){
            ?>
            <br/><br/>
            <?php
            echo "Usuario ingresado";
        }else{
            ?>
            <br/><br/>
            <?php
            echo "Fallo al subir el Usuario";
        }
    }
}







?>