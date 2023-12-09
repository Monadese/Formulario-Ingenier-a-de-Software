<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$pais = $_POST['pais'];
$comentarios = $_POST['comentarios'];


$sql = "INSERT INTO inscripciones (nombre, email, telefono, edad, genero, pais, comentarios)
VALUES ('$nombre', '$email', '$telefono', '$edad', '$genero', '$pais', '$comentarios')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}


$conn->close();
?>
