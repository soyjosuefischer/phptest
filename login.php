<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$login_username = $_POST['login_username'];
$login_password = $_POST['login_password'];

$sql = "SELECT * FROM users WHERE username = '$login_username' AND password = '$login_password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Autenticación exitosa.";
} else {
    echo "Error en la autenticación.";
}

$conn->close();
?>