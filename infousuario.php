<?php
include("conexion.php");
$tipo_diabetes=(isset($_POST['tipo_diabetes']) and trim($_POST['tipo_diabetes'])!="")? $_POST['tipo_diabetes']:"";
$edad=(isset($_POST['edad']) and trim($_POST['edad'])!="")? $_POST['edad']:"";
$peso=(isset($_POST['peso']) and trim($_POST['peso'])!="")? $_POST['peso']:"";
$estatura=(isset($_POST['estatura']) and trim($_POST['estatura'])!="")? $_POST['estatura']:"";
$email=(isset($_POST['correo']) and trim($_POST['correo'])!="")? $_POST['correo']:"";
$sql="SELECT * FROM iniciar_sesion WHERE email='$email'";
$consulta2=$conne->query($sql);
//echo $sql;
 if ($row = $consulta2->fetch()){
      
      $id_inicio          =$row["ID"];
    }
session_start();
		$_SESSION['correo'] = $email;
		$_SESSION['id'] = $id_inicio;
$insertar="INSERT INTO usuario (id_tipo_diabetes,edad,peso,estatura,id_inicio)VALUES('$tipo_diabetes','$edad','$peso','$estatura','$id_inicio')";
echo $insertar;
    $consulta=$conne->query($insertar);
      
        header('Location:./menu_P.php');
?>



