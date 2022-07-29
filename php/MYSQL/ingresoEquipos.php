<?php
date_default_timezone_set('America/Costa_Rica');

$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check != false){
        $nombreEquipo=$_POST['nombreEquipo'];
        $ligaPerteneciente=$_POST["ligas"];
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $dataTime = date("Y-m-d H:i:s");
        $Select = $mysqli->query("SELECT ligaEquipo,  count(ligaEquipo) TOTAL FROM champions.Equipos WHERE ligaEquipo='$ligaPerteneciente' group by ligaEquipo having TOTAL >0");
        $Select2 = $mysqli->query("SELECT count(idEquipos) Totales FROM champions.Equipos");

        if($Select2->num_rows > 0){
            while($fila2=$Select2->fetch_array(MYSQLI_ASSOC)){
                if($fila2['Totales'] < 32){
        if($Select->num_rows > 0){
            while($fila1=$Select->fetch_array(MYSQLI_ASSOC)){
                if($fila1['TOTAL'] < 4){
                $Insert = $mysqli->query("INSERT into Equipos (nombreEquipo,ligaEquipo,image, created) VALUES ('$nombreEquipo', '$ligaPerteneciente','$imgContent', '$dataTime')");
                    if($Insert){
                        ?>
                        <br/><br/>
                        <?php
                        echo "Equipo ingresado";
                    }else{
                    ?>
                        <br/><br/>
                        <?php
                        echo "Fallo al subir el equipo";
                    }
                }else{
                    ?>
                        <br/><br/>
                        <?php
                    echo "No pueden participar más de 4 equipos por liga";
                }
            }
            } else if($Select->num_rows == 0){
                $Insert = $mysqli->query("INSERT into Equipos (nombreEquipo,ligaEquipo,image, created) VALUES ('$nombreEquipo', '$ligaPerteneciente','$imgContent', '$dataTime')");
                    if($Insert){
                        ?>
                        <br/><br/>
                        <?php
                        echo "Equipo ingresado";
                    }else{
                    ?>
                        <br/><br/>
                        <?php
                        echo "Fallo al subir el equipo";
                    }
            }
        }else{
            ?>
            <br/><br/>
            <?php
        echo "No pueden participar más de 32 equipos";
        }
        }
    } 
    }
?>