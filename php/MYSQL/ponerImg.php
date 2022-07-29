<?php

$result = $mysqli->query("SELECT image,nombreEquipo FROM champions.Equipos");
$contador=1;



if($result->num_rows > 0){
    while($fila=$result->fetch_array(MYSQLI_ASSOC)){
        if($contador==1){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
        <div>
        <h2 class="titulo-principal">Bombo 1</h2>    
        <div class="vaso">
            
            <div class="bombo">
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==2){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                    </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==3){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==4){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
                
                    <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==5){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                    </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==6){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==7){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                <?php echo base64_encode($fila['image']); ?>
                ">
            </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==8){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            </div>
        </div>
        </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==9){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
        <div>
        <h2 class="titulo-principal">Bombo 2</h2>    
        <div class="vaso">
            
            <div class="bombo">
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>

            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==10){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                    </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==11){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==12){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
                
                    <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==13){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                    </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==14){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==15){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                <?php echo base64_encode($fila['image']); ?>
                ">
            </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==16){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            </div>
        </div>
        </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        } else if($contador==17){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
        <div>
        <h2 class="titulo-principal">Bombo 3</h2>    
        <div class="vaso">
            
            <div class="bombo">
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==18){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                    </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==19){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==20){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
                
                    <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==21){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                    </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==22){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==23){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                <?php echo base64_encode($fila['image']); ?>
                ">
            </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==24){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            </div>
        </div>
        </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        } else if($contador==25){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
        <div>
        <h2 class="titulo-principal">Bombo 4</h2>
        <div class="vaso">
            
            <div class="bombo">
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==26){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                    </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==27){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==28){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
                
                    <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==29){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                    </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==30){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==31){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            
                <div class="circulo">
                <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                <?php echo base64_encode($fila['image']); ?>
                ">
            </div>
            <!--Fin-->
            <?php
            $contador=$contador+1;
            //------------------------Fin------------------------//
        }else if($contador==32){
            //------------------------Inicio------------------------//
            ?>
            <!--Html-->
            

                <div class="circulo">
                    <img title=<?php echo $fila['nombreEquipo']?> class="circulo_logo" src="data:image/png;base64,
                    <?php echo base64_encode($fila['image']); ?>
                    ">
                </div>
            </div>
            </div>
            <!--Fin-->
            <?php
            //------------------------Fin------------------------//
        }
    }
}
?>

