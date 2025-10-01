<?php
session_start();

$conexion = mysqli_connect("localhost","root","","Login");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$user = $_POST["usuario"];
$pass = $_POST["contrasena"];

$sql = "SELECT * FROM usuario WHERE user = '$user' AND pass = '$pass'";
$result = mysqli_query($conexion, $sql);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

if (mysqli_num_rows($result) == 1) {
    $_SESSION["autentificado"] = "1";
    $row = mysqli_fetch_assoc($result);

    $_SESSION["user"] = $row["user"];
    $_SESSION["rol"]  = $row["rol"];

    if ($row["rol"] == "1") {
        header("Location:administrador.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>
