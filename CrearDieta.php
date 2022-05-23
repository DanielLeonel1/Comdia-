<?php
session_start();
$Usuario=$_SESSION['correo'];
$idUser=$_SESSION['id'];
   ?>
   <?php 
$fecha=date("Y-m-d");
include 'conexion.php';
$indice=0;
    $CarnesClass=NULL;
    $sql="SELECT * FROM carnes";
    $consulta=$conne->query($sql);
    while ($row = $consulta->fetch()){
      $CarnesClass[$indice]              =new stdClass;
      $CarnesClass[$indice]->ID          =$row["ID_CARNES"];
      $CarnesClass[$indice]->Energia          =$row["Energia"];
      $CarnesClass[$indice]->Lipidos          =$row["Lipidos"];
      $CarnesClass[$indice]->Carbohidratos =$row["Carbohidratos"];
      $CarnesClass[$indice]->Proteinas          =$row["Proteinas"];
      $CarnesClass[$indice]->Fibra =$row["Fibra"];
      $CarnesClass[$indice]->Colesterol =$row["Colesterol"];
      $indice++;
    }
    $indice2=0;
    $FrutasClass=NULL;
    $sql2="SELECT * FROM frutas";
    $consulta2=$conne->query($sql2);
    while ($row = $consulta2->fetch()){
      $FrutasClass[$indice2]              =new stdClass;
      $FrutasClass[$indice2]->ID          =$row["ID_FRUTAS"];
      $FrutasClass[$indice2]->Energia          =$row["Energia"];
      $FrutasClass[$indice2]->Lipidos          =$row["Lipidos"];
      $FrutasClass[$indice2]->Carbohidratos =$row["Carbohidratos"];
      $FrutasClass[$indice2]->Proteinas          =$row["Proteinas"];
      $FrutasClass[$indice2]->Fibra =$row["Fibra"];
      $FrutasClass[$indice2]->Colesterol =$row["Colesterol"];
      $indice2++;
    }
    $indice3=0;
    $VerdurasClass=NULL;
     $sql3="SELECT * FROM verduras";
    $consulta3=$conne->query($sql3);
    while ($row = $consulta3->fetch()){
      $VerdurasClass[$indice3]              =new stdClass;
      $VerdurasClass[$indice3]->ID          =$row["ID_VERDURAS"];
      $VerdurasClass[$indice3]->Energia          =$row["Energia"];
      $VerdurasClass[$indice3]->Lipidos          =$row["Lipidos"];
      $VerdurasClass[$indice3]->Carbohidratos =$row["Carbohidratos"];
      $VerdurasClass[$indice3]->Proteinas          =$row["Proteinas"];
      $VerdurasClass[$indice3]->Fibra =$row["Fibra"];
      $VerdurasClass[$indice3]->Colesterol =$row["Colesterol"];
      $indice3++;
    }
    $indice4=0;
    $CerealClass=NULL;
    $sql4="SELECT * FROM cereales";
    $consulta4=$conne->query($sql4);
    while ($row = $consulta4->fetch()){
      $CerealClass[$indice4]              =new stdClass;
      $CerealClass[$indice4]->ID          =$row["ID_CEREALES"];
      $CerealClass[$indice4]->Energia          =$row["Energia"];
      $CerealClass[$indice4]->Lipidos          =$row["Lipidos"];
      $CerealClass[$indice4]->Carbohidratos =$row["Carbohidratos"];
      $CerealClass[$indice4]->Proteinas          =$row["Proteinas"];
      $CerealClass[$indice4]->Fibra =$row["Fibra"];
      $CerealClass[$indice4]->Colesterol =$row["Colesterol"];
      $indice4++;
    }
    $indice5=0;
    $LeguminosasClass=NULL;
    $sql5="SELECT * FROM leguminosas";
    $consulta5=$conne->query($sql5);
    while ($row = $consulta5->fetch()){
      $LeguminosasClass[$indice5]              =new stdClass;
      $LeguminosasClass[$indice5]->ID          =$row["ID_LEGUMINOSAS"];
      $LeguminosasClass[$indice5]->Energia          =$row["Energia"];
      $LeguminosasClass[$indice5]->Lipidos          =$row["Lipidos"];
      $LeguminosasClass[$indice5]->Carbohidratos =$row["Carbohidratos"];
      $LeguminosasClass[$indice5]->Proteinas          =$row["Proteinas"];
      $LeguminosasClass[$indice5]->Fibra =$row["Fibra"];
      $LeguminosasClass[$indice5]->Colesterol =$row["Colesterol"];
      $indice5++;
    }
    $indice6=0;
    $GrasaSinProteinasClass=NULL;
    $sql6="SELECT * FROM  grasasinp";
    $consulta6=$conne->query($sql6);
    while ($row = $consulta6->fetch()){
      $GrasaSinProteinasClass[$indice6]              =new stdClass;
      $GrasaSinProteinasClass[$indice6]->ID          =$row["ID_GRASASINP"];
      $GrasaSinProteinasClass[$indice6]->Energia          =$row["Energia"];
      $GrasaSinProteinasClass[$indice6]->Lipidos          =$row["Lipidos"];
      $GrasaSinProteinasClass[$indice6]->Carbohidratos =$row["Carbohidratos"];
      $GrasaSinProteinasClass[$indice6]->Proteinas          =$row["Proteinas"];
      $GrasaSinProteinasClass[$indice6]->Fibra =$row["Fibra"];
      $GrasaSinProteinasClass[$indice6]->Colesterol =$row["Colesterol"];
      $indice6++;
    }
    $indice7=0; 
    $GrasaConProteinasClass=NULL;
    $sql7="SELECT * FROM  grasaconp";
    $consulta7=$conne->query($sql7);
    while ($row = $consulta7->fetch()){
      $GrasaConProteinasClass[$indice7]              =new stdClass;
      $GrasaConProteinasClass[$indice7]->ID          =$row["ID_GRASACONP"];

      $GrasaConProteinasClass[$indice7]->Energia          =$row["Energia"];
      $GrasaConProteinasClass[$indice7]->Lipidos          =$row["Lipidos"];
      $GrasaConProteinasClass[$indice7]->Carbohidratos =$row["Carbohidratos"];
      $GrasaConProteinasClass[$indice7]->Proteinas          =$row["Proteinas"];
      $GrasaConProteinasClass[$indice7]->Fibra =$row["Fibra"];
      $GrasaConProteinasClass[$indice7]->Colesterol =$row["Colesterol"];
      $indice7++;
    }
    $indice8=0;
    $LechesClass=NULL;
    $sql8="SELECT * FROM  leche";
    $consulta8=$conne->query($sql8);
    while ($row = $consulta8->fetch()){
      $LechesClass[$indice8]              =new stdClass;
      $LechesClass[$indice8]->ID          =$row["ID_LECHE"];
      $LechesClass[$indice8]->Energia          =$row["Energia"];      
      $LechesClass[$indice8]->Lipidos          =$row["Lipidos"];
      $LechesClass[$indice8]->Carbohidratos =$row["Carbohidratos"];
      $LechesClass[$indice8]->Proteinas          =$row["Proteinas"];
      $LechesClass[$indice8]->Fibra =$row["Fibra"];
      $LechesClass[$indice8]->Colesterol =$row["Colesterol"];
      $indice8++;
    }
