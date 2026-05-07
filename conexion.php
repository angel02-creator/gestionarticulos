<?php

$host = "mysql-soto.alwaysdata.net";
$user = "soto";
$pass = "clase1234";
$db = "soto_gestionarticulos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>