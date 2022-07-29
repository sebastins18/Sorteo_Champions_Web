<?php
        
     $filaS = '<tr class="fila__principal">
                                <th class= "nombre-club">Club</th>
                                <th class= "dato">PJ</th>
                                <th class= "dato">G</th>
                                <th class= "dato">E</th>
                                <th class= "dato">P</th>
                                <th class= "dato">GF</th>
                                <th class= "dato">GC</th>
                                <th class= "dato">DG</th>
                                <th class= "dato">Pts</th>
                            </tr>';

    $query="SELECT idGrupos,letraGrupo,nombreEquipo,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo
FROM champions.Grupos inner join champions.Equipos on Equipos_idEquipos=idEquipos ORDER BY letraGrupo, diferenciaGoles DESC, puntosEquipo DESC";
    $consulta=$mysqli->query($query);
    if($consulta->num_rows > 0){
        echo '<div class="grid">';
        $cont=0;
        while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
            $cont++;    
            switch ($cont) {
                case 1:
                    echo    '<div class="grupo">
                            <h2 class="grupo-nombre">Grupo A</h2>
                            <table class="tabla" rules="rows">';

                    echo $filaS;
                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
                case 5:
                    echo '</table>
                            </div>';

                    echo    '<div class="grupo">
                            <h2 class="grupo-nombre">Grupo B</h2>
                            <table class="tabla" rules="rows">';

                    echo $filaS;
                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
                case 9:
                    echo '</table>
                            </div>';

                    echo    '<div class="grupo">
                            <h2 class="grupo-nombre">Grupo C</h2>
                            <table class="tabla" rules="rows">';

                    echo $filaS;

                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
                case 13:
                    echo '</table>
                            </div>';

                    echo    '<div class="grupo">
                            <h2 class="grupo-nombre">Grupo D</h2>
                            <table class="tabla" rules="rows">';

                    echo $filaS;

                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
                case 17:
                    echo '</table>
                            </div>';

                    echo    '<div class="grupo">
                            <h2 class="grupo-nombre">Grupo E</h2>
                            <table class="tabla" rules="rows">';

                    echo $filaS;

                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
                case 21:
                    echo '</table>
                            </div>';

                    echo    '<div class="grupo">
                            <h2 class="grupo-nombre">Grupo F</h2>
                            <table class="tabla" rules="rows">';

                    echo $filaS;

                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
                case 25:
                    echo '</table>
                            </div>';

                    echo    '<div class="grupo">
                            <h2 class="grupo-nombre">Grupo G</h2>
                            <table class="tabla" rules="rows">';

                    echo $filaS;

                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
                case 29:
                    echo '</table>
                            </div>';

                    echo    '<div class="grupo">
                            <h2 class="grupo-nombre">Grupo H</h2>
                            <table class="tabla" rules="rows">';

                    echo $filaS;
                    
                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
                
                default:
                    echo    '<tr class="fila">
                                <th>'.$fila['nombreEquipo'].'</th>
                                <th>'.$fila['cantidadPartidos'].'</th>
                                <th>'.$fila['partidosGanados'].'</th>
                                <th>'.$fila['partidosEmpatados'].'</th>
                                <th>'.$fila['pardidosPerdidos'].'</th>
                                <th>'.$fila['golesFavor'].'</th>
                                <th>'.$fila['golesContra'].'</th>
                                <th>'.$fila['diferenciaGoles'].'</th>
                                <th>'.$fila['puntosEquipo'].'</th>
                            </tr>';
                    break;
            }echo '</div>';

            
        }
    }
    
    


    

    
?>