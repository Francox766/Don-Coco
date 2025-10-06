<?php

$cliente = $_POST["cliente"];
$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
$monto = $_POST["monto"];
$mozo = $_POST["mozo"];

//calculo el total del monto iniciall
$total = $monto * $cantidad;


$conexion = mysqli_connect("localhost", "root", "", "Login");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


$sql = "INSERT INTO producto (cliente, producto, cantidad, monto, mozo, total) VALUES ('$cliente', '$producto', '$cantidad', '$monto', '$mozo', '$total')";


if (mysqli_query($conexion, $sql)) {
    echo "Venta registrada correctamente.";
    header("Location: ../datos/historial.php");
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}


mysqli_close($conexion);
?>