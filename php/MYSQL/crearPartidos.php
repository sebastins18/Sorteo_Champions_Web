<?php
///----------------------Grupo A----------------------///
$grupoA=array();
$query1="SELECT * FROM champions.Grupos WHERE letraGrupo='A'";
$consulta1=$mysqli->query($query1);
if($consulta1->num_rows > 0){
    while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
        $equipo = $fila1['Equipos_idEquipos'];
        array_push($grupoA,$equipo);
    }
}

///----------------------Grupo B----------------------///
$grupoB=array();
$query2="SELECT * FROM champions.Grupos WHERE letraGrupo='B'";
$consulta2=$mysqli->query($query2);
if($consulta2->num_rows > 0){
    while($fila2=$consulta2->fetch_array(MYSQLI_ASSOC)){
        $equipo = $fila2['Equipos_idEquipos'];
        array_push($grupoB,$equipo);
    }
}

///----------------------Grupo C----------------------///
$grupoC=array();
$query3="SELECT * FROM champions.Grupos WHERE letraGrupo='C'";
$consulta3=$mysqli->query($query3);
if($consulta3->num_rows > 0){
    while($fila3=$consulta3->fetch_array(MYSQLI_ASSOC)){
        $equipo = $fila3['Equipos_idEquipos'];
        array_push($grupoC,$equipo);
    }
}

///----------------------Grupo D----------------------///
$grupoD=array();
$query4="SELECT * FROM champions.Grupos WHERE letraGrupo='D'";
$consulta4=$mysqli->query($query4);
if($consulta4->num_rows > 0){
    while($fila4=$consulta4->fetch_array(MYSQLI_ASSOC)){
        $equipo = $fila4['Equipos_idEquipos'];
        array_push($grupoD,$equipo);
    }
}

///----------------------Grupo E----------------------///
$grupoE=array();
$query5="SELECT * FROM champions.Grupos WHERE letraGrupo='E'";
$consulta5=$mysqli->query($query5);
if($consulta5->num_rows > 0){
    while($fila5=$consulta5->fetch_array(MYSQLI_ASSOC)){
        $equipo = $fila5['Equipos_idEquipos'];
        array_push($grupoE,$equipo);
    }
}

///----------------------Grupo F----------------------///
$grupoF=array();
$query6="SELECT * FROM champions.Grupos WHERE letraGrupo='F'";
$consulta6=$mysqli->query($query6);
if($consulta6->num_rows > 0){
    while($fila6=$consulta6->fetch_array(MYSQLI_ASSOC)){
        $equipo = $fila6['Equipos_idEquipos'];
        array_push($grupoF,$equipo);
    }
}

///----------------------Grupo G----------------------///
$grupoG=array();
$query7="SELECT * FROM champions.Grupos WHERE letraGrupo='G'";
$consulta7=$mysqli->query($query7);
if($consulta7->num_rows > 0){
    while($fila7=$consulta7->fetch_array(MYSQLI_ASSOC)){
        $equipo = $fila7['Equipos_idEquipos'];
        array_push($grupoG,$equipo);
    }
}

///----------------------Grupo H----------------------///
$grupoH=array();
$query8="SELECT * FROM champions.Grupos WHERE letraGrupo='H'";
$consulta8=$mysqli->query($query8);
if($consulta8->num_rows > 0){
    while($fila8=$consulta8->fetch_array(MYSQLI_ASSOC)){
        $equipo = $fila8['Equipos_idEquipos'];
        array_push($grupoH,$equipo);
    }
}

for($i=1;$i<97;$i++){ 
    $mysqli->query($query0="DELETE FROM Partidos WHERE idPartidos='$i'");
}

///----------------------Jornada 1----------------------///

///----------------------Grupo A----------------------///
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('1','1','".$grupoA[0]."','".$grupoA[1]."',false)");
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('2','1','".$grupoA[2]."','".$grupoA[3]."',false)");

///----------------------Grupo B----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('3','1','".$grupoB[0]."','".$grupoB[1]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('4','1','".$grupoB[2]."','".$grupoB[3]."',false)");

///----------------------Grupo C----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('5','1','".$grupoC[0]."','".$grupoC[1]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('6','1','".$grupoC[2]."','".$grupoC[3]."',false)");

///----------------------Grupo D----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('7','1','".$grupoD[0]."','".$grupoD[1]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('8','1','".$grupoD[2]."','".$grupoD[3]."',false)");

///----------------------Grupo E----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('9','1','".$grupoE[0]."','".$grupoE[1]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('10','1','".$grupoE[2]."','".$grupoE[3]."',false)");

