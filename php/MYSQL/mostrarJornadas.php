<?php

$filaS = '<br/><br/><table class="tabla" rules="rows">
<tr class="fila__principal">
<th>Casa</th>
<th>Goles Casa</th>
<th>-</th>
<th>Visita</th>
<th>Goles visita</th>
</tr>';

$jornada=$_POST['Jornada'];

$query="SELECT E1.nombreEquipo as nom,resultadoEquipo1,E2.nombreEquipo as nom2,resultadoEquipo2,estadoPartido
FROM champions.Partidos  P
inner join champions.Equipos E1 on P.Equipos_idEquipos1=E1.idEquipos
inner join champions.Equipos E2 on P.Equipos_idEquipos2=E2.idEquipos
where P.jornadaPartido=$jornada";
echo '<br/><br/><label class="campos">Observando la jornada: '.$jornada.' </label> ';
echo $filaS;
$consulta=$mysqli->query($query);
    if($consulta->num_rows > 0){
        while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
            if($fila['estadoPartido']==0){
            echo    '<tr class="fila">
                        <th>'.$fila['nom'].'</th>
                        <th></th>
                        <th>vs</th>
                        <th>'.$fila['nom2'].'</th>
                        <th></th>
                    </tr>';
            }else{
                echo    '<trclass="fila">
                            <th>'.$fila['nom'].'</th>
                            <th>'.$fila['resultadoEquipo1'].'</th>
                            <th>vs</th>
                            <th>'.$fila['nom2'].'</th>
                            <th>'.$fila['resultadoEquipo2'].'</th>
                    </tr>';
            }                    
        }
        echo "</table>";
    }
?>