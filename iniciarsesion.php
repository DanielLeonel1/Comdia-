<?php
include("conexion.php");

//-------------------------------------------------//
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//------------------------------------------------//


$email=(isset($_POST['email']) and trim($_POST['email'])!="")? $_POST['email']:"";
$contra=(isset($_POST['contra']) and trim($_POST['contra'])!="")? $_POST['contra']:"";
$contra2=(isset($_POST['contra']) and trim($_POST['contra'])!="")? $_POST['contra']:"";
$contra =hash('sha512',$contra2);



//echo($email);
$insertar="INSERT INTO iniciar_sesion (email,password, estatus)VALUES('$email','$contra', 'A' )";


//--------------------ENVIA NOTIFICACIÓN (EL EVENTO)-----------------------//
$mail = new PHPMailer;
try{
$mail->isSMTP();                                      // Indicamos que use SMTP
$mail->Host = 'smtp.gmail.com';                       // Indicamos los servidores SMTP
$mail->SMTPAuth = true;                               // Habilitamos la autenticación SMTP
$mail->Username = 'comdia.01@gmail.com';           // SMTP username
$mail->Password = 'Comdi@01';                       // SMTP password
$mail->SMTPSecure = 'tls';                            // Habilitar encriptación TLS o SSL
$mail->Port = 587;  


/* Configurar cabeceras del mensaje */
$mail->From = $email;                       // Correo del remitente
$mail->FromName = 'ComDia';           // Nombre del remitente
$mail->Subject = 'Gracias por preferir ComDia';   


$mail->addAddress($email, 'ComDia');

$mail->isHTML(true);
$mail->Body    = 'Te damos la más cordial bienvenida a ComDia';

$mail->setLanguage('es');

/* Enviar mensaje... */
$mail->send();
    echo 'EL MENSAJE FUE ENVIADO';
} catch (Exception $e) {
    echo "EL MENSAJE NO PUEDE SER ENVIADO ERROR: {$mail->ErrorInfo}";
}
//---------------TERMINA EL CODIGO PARA EL ENVIO DEL EVENTO----------------//






    $consulta=$conne->query($insertar);
?>