///----------------------Grupo F----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('11','1','".$grupoF[0]."','".$grupoF[1]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('12','1','".$grupoF[2]."','".$grupoF[3]."',false)");

///----------------------Grupo G----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('13','1','".$grupoG[0]."','".$grupoG[1]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('14','1','".$grupoG[2]."','".$grupoG[3]."',false)");

///----------------------Grupo H----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('15','1','".$grupoH[0]."','".$grupoH[1]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('16','1','".$grupoH[2]."','".$grupoH[3]."',false)");

echo "<br>";
echo "<br>";
echo "Los partido de la jornada 1 se han creado correctamente";
echo "<br>";
echo "<br>";
///----------------------Fin Jornada 1----------------------///

///----------------------Jornada 2----------------------///

///----------------------Grupo A----------------------///
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('17','2','".$grupoA[0]."','".$grupoA[2]."',false)");
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('18','2','".$grupoA[1]."','".$grupoA[3]."',false)");

///----------------------Grupo B----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('19','2','".$grupoB[0]."','".$grupoB[2]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('20','2','".$grupoB[1]."','".$grupoB[3]."',false)");

///----------------------Grupo C----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('21','2','".$grupoC[0]."','".$grupoC[2]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('22','2','".$grupoC[1]."','".$grupoC[3]."',false)");

///----------------------Grupo D----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('23','2','".$grupoD[0]."','".$grupoD[2]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('24','2','".$grupoD[1]."','".$grupoD[3]."',false)");

///----------------------Grupo E----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('25','2','".$grupoE[0]."','".$grupoE[2]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('26','2','".$grupoE[1]."','".$grupoE[3]."',false)");

///----------------------Grupo F----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('27','2','".$grupoF[0]."','".$grupoF[2]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('28','2','".$grupoF[1]."','".$grupoF[3]."',false)");

///----------------------Grupo G----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('29','2','".$grupoG[0]."','".$grupoG[2]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('30','2','".$grupoG[1]."','".$grupoG[3]."',false)");

///----------------------Grupo H----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('31','2','".$grupoH[0]."','".$grupoH[2]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('32','2','".$grupoH[1]."','".$grupoH[3]."',false)");

echo "<br>";
echo "<br>";
echo "Los partido de la jornada 2 se han creado correctamente";
echo "<br>";
echo "<br>";
///----------------------Fin Jornada 2----------------------///

///----------------------Jornada 3----------------------///

///----------------------Grupo A----------------------///
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('33','3','".$grupoA[0]."','".$grupoA[3]."',false)");
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('34','3','".$grupoA[1]."','".$grupoA[2]."',false)");

///----------------------Grupo B----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('35','3','".$grupoB[0]."','".$grupoB[3]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('36','3','".$grupoB[1]."','".$grupoB[2]."',false)");

///----------------------Grupo C----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('37','3','".$grupoC[0]."','".$grupoC[3]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('38','3','".$grupoC[1]."','".$grupoC[2]."',false)");

///----------------------Grupo D----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('39','3','".$grupoD[0]."','".$grupoD[3]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('40','3','".$grupoD[1]."','".$grupoD[2]."',false)");

///----------------------Grupo E----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('41','3','".$grupoE[0]."','".$grupoE[3]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('42','3','".$grupoE[1]."','".$grupoE[2]."',false)");

///----------------------Grupo F----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('43','3','".$grupoF[0]."','".$grupoF[3]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('44','3','".$grupoF[1]."','".$grupoF[2]."',false)");

///----------------------Grupo G----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('45','3','".$grupoG[0]."','".$grupoG[3]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('46','3','".$grupoG[1]."','".$grupoG[2]."',false)");

///----------------------Grupo H----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('47','3','".$grupoH[0]."','".$grupoH[3]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('48','3','".$grupoH[1]."','".$grupoH[2]."',false)");

echo "<br>";
echo "<br>";
echo "Los partido de la jornada 3 se han creado correctamente";
echo "<br>";
echo "<br>";
///----------------------Fin Jornada 3----------------------///

///----------------------Jornada 4----------------------///

///----------------------Grupo A----------------------///
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('49','4','".$grupoA[1]."','".$grupoA[0]."',false)");
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('50','4','".$grupoA[3]."','".$grupoA[2]."',false)");

///----------------------Grupo B----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('51','4','".$grupoB[1]."','".$grupoB[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('52','4','".$grupoB[3]."','".$grupoB[2]."',false)");

