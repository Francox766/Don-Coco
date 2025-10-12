<?php include ('../php/seguridad.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/stylePanel.css">
    <link rel="stylesheet" href="../Style/styleTablasCliente.css">
</head>
<body>
    <header>
    <div class="container">
            <div class="Encabezado">
    <a href="../php/administrador.php">
        <img src="../img/doncocoLogo-sinfondo.png" alt="Logo" />
    </a>
</div>
            <h1>DonCoco</h1>
            <div class="logouser">
                <button class="btn-opc" onclick="Apare_Opc()"><img src="../img/menu.png" alt=""></button>

                <a href="salir.php">
                    <img src="../img/ini_logo.png" alt="" />
                </a>
            </div>
        </div>

        <div class="p_opc">
            <div class="opc">
                <button><a href="../datos/historial.php">Historial</a></button>
                <button><a href="../datos/ver_cli.php">Ver cliente</a></button>
                <button><a href="../datos/hacer_ventas.php">Hacer venta</a></button>
                <button><a href="../datos/agre_clin.php">Agregar cliente</a></button>
            </div>
        </div>
  </header>

    <main>
    

        <div class="Ver_cli">
            <h2>Ver clientes</h2>
            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Cuit</th>
                    <th>Telefono</th>
                    <th>Domicilio</th>
                </tr>

                <tr>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "Login");
                    if (!$conexion) {
                        die("Error de conexión: " . mysqli_connect_error());
                    }

                    $sql = "SELECT nombre, apellido, email, cuit, telefono, domicilio FROM cliente";
                    $resultado = mysqli_query($conexion, $sql);

                    if (mysqli_num_rows($resultado) > 0) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>
                                    <td>{$fila['nombre']}</td>
                                    <td>{$fila['apellido']}</td>
                                    <td>{$fila['email']}</td>
                                    <td>{$fila['cuit']}</td>
                                    <td>{$fila['telefono']}</td>
                                    <td>{$fila['domicilio']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No hay datos disponibles</td></tr>";
                    }

                    mysqli_close($conexion);
                    ?>
                </tr>
            </table>
        </div>
    </main>
    <script src="../Script/aparecer_opciones.js"></script>
</body>

</html>