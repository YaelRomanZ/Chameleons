<?php
$host = 'localhost'; // Cambia esto si tu servidor de base de datos está en otro host
$user = 'root'; // Cambia esto por tu usuario de base de datos
$password = ''; // Cambia esto por tu contraseña de base de datos
$database = 'chameleons'; // Nombre de la base de datos

$conex = new mysqli($host, $user, $password, $database);

if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}

?>
