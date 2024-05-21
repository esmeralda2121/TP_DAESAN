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
    $nombre_proveedor = $_POST['nombre_proveedor'];
    $descripcion = $_POST['descripcion'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO proveedor (nombre_proveedor, descripcion, telefono) VALUES ('$nombre_proveedor', '$descripcion', '$telefono')";

   if ($conn->query($sql) === TRUE) {
        echo " Producto agregado correctamente ";
    } else {
        echo "Error al agregar producto: " 
        . $conn->error;
    }
}
$conn->close();

?>