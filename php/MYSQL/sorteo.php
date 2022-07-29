<?php    
    $equipos=array();

    $query="SELECT * FROM champions.Equipos where idEquipos between 1 and 8 order by rand()";
    $consulta=$mysqli->query($query);
    if($consulta->num_rows > 0){
        while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
            $equipo = new Equipo($fila['nombreEquipo'],$fila['ligaEquipo'],$fila['idEquipos']);
            array_push($equipos,$equipo);
        }
    }

    $query2="SELECT * FROM champions.Equipos where idEquipos between 9 and 16 order by rand()";
    $consulta2=$mysqli->query($query2);
    if($consulta2->num_rows > 0){
        while($fila2=$consulta2->fetch_array(MYSQLI_ASSOC)){
            $equipo = new Equipo($fila2['nombreEquipo'],$fila2['ligaEquipo'],$fila2['idEquipos']);
            array_push($equipos,$equipo);
        }
    }

    $query3="SELECT * FROM champions.Equipos where idEquipos between 17 and 24 order by rand()";
    $consulta3=$mysqli->query($query3);
    if($consulta3->num_rows > 0){
        while($fila3=$consulta3->fetch_array(MYSQLI_ASSOC)){
            $equipo = new Equipo($fila3['nombreEquipo'],$fila3['ligaEquipo'],$fila3['idEquipos']);
            array_push($equipos,$equipo);
        }
    }

    $query4="SELECT * FROM champions.Equipos where idEquipos between 25 and 32 order by rand()";
    $consulta4=$mysqli->query($query4);
    if($consulta4->num_rows > 0){
        while($fila4=$consulta4->fetch_array(MYSQLI_ASSOC)){
            $equipo = new Equipo($fila4['nombreEquipo'],$fila4['ligaEquipo'],$fila4['idEquipos']);
            array_push($equipos,$equipo);
        }
    }
    
    //$arrLength2 = count($equipos[0]);
    echo '<br><br>';

 
    //desordeno el array y lo muestro
    /*$nuevo=shuffle($equipos);
    var_export ($equipos);*/
    $grupoA = array($equipos[0]);
    $grupoB = array($equipos[1]);
    $grupoC = array($equipos[2]);
    $grupoD = array($equipos[3]);
    $grupoE = array($equipos[4]);
    $grupoF = array($equipos[5]);
    $grupoG = array($equipos[6]);
    $grupoH = array($equipos[7]);
    $cont=0;
    
    while($cont < 8 ){
        for($i = 8; $i < 16; $i++){
            if(count($grupoA)==1 && $grupoA[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoA,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoB)==1 && $grupoB[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoB,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoC)==1 && $grupoC[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoC,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoD)==1 && $grupoD[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoD,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoE)==1 && $grupoE[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoE,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoF)==1 && $grupoF[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoF,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoG)==1 && $grupoG[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoG,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoH)==1 && $grupoH[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoH,$equipos[$i]);
                $cont++;
            }   
        }
    }
    $cont=0;
    while($cont < 8 ){
        for($i = 16; $i < 24; $i++){
            if(count($grupoA)==2 && $grupoA[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoA[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoA,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoB)==2 && $grupoB[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoB[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoB,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoC)==2 && $grupoC[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoC[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoC,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoD)==2 && $grupoD[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoD[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoD,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoE)==2 && $grupoE[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoE[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoE,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoF)==2 && $grupoF[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoF[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoF,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoG)==2 && $grupoG[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoG[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoG,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoH)==2 && $grupoH[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoH[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoH,$equipos[$i]);
                $cont++;
            }   
        }
    }
    $cont=0;
    while($cont < 8 ){
        for($i = 24; $i < 32; $i++){
            if(count($grupoA)==3 && $grupoA[2]->get_naciona() != $equipos[$i]->get_naciona() && $grupoA[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoA[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoA,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoB)==3 && $grupoB[2]->get_naciona() != $equipos[$i]->get_naciona() && $grupoB[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoB[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoB,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoC)==3 && $grupoC[2]->get_naciona() != $equipos[$i]->get_naciona() && $grupoC[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoC[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoC,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoD)==3 && $grupoD[2]->get_naciona() != $equipos[$i]->get_naciona() && $grupoD[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoD[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoD,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoE)==3 && $grupoE[2]->get_naciona() != $equipos[$i]->get_naciona() && $grupoE[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoE[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoE,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoF)==3 && $grupoF[2]->get_naciona() != $equipos[$i]->get_naciona() && $grupoF[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoF[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoF,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoG)==3 && $grupoG[2]->get_naciona() != $equipos[$i]->get_naciona() && $grupoG[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoG[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoG,$equipos[$i]);
                $cont++;
            }   
            else if(count($grupoH)==3 && $grupoH[2]->get_naciona() != $equipos[$i]->get_naciona() && $grupoH[1]->get_naciona() != $equipos[$i]->get_naciona() && $grupoH[0]->get_naciona() != $equipos[$i]->get_naciona()){
                array_push($grupoH,$equipos[$i]);
                $cont++;
            }   
        }
    }
    $equipos = array($grupoA,$grupoB,$grupoC,$grupoD,$grupoE,$grupoF,$grupoG,$grupoH);
    
    
    $arrLength2 = count($equipos);
    
    
        
    
    for($i=1;$i<33;$i++){
        
        $mysqli->query($query0="DELETE FROM Grupos WHERE idGrupos='$i'");
    
    }
    $cont=1;
    for($j=0;$j < $arrLength2; $j++){
        switch($j){
        case 0:
            $arrLength = count($equipos[$j]);
            echo 'GRUPO A';
            echo "<br>";
            echo "<br>";
            for($i=0;$i < $arrLength; $i++){
                $insert = $mysqli->query("INSERT into Grupos (idGrupos,letraGrupo,Equipos_idEquipos,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo)
                VALUES ($cont,'A','".$equipos[$j][$i]->get_id()."',0,0,0,0,0,0,0,0)");
                echo "Equipo ".$equipos[$j][$i]->get_name()." a sido agregado";
                echo "<br>";
                $cont++;
            }
            break;
        case 1:
            $arrLength = count($equipos[$j]);
            echo "<br>";
            echo "<br>";
            echo "GRUPO B";
            echo "<br>";
            echo "<br>";
            for($i=0;$i < $arrLength; $i++){
                $insert = $mysqli->query("INSERT into Grupos (idGrupos,letraGrupo,Equipos_idEquipos,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo)
                VALUES ($cont,'B','".$equipos[$j][$i]->get_id()."',0,0,0,0,0,0,0,0)");
                echo "Equipo ".$equipos[$j][$i]->get_name()." a sido agregado";
                echo "<br>";
                $cont++;
            }
            break;
        case 2:
            $arrLength = count($equipos[$j]);
            echo "<br>";
            echo "<br>";
            echo "GRUPO C";
            echo "<br>";
            echo "<br>";
            for($i=0;$i < $arrLength; $i++){
                $insert = $mysqli->query("INSERT into Grupos (idGrupos,letraGrupo,Equipos_idEquipos,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo) 
                VALUES ($cont,'C','".$equipos[$j][$i]->get_id()."',0,0,0,0,0,0,0,0)");
                echo "Equipo ".$equipos[$j][$i]->get_name()." a sido agregado";
                echo "<br>";
                $cont++;
            }
            break;
        case 3:
            $arrLength = count($equipos[$j]);
            echo "<br>";
            echo "<br>";
            echo "GRUPO D";
            echo "<br>";
            echo "<br>";
            for($i=0;$i < $arrLength; $i++){
                $insert = $mysqli->query("INSERT into Grupos (idGrupos,letraGrupo,Equipos_idEquipos,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo) 
                VALUES ($cont,'D','".$equipos[$j][$i]->get_id()."',0,0,0,0,0,0,0,0)");
                echo "Equipo ".$equipos[$j][$i]->get_name()." a sido agregado";
                echo "<br>";
                $cont++;
            }
            break;
        case 4:
            $arrLength = count($equipos[$j]);
            echo "<br>";
            echo "<br>";
            echo "GRUPO E";
            echo "<br>";
            echo "<br>";
            for($i=0;$i < $arrLength; $i++){
                $insert = $mysqli->query("INSERT into Grupos (idGrupos,letraGrupo,Equipos_idEquipos,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo) 
                VALUES ($cont,'E','".$equipos[$j][$i]->get_id()."',0,0,0,0,0,0,0,0)");
                echo "Equipo ".$equipos[$j][$i]->get_name()." a sido agregado";
                echo "<br>";
                $cont++;
            }
            break;
        case 5:
            $arrLength = count($equipos[$j]);
            echo "<br>";
            echo "<br>";
            echo "GRUPO F";
            echo "<br>";
            echo "<br>";
            for($i=0;$i < $arrLength; $i++){
                $insert = $mysqli->query("INSERT into Grupos (idGrupos,letraGrupo,Equipos_idEquipos,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo) 
                VALUES ($cont,'F','".$equipos[$j][$i]->get_id()."',0,0,0,0,0,0,0,0)");
                echo "Equipo ".$equipos[$j][$i]->get_name()." a sido agregado";
                echo "<br>";
                $cont++;
            }
            break;
        case 6:
            $arrLength = count($equipos[$j]);
            echo "<br>";
            echo "<br>";
            echo "GRUPO G";
            echo "<br>";
            echo "<br>";
            for($i=0;$i < $arrLength; $i++){
                $insert = $mysqli->query("INSERT into Grupos (idGrupos,letraGrupo,Equipos_idEquipos,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo) 
                VALUES ($cont,'G','".$equipos[$j][$i]->get_id()."',0,0,0,0,0,0,0,0)");
                echo "Equipo ".$equipos[$j][$i]->get_name()." a sido agregado";
                echo "<br>";
                $cont++;
            }
            break;
        case 7:
            $arrLength = count($equipos[$j]);
            echo "<br>";
            echo "<br>";
            echo "GRUPO H";
            echo "<br>";
            echo "<br>";
            for($i=0;$i < $arrLength; $i++){
                $insert = $mysqli->query("INSERT into Grupos (idGrupos,letraGrupo,Equipos_idEquipos,cantidadPartidos,partidosGanados,partidosEmpatados,pardidosPerdidos,golesFavor,golesContra,diferenciaGoles,puntosEquipo) 
                VALUES ($cont,'H','".$equipos[$j][$i]->get_id()."',0,0,0,0,0,0,0,0)");
                echo "Equipo ".$equipos[$j][$i]->get_name()." a sido agregado";
                echo "<br>";
                $cont++;
            }
            break;
        
        }
            
    }


    
    
?>