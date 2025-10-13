<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "Login");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recibir datos desde JavaScript (fetch)
$data = json_decode(file_get_contents("php://input"), true);
$producto = $data["producto"];
$cantidad = (int)$data["cantidad"];
$total = (float)$data["total"];

// Actualizar cantidad y total en la base de datos
$sql = "UPDATE producto SET cantidad = $cantidad, total = $total WHERE producto = '$producto'";
if (mysqli_query($conexion, $sql)) {
    echo json_encode(["ok" => true]);
} else {
    echo json_encode(["ok" => false, "error" => mysqli_error($conexion)]);
}

mysqli_close($conexion);
?>
