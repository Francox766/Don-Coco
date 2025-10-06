<?php include 'seguridad.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Ventas</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/stylePanel.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="Encabezado">
                <a href="../index.html"><img src="../img/doncocoLogo-sinfondo.png" alt="" /></a>
            </div>
        </div>
    </header>

    <main>
        <div class="Historial_ventas">
            <h2>Historial de ventas</h2>
            <table border="1">
                <tr>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Monto Unitario</th>
                    <th>Total</th>
                    <th>Mozo</th>
                </tr>
                <?php
                // Conexión a la base de datos
                $conexion = mysqli_connect("localhost", "root", "", "Login");
                if (!$conexion) {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                // Consulta para obtener los datos de la tabla "producto"
                $sql = "SELECT cliente, producto, cantidad, monto, total, mozo FROM producto";
                $resultado = mysqli_query($conexion, $sql);

                // Verificar si hay resultados
                if (mysqli_num_rows($resultado) > 0) {
                    // Mostrar los datos en la tabla
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>
                                <td>{$fila['cliente']}</td>
                                <td>{$fila['producto']}</td>
                                <td>{$fila['cantidad']}</td>
                                <td>{$fila['monto']}</td>
                                <td>{$fila['total']}</td>
                                <td>{$fila['mozo']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No hay datos disponibles</td></tr>";
                }

                // Cerrar la conexión
                mysqli_close($conexion);
                ?>
            </table>
        </div>
    </main>
</body>
</html>