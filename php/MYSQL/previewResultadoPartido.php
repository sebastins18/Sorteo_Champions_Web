<?php

$filaS = '<form action="registrarResultado.php" method="POST" >
<br/><br/><table class="formulario" rules="rows">
<tr class="fila__principal ">
<th>Casa</th>
<th>Goles</th>
<th>-</th>
<th>Visita</th>
<th>Goles</th>
<th>Id</th>

</tr>';

$jornada=$_POST['Jornada'];

$query="SELECT E1.nombreEquipo as nom,E2.nombreEquipo as nom2,idPartidos,estadoPartido FROM champions.Partidos  P
inner join champions.Equipos E1 on P.Equipos_idEquipos1=E1.idEquipos
inner join champions.Equipos E2 on P.Equipos_idEquipos2=E2.idEquipos
where P.jornadaPartido=$jornada";
echo '<br/><br/><label class="campos">Observando la jornada: '.$jornada.' </label> ';
echo $filaS;
$cont=0;
$consulta=$mysqli->query($query);
    if($consulta->num_rows > 0){
        while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
            if($fila['estadoPartido']==0){
            echo    '<tr class="fila">
                        <th>'.$fila['nom'].'</th>
                        <th><input type="number" name="golCasa'.$fila['idPartidos'].'" min="0"></th>
                        <th>vs</th>
                        <th>'.$fila['nom2'].'</th>
                        <th><input type="number"  name="golVisita'.$fila['idPartidos'].'" min="0"></th>
                        <th><input type="submit" name="boton" value="'.$fila['idPartidos'].'"></th>
                    </tr>';
                    $cont=$cont+1;
            }else{
                echo    '<tr class="fila"">
                        <th>'.$fila['nom'].'</th>
                        <th><input type="number" name="golCasa'.$fila['idPartidos'].'" min="0"></th>
                        <th>vs</th>
                        <th>'.$fila['nom2'].'</th>
                        <th><input type="number"  name="golVisita'.$fila['idPartidos'].'" min="0"></th>
                        <th><input type="button" name="button" value=Registrado></th>
                    </tr>';
            }
        
    }
    echo "</table>
        </form> ";
    }

    


?>