?>
   <!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>ComDia</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="icon" href="../img/ComDia.png" sizes="16x16" type="image/png">
       <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="css/estilos.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
<body  style="padding-top: 58px" class="bg-warning" background="../img/fondo.jpeg">
        </br>
    <nav class="navbar navbar-expand-lg navbar-success bg-light fixed-top">
         <!--a class="navbar-brand" href="">Inicio</a-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alimentos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link dropdown-toggle text-secondary" href="#" id="submenu1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tipos De Alimentos</a>
            <div class="dropdown-menu" aria-labelledby="submenu1">
              <a class="dropdown-item" href="verduras.php">Verduras</a>
              <a class="dropdown-item" href="leche.php">Leche</a>
              <a class="dropdown-item" href="leguminosas.php?">Leguminosas</a>
              <a class="dropdown-item" href="frutas.php">Frutas</a>
              <a class="dropdown-item" href="cerealesSin.php">Cereales sin grasas</a>
              <a class="dropdown-item" href="Grasas.php">Grasas sin proteínas</a>
              <a class="dropdown-item" href="carne.php">Alimentos de origen animal</a>
              <a class="dropdown-item" href="grasasCon.php">Grasas con proteínas</a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="UsuarioMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Glucosa
          </a>
          <div class="dropdown-menu" aria-labelledby="UsuarioMenu">
            <a class="dropdown-item" href="Glucosa.php">Añadir Glucosa</a>
            <a class="dropdown-item" href="consultaglucosa.php">Consultar Glucosa</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="MenuCatalago" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Alimentos Registrados
          </a>
          <div class="dropdown-menu" aria-labelledby="MenuCatalago">
            <a class="nav-link dropdown-toggle text-secondary" href="#" id="Submenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tipo</a>
            <div class="dropdown-menu" aria-labelledby="Submenu2">
              <a class="dropdown-item" href="desayuno.php">Desayuno</a>
              <a class="dropdown-item" href="comida.php">Comida</a>
              <a class="dropdown-item" href="cena.php">Cena</a>
              </div>      
            </div>
          </div>
        </li>
      </ul>
      <ul class="nav justify-content-end" style="margin-right: 50px">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="Usuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?=$Usuario;
         ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="Usuario">
               <a class="dropdown-item" href="pag.php">Actualizar Datos</a>
                  <a class="dropdown-item" href="cerrarse.php">Cerrar Sesion</a>
            </li>
             </ul>
    </div>
  </nav>