///----------------------Grupo C----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('53','4','".$grupoC[1]."','".$grupoC[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('54','4','".$grupoC[3]."','".$grupoC[2]."',false)");

///----------------------Grupo D----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('55','4','".$grupoD[1]."','".$grupoD[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('56','4','".$grupoD[3]."','".$grupoD[2]."',false)");

///----------------------Grupo E----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('57','4','".$grupoE[1]."','".$grupoE[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('58','4','".$grupoE[3]."','".$grupoE[2]."',false)");

///----------------------Grupo F----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('59','4','".$grupoF[1]."','".$grupoF[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('60','4','".$grupoF[3]."','".$grupoF[2]."',false)");

///----------------------Grupo G----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('61','4','".$grupoG[1]."','".$grupoG[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('62','4','".$grupoG[3]."','".$grupoG[2]."',false)");

///----------------------Grupo H----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('63','4','".$grupoH[1]."','".$grupoH[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('64','4','".$grupoH[3]."','".$grupoH[2]."',false)");


///----------------------Fin Jornada 4----------------------///

///----------------------Jornada 5----------------------///

///----------------------Grupo A----------------------///
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('65','5','".$grupoA[2]."','".$grupoA[0]."',false)");
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('66','5','".$grupoA[3]."','".$grupoA[1]."',false)");

///----------------------Grupo B----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('67','5','".$grupoB[2]."','".$grupoB[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('68','5','".$grupoB[3]."','".$grupoB[1]."',false)");

///----------------------Grupo C----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('69','5','".$grupoC[2]."','".$grupoC[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('70','5','".$grupoC[3]."','".$grupoC[1]."',false)");

///----------------------Grupo D----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('71','5','".$grupoD[2]."','".$grupoD[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('72','5','".$grupoD[3]."','".$grupoD[1]."',false)");

///----------------------Grupo E----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('73','5','".$grupoE[2]."','".$grupoE[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('74','5','".$grupoE[3]."','".$grupoE[1]."',false)");

///----------------------Grupo F----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('75','5','".$grupoF[2]."','".$grupoF[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('76','5','".$grupoF[3]."','".$grupoF[1]."',false)");

///----------------------Grupo G----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('77','5','".$grupoG[2]."','".$grupoG[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('78','5','".$grupoG[3]."','".$grupoG[1]."',false)");

///----------------------Grupo H----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('79','5','".$grupoH[2]."','".$grupoH[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('80','5','".$grupoH[3]."','".$grupoH[1]."',false)");

echo "<br>";
echo "<br>";
echo "Los partido de la jornada 5 se han creado correctamente";
echo "<br>";
echo "<br>";
///----------------------Fin Jornada 5----------------------///

///----------------------Jornada 6----------------------///

///----------------------Grupo A----------------------///
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('81','6','".$grupoA[3]."','".$grupoA[0]."',false)");
$insert = $mysqli->query("INSERT into Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('82','6','".$grupoA[2]."','".$grupoA[1]."',false)");

///----------------------Grupo B----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('83','6','".$grupoB[3]."','".$grupoB[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('84','6','".$grupoB[2]."','".$grupoB[1]."',false)");

///----------------------Grupo C----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('85','6','".$grupoC[3]."','".$grupoC[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('86','6','".$grupoC[2]."','".$grupoC[1]."',false)");

///----------------------Grupo D----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('87','6','".$grupoD[3]."','".$grupoD[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('88','6','".$grupoD[2]."','".$grupoD[1]."',false)");

///----------------------Grupo E----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('89','6','".$grupoE[3]."','".$grupoE[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('90','6','".$grupoE[2]."','".$grupoE[1]."',false)");

///----------------------Grupo F----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('91','6','".$grupoF[3]."','".$grupoF[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('92','6','".$grupoF[2]."','".$grupoF[1]."',false)");

///----------------------Grupo G----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('93','6','".$grupoG[3]."','".$grupoG[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('94','6','".$grupoG[2]."','".$grupoG[1]."',false)");

///----------------------Grupo H----------------------///
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('95','6','".$grupoH[3]."','".$grupoH[0]."',false)");
$insert = $mysqli->query("INSERT INTO Partidos (idPartidos,jornadaPartido,Equipos_idEquipos1,Equipos_idEquipos2,estadoPartido) VALUES ('96','6','".$grupoH[2]."','".$grupoH[1]."',false)");

echo "<br>";
echo "<br>";
echo "Los partido de la jornada 6 se han creado correctamente";
echo "<br>";
echo "<br>";
///----------------------Fin Jornada 6----------------------///
?>