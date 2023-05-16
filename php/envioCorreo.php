<?php

$correo=$_POST['correoUsuario'];
$nombre=$_POST['nombreUsuario'];
$nombreEquipo=$_POST['equipos'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../email/vendor/autoload.php';

$mail=new PHPMailer(true);

try{
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->SMTPSecure = "ssl";
    $mail->Host='smtp.gmail.com';
    $mail->Port=465;
    $mail->Username='sebastins08@gmail.com';
    $mail->Password='';


    $mail->SetFrom('sebastins08@gmail.com','Sebastian');
    $mail->AddAddress($correo,$nombre);
    $mail->Subject='Equipo';
    $mail->Body='El equipo:'.$nombreEquipo. ' esta participando';
    $mail->Send();

    echo "correo enviado";
    
}catch(Exception $e){
    echo 'Mensaje ' ,$mail->ErrorInfo;
}












?>
