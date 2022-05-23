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

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:500|Roboto:300,400,700&display=swap" rel="stylesheet">

    <title>Bravo Agency Template | Themes Bootstrap</title>
</head>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">ComDia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/images/menu.svg" class="img-fluid">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alimentos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">Tipos de Alimentos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="verduras.php">Verduras</a>
                        <a class="dropdown-item" href="leche.php">Leche</a>
                        <a class="dropdown-item" href="leguminosas.php">Leguminosas</a>
                        <a class="dropdown-item" href="frutas.php">Frutas</a>
                        <a class="dropdown-item" href="cerealesSin.php">Cereales sin grasas</a>
                        <a class="dropdown-item" href="carne.php">Alimentos de origen animal</a>
                        <a class="dropdown-item" href="grasasCon.php">Grasas con proteinas</a>
                        <a class="dropdown-item" href="Grasas.php">Grasas sin proteinas</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Glucosa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Glucosa.php">Añadir glucosa</a>
                        <a class="dropdown-item" href="consultaglucosa.php">Consultar glucosa</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alimentos registrados 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">Tipos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Desayuno.php">Desayuno</a>
                        <a class="dropdown-item" href="comida.php">Comida</a>
                        <a class="dropdown-item" href="cena.php">Cena</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="consejos.php">Recomendaciones</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Medicamentos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="medicamento_gestacional.php">Gestacional</a>
                        <a class="dropdown-item" href="medicamento_tipo_dos.php">Tipo 2</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link" href="tipoejercicios.php">Ejercicios</a>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link" href="CrearDieta.php">CREAR DIETA</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</html>