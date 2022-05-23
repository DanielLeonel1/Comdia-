<?php
include("conexion.php");

$email=(isset($_POST['email']) and trim($_POST['email'])!="")? $_POST['email']:"";
#$contra=(isset($_POST['contra']) and trim($_POST['contra'])!="")? $_POST['contra']:"";
$contra2=$_POST['contra'];
$contra =hash('sha512',$contra2);



//echo($email);
$insertar="select * from iniciar_sesion where email='$email' and password='$contra'";
//echo($insertar);
    $consulta=$conne->query($insertar);
    if ($rows = $consulta->fetch()){
    	session_start();
		$_SESSION['correo'] = $email;
		$_SESSION['id'] = $rows['ID'];
    	header("location:menu_P.php");
    }
    else{
      header("location:login.php?value=Esta mal la contraseña...");
    }
?>