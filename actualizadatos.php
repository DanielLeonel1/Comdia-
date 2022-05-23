<?php
include("conexion.php");
session_start();
$tipo_diabetes=(isset($_POST['tipo_diabetes']) and trim($_POST['tipo_diabetes'])!="")? $_POST['tipo_diabetes']:"";
$edad=(isset($_POST['edad']) and trim($_POST['edad'])!="")? $_POST['edad']:"";
$peso=(isset($_POST['peso']) and trim($_POST['peso'])!="")? $_POST['peso']:"";
$estatura=(isset($_POST['estatura']) and trim($_POST['estatura'])!="")? $_POST['estatura']:"";
/*$email=(isset($_POST['correo']) and trim($_POST['correo'])!="")? $_POST['correo']:"";
$sql="SELECT * FROM iniciar_sesion WHERE email='$email'";
$consulta2=$conne->query($sql);
echo $email;
 if ($row = $consulta2->fetch()){
      
      $id_inicio          =$row["ID"];
    }
echo $sql;*/
		
		$id_inicio=$_SESSION['id'];
//$insertar="INSERT INTO usuario (id_tipo_diabetes,edad,peso,estatura,id_inicio)VALUES('$tipo_diabetes','$edad','$peso','$estatura','$id_inicio')";
$insertar="UPDATE usuario SET id_tipo_diabetes = '$tipo_diabetes', edad = '$edad', peso='$peso', estatura='$estatura' WHERE id_inicio ='$id_inicio'";
    $consulta=$conne->query($insertar);
      
        header('Location:./menu.php');
?>



