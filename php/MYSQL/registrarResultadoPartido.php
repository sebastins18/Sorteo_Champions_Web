<?php

$idPartido=$_POST['boton'];
$golCasa=$_POST['golCasa'.$idPartido];
$golVisita=$_POST['golVisita'.$idPartido];

$query="UPDATE champions.Partidos 
SET resultadoEquipo1 = ".$golCasa.",estadoPartido = true, `resultadoEquipo2` = ".$golVisita."
WHERE (idPartidos = ".$idPartido.")";



$select="SELECT Equipos_idEquipos1 FROM champions.Partidos where idPartidos=".$idPartido.";";
$select2="SELECT Equipos_idEquipos2 FROM champions.Partidos where idPartidos=".$idPartido.";";





$mysqli->query($query);
if($query){
    echo "Se han agregado los resultados del partido";
}else{
    echo "No se han podido agregar los resultados del partido";
}

//Obtencion equipo 1
$consulta=$mysqli->query($select);
    if($consulta->num_rows > 0){
        while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
//Ciclo para poner resultado por equipo casa
$select3="SELECT * FROM champions.Grupos WHERE Equipos_idEquipos=".$fila['Equipos_idEquipos1']."";
            $consulta3=$mysqli->query($select3);
            if($consulta3->num_rows > 0){
                while($fila3=$consulta3->fetch_array(MYSQLI_ASSOC)){
        
                if($golCasa>$golVisita){
                    $update="UPDATE champions.Grupos 
                    SET 
                    cantidadPartidos  = ".$fila3['cantidadPartidos'] ."+1,
                    partidosGanados   = ".$fila3['partidosGanados']  ."+1,
                    partidosEmpatados = ".$fila3['partidosEmpatados'].",
                    pardidosPerdidos  = ".$fila3['pardidosPerdidos'] .",
                    golesFavor        = ".$fila3['golesFavor']       ."+".$golCasa.",
                    golesContra       = ".$fila3['golesContra']      ."+".$golVisita.",
                    diferenciaGoles   = ".$fila3['diferenciaGoles'] ."+(".$golCasa."-".$golVisita."),
                    puntosEquipo      = ".$fila3['puntosEquipo']."+3
                    WHERE (Equipos_idEquipos = ".$fila['Equipos_idEquipos1'].")";

                    $mysqli->query($update);
                        if($update){
                            echo "Se han actualizado la listas de posiciones";
                        }else{
                            echo "No Se han podido actualizar la listas de posiciones";
                        }
                }else if($golCasa<$golVisita){
                    $update="UPDATE champions.Grupos 
                    SET 
                    cantidadPartidos  = ".$fila3['cantidadPartidos'] ."+1,
                    partidosGanados   = ".$fila3['partidosGanados']  .",
                    partidosEmpatados = ".$fila3['partidosEmpatados'].",
                    pardidosPerdidos  = ".$fila3['pardidosPerdidos'] ."+1,
                    golesFavor        = ".$fila3['golesFavor']       ."+".$golCasa.",
                    golesContra       = ".$fila3['golesContra']      ."+".$golVisita.",
                    diferenciaGoles   = ".$fila3['diferenciaGoles'] ."+(".$golCasa."-".$golVisita."),
                    puntosEquipo      = ".$fila3['puntosEquipo']     ."+0
                    WHERE (Equipos_idEquipos = ".$fila['Equipos_idEquipos1'].")";

                    $mysqli->query($update);
                    if($update){
                        echo "Se han actualizado la listas de posiciones";
                    }else{
                        echo "No Se han podido actualizar la listas de posiciones";
                    }
                }else{
                    $update="UPDATE champions.Grupos 
                    SET 
                    cantidadPartidos  = ".$fila3['cantidadPartidos'] ."+1,
                    partidosGanados   = ".$fila3['partidosGanados']  .",
                    partidosEmpatados = ".$fila3['partidosEmpatados']."+1,
                    pardidosPerdidos  = ".$fila3['pardidosPerdidos'] .",
                    golesFavor        = ".$fila3['golesFavor']       ."+".$golCasa.",
                    golesContra       = ".$fila3['golesContra']      ."+".$golVisita.",
                    diferenciaGoles   = ".$fila3['diferenciaGoles'] ."+(".$golCasa."-".$golVisita."),
                    puntosEquipo      = ".$fila3['puntosEquipo']     ."+1
                    WHERE (Equipos_idEquipos = ".$fila['Equipos_idEquipos1'].")";

                    $mysqli->query($update);
                    if($update){
                        echo "Se han actualizado la listas de posiciones";
                    }else{
                        echo "No Se han podido actualizar la listas de posiciones";
                    }
                }
                }
            }
        }
    }





