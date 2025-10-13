<?php
$conexion = mysqli_connect("localhost", "root", "", "Login");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$data = json_decode(file_get_contents("php://input"), true);
$cliente = $data["cliente"];

$sql = "DELETE FROM producto WHERE cliente = '$cliente'";
if (mysqli_query($conexion, $sql)) {
    echo json_encode(["ok" => true]);
} else {
    echo json_encode(["ok" => false, "error" => mysqli_error($conexion)]);
}

mysqli_close($conexion);
?>
