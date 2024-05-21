<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_panaderia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_cliente = $_POST['nombre_cliente'];
    $direccion = $_POST ['direccion'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO clientes (nombre_cliente, direccion , telefono) VALUES ('$nombre_cliente', '$direccion', '$telefono')";

   if ($conn->query($sql) === TRUE) {
        echo " Producto agregado correctamente ";
    } else {
        echo "Error al agregar producto: " 
        . $conn->error;
    }
}
$conn->close();
