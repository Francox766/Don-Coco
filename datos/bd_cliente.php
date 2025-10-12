<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: agre_clin.php");
    exit;
}

$conexion = mysqli_connect("localhost", "root", "", "Login");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre = $_POST["nombre"] ?? '';
$apellido = $_POST["apellido"] ?? '';
$email = $_POST["email"] ?? '';
$cuit = $_POST["cuit"] ?? '';
$telefono = $_POST["telefono"] ?? '';
$domicilio = $_POST["domicilio"] ?? '';

$sql = "INSERT INTO cliente (nombre, apellido, email, cuit, telefono, domicilio)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "ssssss", $nombre, $apellido, $email, $cuit, $telefono, $domicilio);

if (mysqli_stmt_execute($stmt)) {
    header("Location: ver_cli.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
