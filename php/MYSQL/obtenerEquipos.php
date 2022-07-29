<?php

$Select = $mysqli->query("SELECT nombreEquipo FROM champions.Equipos;");


if($Select->num_rows > 0){
    echo "<select name=equipos id=idEquipo>";
    while($fila2=$Select->fetch_array(MYSQLI_ASSOC)){
        echo '<option value= "'.$fila2['nombreEquipo'].'">   '.$fila2['nombreEquipo'].'</option>';
    }
    echo "</select>";
}







?>