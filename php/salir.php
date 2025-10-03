<?php
// Inicia la sesión
session_start();

// Destruye la sesión actual
session_destroy();

// Redirecciona automáticamente a index.html que está fuera de esta carpeta
header("Location: ../index.html");
exit;
?>