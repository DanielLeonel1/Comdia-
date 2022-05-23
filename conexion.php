<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "comdia";
try {
    $conne = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>