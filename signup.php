<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$reg_username = $_POST['reg_username'];
$reg_password = $_POST['reg_password'];

$sql = "INSERT INTO users (username, password) VALUES ('$reg_username', '$reg_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error en el registro: " . $conn->error;
}

$conn->close();
?>