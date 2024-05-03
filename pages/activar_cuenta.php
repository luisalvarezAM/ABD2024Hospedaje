<?php
$activation_code = $_GET['code'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abd2024Hospedaje";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "UPDATE usuarios SET activo = 1 WHERE activation_code = '$activation_code'";

if ($conn->query($sql) === TRUE) {
    echo "¡Tu cuenta ha sido activada con éxito!";
} else {
    echo "Error al activar la cuenta: " . $conn->error;
}

$conn->close();
?>