<br>
<?php
date_default_timezone_set('America/Mexico_City');
$fechaActual=date("Y-m-d H:i:s");
?>

<center><h2>Desayuno</h2></center>
 
<section class="form-register">
    <center><h4>Defina el horario y alimentos de su desayuno</h4></center>
    <form action="CrearDieta1.php" method="POST">

    <input class="controls" type="datetime" name="Fechahora" id="desayuno" value="<?=$fechaActual;?>">Añada los alimentos a su desayuno</input>
  
</br></br>
  
  <center><div class="tablax">
			<table>
				<tr><td>Cereales</td>
        <td>
          <select name="ID_CEREALES" id="cereal">
          <option value="12">Ninguno</option>
          <option value="18">Patatas cocidas (Tipo 1)</option>
          <option value="19">Bonaitos (Tipo 1)</option>
          <option value="20">Pan blanco (Tipo 1)</option>
          <option value="21">Castañas (Tipo 1)</option>
          <option value="22">Pan tostado (Tipo 1)</option>
          <option value="23">Arroz blanco (Tipo 1)</option>
          <option value="24">Harina blanca (Tipo 1)</option>
          <option value="25">Espagueti (Tipo 1)</option>
          <option value="26">Biscote tostado integral (Tipo 1)</option>
          <option value="27">Pan de bocadillo (Tipo 1)</option>
          <option value="28">Sopa de fideos (Tipo 1)</option>
          <option value="29">Barra de cereal (Tipo 1)</option>
          <option value="30">Hojuelas de maiz (Tipo 1)</option>
          <option value="31">Pan de hamburguesa (Tipo 1)</option>
          <option value="1">Arroz cocido (Tipo 2)</option>
          <option value="2">Hojuelas de avena cocida (Tipo 2)</option>
          <option value="3">Avena en hojuelas (Tipo 2)</option>
          <option value="4">Bolillo sin migajon (Tipo 2)</option>
          <option value="5">Galletas Marias (Tipo 2)</option>
          <option value="6">Hojuelas de maiz (Tipo 2)</option>
          <option value="7">Pan integral (Tipo 2)</option>
          <option value="8">Pan tostado integral (Tipo 2)</option>
          <option value="9">Papa cocida (Tipo 2)</option>
          <option value="10">Espagueti cocido (Tipo 2)</option>
          <option value="11">Tortilla de maiz (Tipo 2)</option>
          <option value="13">Pan blanco (Gestacional))</option>
          <option value="14">Cereal (Gestacional)</option>
          <option value="15">Arroz blanco cocido (Gestacional)</option>
          <option value="16">Espagueti cocido (Gestacional)</option>
          <option value="17">Panesillo ingles (Gestacional)</option>
          </select></td>  
        </tr>
        <tr><td>Leche</td>
        <td>        
          <select name="ID_LECHE" id="leche">
          <option value="3">Ninguno</option>
          <option value="10">Leche entera (Tipo 1)</option>
          <option value="11">Yogur natural (Tipo 1)</option>
          <option value="12">Yogur desnatado de sabores (Tipo 1)</option>
          <option value="13">Yogur desnatado de frutas (Tipo 1)</option>
          <option value="14">Leche descremada (Tipo 1)</option>
          <option value="15">Leche semidescremada (Tipo 1)</option>
          <option value="16">Arroz con leche (Tipo 1)</option>
          <option value="1">Leche descremada (Tipo 2)</option>
          <option value="2">Yogur light (Tipo 2)</option>
          <option value="4">Leche entera (Gestacional)</option>
          <option value="5">Yogur natural (Gestacional)</option>
          <option value="6">Queso fresco (Gestacional)</option>
          <option value="7">Queso procesado (Gestacional)</option>
          <option value="8">Leche descremada (Gestacional)</option>
          <option value="9">Yogur descremado (Gestacional)</option>
          </select></td>
          </tr>
          <tr><td>Frutas</td>
        <td>      
          <select name="ID_FRUTAS" id="Fruta">
          <option value="15">Ninguno</option>
          <option value="29">Melón en cubitos (Tipo 1)</option>
          <option value="30">Melón (Tipo 1)</option>
          <option value="31">Sandía (Tipo 1)</option>
          <option value="32">Fresas (Tipo 1)</option>
          <option value="33">Pomelo (Tipo 1)</option>
          <option value="34">Albaricoques (Tipo 1)</option>
          <option value="35">Naranja (Tipo 1)</option>
          <option value="36">Pera (Tipo 1)</option>
          <option value="37">Mandarina (Tipo 1)</option>
          <option value="38">Limón (Tipo 1)</option>
          <option value="39">Ciruelas (Tipo 1)</option>
          <option value="40">Piña (Tipo 1)</option>
          <option value="41">Kiwi (Tipo 1)</option>
          <option value="42">Manzana (Tipo 1)</option>
          <option value="43">Plátano (Tipo 1)</option>
          <option value="44">Uvas (Tipo 1)</option>
          <option value="45">Cerezas (Tipo 1)</option>
          <option value="46">Higos (Tipo 1)</option>
          <option value="47">Chirimoya (Tipo 1)</option>
          <option value="48">Nípero (Tipo 1)</option>
          <option value="49">Mango (Tipo 1)</option>
          <option value="50">Melocotón (Tipo 1)</option>
          <option value="1">Ciruela roja (Tipo 2)</option>
          <option value="2">Durazno (Tipo 2)</option>
          <option value="3">Fresa (Tipo 2)</option>
          <option value="4">Guayaba (Tipo 2)</option>
          <option value="5">Gajos de mandarina (Tipo 2)</option>
          <option value="6">Manzana (Tipo 2)</option>
          <option value="7">Melon (Tipo 2)</option>
          <option value="8">Naranja en gajos (Tipo 2)</option>
          <option value="9">Papaya (Tipo 2)</option>
          <option value="10">Pera (Tipo 2)</option>
          <option value="11">Piña (Tipo 2)</option>
          <option value="12">Platano (Tipo 2)</option>
          <option value="13">Sandia (Tipo 2)</option>
          <option value="14">Uvas rojas o verdes (Tipo 2)</option>
          <option value="16">Plátano (Gestacional)</option>
          <option value="17">Manzana (Gestacional)</option>
          <option value="18">Naranja (Gestacional)</option>
          <option value="19">Pera (Gestacional)</option>
          <option value="20">Guayaba (Gestacional)</option>
          <option value="21">Mandarina (Gestacional)</option>
          <option value="22">Durazno (Gestacional)</option>
          <option value="23">Plátano en rodajas (Gestacional)</option>
          <option value="24">Manzana (Gestacional)</option>
          <option value="25">Manzana en rodajas (Gestacional)</option>
          <option value="26">Pera en rodajas (Gestacional)</option>
          <option value="27">Mandarina (Gestacional)</option>
          <option value="28">Sandía en cubitos (Gestacional)</option>
          </select></td>
          </tr>
          <tr><td>Verduras</td>
        <td>
        <select name="ID_VERDURAS" id="Verdura">
          <option value="21">Ninguno</option>
          <option value="33">Escarola (Tipo 1)</option>
          <option value="34">Lechuga (Tipo 1)</option>
          <option value="35">Endivias (Tipo 1)</option>
          <option value="36">Espinacas (Tipo 1)</option>
          <option value="37">Champiñones (Tipo 1)</option>
          <option value="38">Esparragos (Tipo 1)</option>
          <option value="39">Pepinos pelados (Tipo 1)</option>
          <option value="40">Tomates (Tipo 1)</option>
          <option value="41">Pimiento rojo (Tipo 1)</option>
          <option value="42">Col cocida (Tipo 1)</option>
          <option value="43">Berenjena (Tipo 1)</option>
          <option value="44">Coliflor (Tipo 1)</option>
          <option value="45">Calabacín (Tipo 1)</option>
          <option value="46">Ejotes (Tipo 1)</option>
          <option value="47">Zanahoria (Tipo 1)</option>
          <option value="48">Alcachofas cocidas (Tipo 1)</option>
          <option value="49">Cebolla (Tipo 1)</option>
          <option value="50">Remolacha (Tipo 1)</option>
          <option value="51">Coles de brucelas (Tipo 1)</option>
          <option value="1">Acelga cruda (Tipo 2)</option>
          <option value="2">Berro crudo (Tipo 2)</option>
          <option value="3">Betabel crudo (Tipo 2)</option>
          <option value="4">Brocoli cocido sin grasa (Tipo 2)</option>
          <option value="5">Calabaza cocida (Tipo 2)</option>
          <option value="6">Cebolla cruda (Tipo 2)</option>
          <option value="7">Champiñon crudo (Tipo 2)</option>
          <option value="8">Chayote cocido picado (Tipo 2)</option>
          <option value="9">Chile jalapeño (Tipo 2)</option>
          <option value="10">Coliflor cocida (Tipo 2)</option>
          <option value="11">Ejotes cocidos (Tipo 2)</option>
          <option value="12">Espinaca cruda (Tipo 2)</option>
          <option value="13">Jicama (Tipo 2)</option>
          <option value="14">Jitomate saladette (Tipo 2)</option>
          <option value="15">Jitomate guaje o saladette (Tipo 2)</option>
          <option value="16">Lechuga (Tipo 2)</option>
          <option value="17">Nopal cocido (Tipo 2)</option>
          <option value="18">Pepino (Tipo 2)</option>
          <option value="19">Tomate verde (Tipo 2)</option>
          <option value="20">Zanahoria picada cruda (Tipo 2)</option>
          <option value="22">Lechuga rallada (Gestacional)</option>
          <option value="23">Col rallado (Gestacional)</option>
          <option value="24">Col picado (Gestacional)</option>
          <option value="25">Lechuga picada (Gestacional)</option>
          <option value="26">Col cocida (Gestacional)</option>
          <option value="27">Zanahoria picada (Gestacional)</option>
          <option value="29">Brocoli picado (Gestacional)</option>
          <option value="30">Betabel (Gestacional)</option>
          <option value="31">Coliflor (Gestacional)</option>
          <option value="32">Tomates (Gestacional)</option>
          </select></td>
          </tr>
          <tr><td>Carnes</td>
        <td>
        <select name="ID_CARNES" id="Carne">
          <option value="14">Ninguno</option>
          <option value="21">Pollo asado (Tipo 1)</option>
          <option value="22">Carne de cerdo (Tipo 1)</option>
          <option value="23">Carne de cordero (Tipo 1)</option>
          <option value="24">Carne de conejo (Tipo 1)</option>
          <option value="25">Carne de buey (Tipo 1)</option>
          <option value="26">Carne de res (Tipo 1)</option>
          <option value="27">Ternera (Tipo 1)</option>
          <option value="28">Pescado blanco (Tipo 1)</option>
          <option value="29">Queso fresco (Tipo 1)</option>
          <option value="30">Huevo (Tipo 1)</option>
          <option value="1">Atun en agua (Tipo 2)</option>
          <option value="2">Bistec (Tipo 2)</option>
          <option value="3">Cecina (Tipo 2)</option>
          <option value="4">Claras de huevo (Tipo 2)</option>
          <option value="5">Filete de pescado (Tipo 2)</option>
          <option value="6">Huevo entero (Tipo 2)</option>
          <option value="7">Jamon de pavo (Tipo 2)</option>
          <option value="8">Muslo de pollo sin piel (Tipo 2)</option>
          <option value="9">Pierna de pollo sin piel asado (Tipo 2)</option>
          <option value="10">Pechuga de pollo (Tipo 2)</option>
          <option value="11">Pescado entero frito (Tipo 2)</option>
          <option value="12">Queso panela (Tipo 2)</option>
          <option value="13">Requeson (Tipo 2)</option>
          <option value="15">Carne de res cocida (Gestacional)</option>
          <option value="16">Pechuga de pollo cocida (Gestacional)</option>
          <option value="17">Pescado blanco cocido (Gestacional)</option>
          <option value="18">Pescado blanco cocido (Gestacional)</option>
          <option value="19">Frijoles cocidos (Gestacional)</option>
          <option value="20">Huevo entero (Gestacional)</option>
          </select></td>
          </tr>
          <tr><td>Leguminosas</td>
        <td>
        <select name="ID_LEGUMINOSAS" id="Leguminosa">
          <option value="7">Ninguno</option>
          <option value="14">Guisantes (Tipo 1)</option>
          <option value="15">Habas (Tipo 1)</option>
          <option value="16">Legumbres (Tipo 1)</option>
          <option value="1">Alubias cocidas vegetarianas</option>
          <option value="2">Frijoles cocidos</option>
          <option value="3">Garbanzos cocidos</option>
          <option value="4">Habas cocidas al horno</option>
          <option value="5">Lentejas cocidas</option>
          <option value="6">Soya cocida sin grasa añadida</option>
          <option value="8">Garbanzos cocidos (Gestacional)</option>
          <option value="9">Alubias cocidas vegetarianas (Gestacional)</option>
          <option value="10">Lentejas cocidas (Gestacional)</option>
          <option value="11">Frijoles negros (Gestacional)</option>
          <option value="12">Frijoles arvejas (Gestacional)</option>
          <option value="13">Guisantes (Gestacional)</option>
          </select></td>
          </tr>
          <tr><td>Grasas sin proteínas</td>
        <td>
        <select name="ID_GRASASINP" id="Grasasinp">
          <option value="7">Ninguno</option>
          <option value="12">Aceite de oliva extra virgen (Tipo 1)</option>
          <option value="13">Margarina (Tipo 1)</option>
          <option value="1">Aceite de canola (Tipo 2)</option>
          <option value="2">Aceite de maiz (Tipo 2)</option>
          <option value="3">Aceite de oliva etra virgen (Tipo 2)</option>
          <option value="4">Aguacate (Tipo 2)</option>
          <option value="5">Mantequilla (Tipo 2)</option>
          <option value="6">Soya cocida sin grasa añadida (Tipo 2)</option>
          <option value="7">Mantequilla (Gestacional)</option>
          <option value="8">Aceite de canola (Gestacional)</option>
          <option value="9">Aceite de maiz (Gestacional)</option>
          <option value="10">Aceite de oliva (Gestacional)</option>
          <option value="11">Aguacate (Gestacional)</option>
          </select></td>
          </tr>
        <tr><td>Grasas con proteínas</td> 
        <td>
        <select name="ID_GRASACONP" id="Grasaconp">
          <option value="6">Ninguno</option>
          <option value="9">Mantequilla (Tipo 1)</option>
          <option value="10">Aceitunas (Tipo 1)</option>
          <option value="11">Nata de leche (Tipo 1)</option>
          <option value="12">Crema de leche (Tipo 1)</option>
          <option value="13">Frutos secos (Tipo 1)</option>
          <option value="1">Almendra (Tipo 2)</option>
          <option value="2">Cacahuate (Tipo 2)</option>
          <option value="3">Nuez (Tipo 2)</option>
          <option value="4">Pistaches (Tipo 2)</option>
          <option value="5">Semilla de girasol (Tipo 2)</option>
          <option value="7">Nuez (Gestacional)</option>
          <option value="8">Aceitunas (Gestacional)</option>
          </select></td>
          </tr>
        </table>

        </center>

  
