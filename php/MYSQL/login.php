/<?php
	$correo=$_POST['email'];
	$clave=md5($_POST['clave']);
	$query="SELECT * FROM Administrador WHERE correoAdministrador='$correo' AND claveAdministrador='$clave'";
	//echo $query;
	$consulta2=$mysqli->query($query);
	if($consulta2->num_rows>=1){
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		session_start();

		$_SESSION['username']=$fila['nombreAdministrador'];
		$_SESSION['loggedin']=true;
		$_SESSION['start'] = time();
    	$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
		
            header("Location: ../../html/Admin/indexAdmin.php ");

	}else{
		echo "Los datos son incorrectos";
	}
?>	