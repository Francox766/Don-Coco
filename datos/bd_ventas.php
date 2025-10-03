<?php

$cliente = $_POST["cliente"];
$producto = $_POST["producto"];
$monto = $_POST["monto"];
$mozo = $_POST["mozo"];


$conexion = mysqli_connect("localhost", "root", "", "Login");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


$sql = "INSERT INTO producto (cliente, producto, monto, mozo) VALUES ('$cliente', '$producto', '$monto', '$mozo')";


if (mysqli_query($conexion, $sql)) {
    echo "Venta registrada correctamente.";
    
    header("Location: ../datos/historial.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}


mysqli_close($conexion);
?>