</br></br>


<div>
  <center><input type="submit" class="button" name="registrar" value="Añadir"></center>
    </div>
    </form>
    </section>
  <?php

//include("conexion.php");
  $TOTALcalorias=0;
  $TOTALcarbohidratos=0;
  $TOTALproteinas=0;
  $TOTALgrasas=0;
  $TOTALfibras=0;
  $TOTALcolesterol=0;
if(isset($_POST['registrar'])){
  $hora = $_POST["Fechahora"];
  $Carnes = $_POST["ID_CARNES"];
  $Frutas = $_POST["ID_FRUTAS"];
  $Verduras = $_POST["ID_VERDURAS"];
  $Cereales = $_POST["ID_CEREALES"];
  $Leguminosas = $_POST["ID_LEGUMINOSAS"];
  $Grasasinp = $_POST["ID_GRASASINP"];
  $Grasaconp = $_POST["ID_GRASACONP"];
  $Leche = $_POST["ID_LECHE"];
  foreach ($CarnesClass as $i => $tip){
    if($tip->ID==$Carnes){
      $TOTALcalorias=$TOTALcalorias+$tip->Energia;
      $TOTALcarbohidratos=$TOTALcarbohidratos+$tip->Carbohidratos;
      $TOTALproteinas=$TOTALproteinas+$tip->Proteinas;
      $TOTALgrasas=$TOTALgrasas+$tip->Lipidos;
      $TOTALfibras=$TOTALfibras+$tip->Fibra;
      $TOTALcolesterol=$TOTALcolesterol+$tip->Colesterol;
    }
  };
  foreach ($FrutasClass as $i => $tip){
    if($tip->ID==$Frutas){
      $TOTALcalorias=$TOTALcalorias+$tip->Energia;
      $TOTALcarbohidratos=$TOTALcarbohidratos+$tip->Carbohidratos;
      $TOTALproteinas=$TOTALproteinas+$tip->Proteinas;
      $TOTALgrasas=$TOTALgrasas+$tip->Lipidos;
      $TOTALfibras=$TOTALfibras+$tip->Fibra;
      $TOTALcolesterol=$TOTALcolesterol+$tip->Colesterol;
    }
  };
  foreach ($VerdurasClass as $i => $tip){
    if($tip->ID==$Verduras){
      $TOTALcalorias=$TOTALcalorias+$tip->Energia;
      $TOTALcarbohidratos=$TOTALcarbohidratos+$tip->Carbohidratos;
      $TOTALproteinas=$TOTALproteinas+$tip->Proteinas;
      $TOTALgrasas=$TOTALgrasas+$tip->Lipidos;
      $TOTALfibras=$TOTALfibras+$tip->Fibra;
      $TOTALcolesterol=$TOTALcolesterol+$tip->Colesterol;
    }
  };

  foreach ($CerealClass as $i => $tip){
    if($tip->ID==$Cereales){
      $TOTALcalorias=$TOTALcalorias+$tip->Energia;
      $TOTALcarbohidratos=$TOTALcarbohidratos+$tip->Carbohidratos;
      $TOTALproteinas=$TOTALproteinas+$tip->Proteinas;
      $TOTALgrasas=$TOTALgrasas+$tip->Lipidos;
      $TOTALfibras=$TOTALfibras+$tip->Fibra;
      $TOTALcolesterol=$TOTALcolesterol+$tip->Colesterol;
    }
  };
  foreach ($LeguminosasClass as $i => $tip){
    if($tip->ID==$Leguminosas){
      $TOTALcalorias=$TOTALcalorias+$tip->Energia;
      $TOTALcarbohidratos=$TOTALcarbohidratos+$tip->Carbohidratos;
      $TOTALproteinas=$TOTALproteinas+$tip->Proteinas;
      $TOTALgrasas=$TOTALgrasas+$tip->Lipidos;
      $TOTALfibras=$TOTALfibras+$tip->Fibra;
      $TOTALcolesterol=$TOTALcolesterol+$tip->Colesterol;
    }
  };
  foreach ($GrasaSinProteinasClass as $i => $tip){
    if($tip->ID==$Grasasinp){
      $TOTALcalorias=$TOTALcalorias+$tip->Energia;
      $TOTALcarbohidratos=$TOTALcarbohidratos+$tip->Carbohidratos;
      $TOTALproteinas=$TOTALproteinas+$tip->Proteinas;
      $TOTALgrasas=$TOTALgrasas+$tip->Lipidos;
      $TOTALfibras=$TOTALfibras+$tip->Fibra;
      $TOTALcolesterol=$TOTALcolesterol+$tip->Colesterol;
    }
  };
  foreach ($GrasaConProteinasClass as $i => $tip){
    if($tip->ID==$Grasaconp){
      $TOTALcalorias=$TOTALcalorias+$tip->Energia;
      $TOTALcarbohidratos=$TOTALcarbohidratos+$tip->Carbohidratos;
      $TOTALproteinas=$TOTALproteinas+$tip->Proteinas;
      $TOTALgrasas=$TOTALgrasas+$tip->Lipidos;
      $TOTALfibras=$TOTALfibras+$tip->Fibra;
      $TOTALcolesterol=$TOTALcolesterol+$tip->Colesterol;
    }
  };
  foreach ($LechesClass as $i => $tip){
    if($tip->ID==$Leche){
      $TOTALcalorias=$TOTALcalorias+$tip->Energia;
      $TOTALcarbohidratos=$TOTALcarbohidratos+$tip->Carbohidratos;
      $TOTALproteinas=$TOTALproteinas+$tip->Proteinas;
      $TOTALgrasas=$TOTALgrasas+$tip->Lipidos;
      $TOTALfibras=$TOTALfibras+$tip->Fibra;
      $TOTALcolesterol=$TOTALcolesterol+$tip->Colesterol;
    }
  };




$CadenaSQL="INSERT INTO desayuno (fechaHora, idCarne, idFruta, idVerdura, idCereal, idLeguminosa, idGrasaSinProteinas, idGrasaConProteinas, idLeche, idIniciar_sesion, TOTALcalorias, TOTALcarbohidratos, TOTALproteinas, TOTALgrasas, TOTALfibras, TOTALcolesterol) VALUES
('$hora','$Carnes','$Frutas','$Verduras','$Cereales','$Leguminosas','$Grasasinp','$Grasaconp','$Leche','$idUser', '$TOTALcalorias', '$TOTALcarbohidratos', '$TOTALproteinas', '$TOTALgrasas', '$TOTALfibras', '$TOTALcolesterol')";
//echo($CadenaSQL);
$consulta=$conne->query($CadenaSQL);

if(!$consulta){

echo "</br><center><strong>Error en el registro</strong></center>";

}
else{
  echo "</br><center><strong>Éxito al registrar los alimentos, por favor presione el botón de Continuar para añadir los alimentos de su comida</strong></center>";
}
}

?>

<br>
<section class="form">
    <form action="CrearDieta2.php">
    <center><input type="submit" class="button" name="continuar" value="Continuar"></center>
</form>
</section>
<br>
<br>


  




  <?php
include("pie.php");
?>
