<?php
session_start();
$Usuario=$_SESSION['correo'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/principal.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:500|Roboto:300,400,700&display=swap" rel="stylesheet">

    <title>Bravo Agency Template | Themes Bootstrap</title>

	</head>
<body>
	<header>
    <nav class="navbar navbar-light navbar-lg fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php">ComDia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ComDia</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alimentos
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
                <a class="dropdown-item disabled" href="#">TIPOS DE ALIMENTOS</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="verduras.php">Verduras</a>
                        <a class="dropdown-item" href="leche.php">Leche</a>
                        <a class="dropdown-item" href="leguminosas.php">Leguminosas</a>
                        <a class="dropdown-item" href="frutas.php">Frutas</a>
                        <a class="dropdown-item" href="cerealesSin.php">Cereales sin grasas</a>
                        <a class="dropdown-item" href="carne.php">Alimentos de origen animal</a>
                        <a class="dropdown-item" href="grasasCon.php">Grasas con proteinas</a>
                        <a class="dropdown-item" href="Grasas.php">Grasas sin proteinas</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item disabled" href="#">CREA TU PROPIA DIETA</a>
                    <a class="dropdown-item" href="CrearDieta.php">Crear dieta</a>
              </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Glucosa
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
                    <a class="dropdown-item" href="Glucosa.php">Añadir glucosa</a>
                    <a class="dropdown-item" href="consultaglucosa.php">Consultar glucosa</a>
              </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alimentos registrados
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
                    <a class="dropdown-item" href="Desayuno.php">Desayuno</a>
                    <a class="dropdown-item" href="comida.php">Comida</a>
                    <a class="dropdown-item" href="cena.php">Cena</a>
              </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mejora tu salud
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
                    <a class="dropdown-item" href="consejos.php">Recomendaciones</a>
                    <a class="dropdown-item" href="tipoejercicios.php">Ejercicios</a>
              </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Medicamentos
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
                    <a class="dropdown-item" href="medicamento_gestacional.php">Diabetes gestacional</a>
                    <a class="dropdown-item" href="medicamento_tipo_dos.php">Diabetes tipo 2</a>
              </li>
            </ul>
        </li>
        <br>
        <br>
        <br>
        <br>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SESIÓN
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
              <a class="dropdown-item disabled" href="#"><?=$Usuario;?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pag.php">Actualizar Datos</a>
                        <a class="dropdown-item" href="cerrarse.php">Cerrar Sesion</a>
              </li>
            </ul>
        </li>
      </ul>
      </div>
    </div>
    
    <div id="ctn-icon-search">
        <i class="fas fa-search" id="icon-search"></i>
    </div>
    <div id="icon-menu">
        <i class="fas fa-bars"></i>
    </div>

  </div>
</header>

</nav>

    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>
<¡-- cajon de busqueda -->
    <ul id="box-search">
        <li><a href="verduras.php"><i class="fas fa-search"></i>Verduras</a></li>
        <li><a href="leche.php"><i class="fas fa-search"></i>Leche</a></li>
        <li><a href="leguminosas.php"><i class="fas fa-search"></i>Leguminosas</a></li>
        <li><a href="frutas.php"><i class="fas fa-search"></i>Frutas</a></li>
        <li><a href="cerealesSin.php"><i class="fas fa-search"></i>Cereales</a></li>
        <li><a href="carne.php"><i class="fas fa-search"></i>Alimentos de origen animal</a></li>
        <li><a href="grasasCon.php"><i class="fas fa-search"></i>Grasas con proteinas</a></li>
        <li><a href="Grasas.php"><i class="fas fa-search"></i>Grasas sin proteinas</a></li>
        <li><a href="glucosa.php"><i class="fas fa-search"></i>Añadir glucosa</a></li>
        <li><a href="consultaglucosa.php"><i class="fas fa-search"></i>Consultar glucosa</a></li>
        <li><a href="Desayuno.php"><i class="fas fa-search"></i>Mis desayunos</a></li>
        <li><a href="comida.php"><i class="fas fa-search"></i>Mis comidas</a></li>
        <li><a href="cena.php"><i class="fas fa-search"></i>Mis cenas</a></li>
        <li><a href="consejos.php"><i class="fas fa-search"></i>Recomendaciones</a></li>
        <li><a href="tipoejercicios.php"><i class="fas fa-search"></i>Tipos de Ejercicios</a></li>
        <li><a href="CrearDieta.php"><i class="fas fa-search"></i>Crear dieta</a></li>
    </ul>
    
    <div id="cover-ctn-search"></div>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>

