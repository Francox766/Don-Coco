<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/stylePanel.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="Encabezado">
                <a href="../index.html"><img src="../img/doncocoLogo-sinfondo.png" alt="" /></a>
            </div>
          
            <div class="logouser">
                <button class="btn-opc" onclick="Apare_Opc()"><img src="./img/menu.png" alt=""></button>

                <a href="login.html">
                    <img src="../img/ini_logo.png" alt="" />
                </a>
            </div>
        </div>

        <div class="p_opc">
            <div class="opc">
                <button><a href="../datos/historial.html">Historial</a></button>
                <button><a href="../datos/ver_cli.html">Ver cliente</a></button>
                <button><a href="../datos/ver_venta.html">Hacer venta</a></button>
                <button><a href="../datos/agre_clin.html">Agregar cliente</a></button>
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
                    <th>Monto</th>
                    <th>Mozo</th>
                </tr>
                <?php
                // Conexión a la base de datos
                $conexion = mysqli_connect("localhost", "root", "", "Login");
                if (!$conexion) {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                // Consulta para obtener los datos de la tabla "producto"
                $sql = "SELECT cliente, producto, monto, mozo FROM producto";
                $resultado = mysqli_query($conexion, $sql);

                // Verificar si hay resultados
                if (mysqli_num_rows($resultado) > 0) {
                    // Mostrar los datos en la tabla
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>
                                <td>{$fila['cliente']}</td>
                                <td>{$fila['producto']}</td>
                                <td>{$fila['monto']}</td>
                                <td>{$fila['mozo']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay datos disponibles</td></tr>";
                }

                // Cerrar la conexión
                mysqli_close($conexion);
                ?>
            </table>
        </div>
    </main>
</body>
<script src="../Script/aparecer_opciones.js"></script>
</html>