//Obtencion equipo 2
$consulta=$mysqli->query($select2);
    if($consulta->num_rows > 0){
        while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
//Ciclo para poner resultado por equipo visita
$select3="SELECT * FROM champions.Grupos WHERE Equipos_idEquipos=".$fila['Equipos_idEquipos2']."";
            $consulta3=$mysqli->query($select3);
            if($consulta3->num_rows > 0){
                while($fila3=$consulta3->fetch_array(MYSQLI_ASSOC)){
        
                if($golCasa>$golVisita){
                    $update="UPDATE champions.Grupos 
                    SET 
                    cantidadPartidos  = ".$fila3['cantidadPartidos'] ."+1,
                    partidosGanados   = ".$fila3['partidosGanados']  .",
                    partidosEmpatados = ".$fila3['partidosEmpatados'].",
                    pardidosPerdidos  = ".$fila3['pardidosPerdidos'] ."+1,
                    golesFavor        = ".$fila3['golesFavor']       ."+".$golVisita.",
                    golesContra       = ".$fila3['golesContra']      ."+".$golCasa.",
                    diferenciaGoles   = ".$fila3['diferenciaGoles'] ."+(".$golVisita."-".$golCasa."),
                    puntosEquipo      = ".$fila3['puntosEquipo']."+0
                    WHERE (Equipos_idEquipos = ".$fila['Equipos_idEquipos2'].")";
                    $mysqli->query($update);
                        if($update){
                            echo "Se han actualizado la listas de posiciones";
                        }else{
                            echo "No Se han podido actualizar la listas de posiciones";
                        }
                }else if($golCasa<$golVisita){
                    $update="UPDATE champions.Grupos 
                    SET 
                    cantidadPartidos  = ".$fila3['cantidadPartidos'] ."+1,
                    partidosGanados   = ".$fila3['partidosGanados']  ."+1,
                    partidosEmpatados = ".$fila3['partidosEmpatados'].",
                    pardidosPerdidos  = ".$fila3['pardidosPerdidos'] .",
                    golesFavor        = ".$fila3['golesFavor']       ."+".$golVisita.",
                    golesContra       = ".$fila3['golesContra']      ."+".$golCasa.",
                    diferenciaGoles   = ".$fila3['diferenciaGoles'] ."+(".$golVisita."-".$golCasa."),
                    puntosEquipo      = ".$fila3['puntosEquipo']     ."+3
                    WHERE (Equipos_idEquipos = ".$fila['Equipos_idEquipos2'].")";

                    $mysqli->query($update);
                    if($update){
                        echo "Se han actualizado la listas de posiciones";
                    }else{
                        echo "No Se han podido actualizar la listas de posiciones";
                    }
                }else{
                    $update="UPDATE champions.Grupos 
                    SET 
                    cantidadPartidos  = ".$fila3['cantidadPartidos'] ."+1,
                    partidosGanados   = ".$fila3['partidosGanados']  .",
                    partidosEmpatados = ".$fila3['partidosEmpatados']."+1,
                    pardidosPerdidos  = ".$fila3['pardidosPerdidos'] .",
                    golesFavor        = ".$fila3['golesFavor']       ."+".$golVisita.",
                    golesContra       = ".$fila3['golesContra']      ."+".$golCasa.",
                    diferenciaGoles   = ".$fila3['diferenciaGoles'] ."+(".$golVisita."-".$golCasa."),
                    puntosEquipo      = ".$fila3['puntosEquipo']     ."+1
                    WHERE (Equipos_idEquipos = ".$fila['Equipos_idEquipos2'].")";

                    $mysqli->query($update);
                    if($update){
                        echo "Se han actualizado la listas de posiciones";
                    }else{
                        echo "No Se han podido actualizar la listas de posiciones";
                    }
                }
                }
            }
        }
    }





?>