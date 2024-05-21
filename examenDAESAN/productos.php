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
    $nombre_producto = $_POST['nombre_producto'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO productos (nombre_producto, precio, stock) VALUES ('$nombre_producto', '$precio', '$stock')";

   if ($conn->query($sql) === TRUE) {
        echo " Producto agregado correctamente ";
    } else {
        echo "Error al agregar producto: " 
        . $conn->error;
    }
}
$conn->close();

?>