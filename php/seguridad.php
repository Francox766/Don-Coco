<?php
// Inicio la sesión
session_start();

// Comprueba que el usuario está autentificado
if (!isset($_SESSION["autentificado"])) {
    // Si no está autentificado, redirige a la página de inicio
    header("Location: ../index.html");
    // Salimos del script
    exit();
}
?>