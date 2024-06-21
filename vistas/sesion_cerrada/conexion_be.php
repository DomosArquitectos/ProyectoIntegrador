<?php

$servername = "localhost:3307"; // Nombre del servidor
$username = "root";   // Nombre de usuario de la base de datos
$password = ""; // Contraseña del usuario
$dbname = "domosarquitectos"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";

?>