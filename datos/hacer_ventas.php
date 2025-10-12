<?php include ('../php/seguridad.php');?>
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
        <div class="Hacer_venta" >
            <h2>Hacer venta</h2>
            <form action="bd_ventas.php" method="post">
            <select name="cliente" id="cliente">
                <?php
                $conexion = mysqli_connect("localhost", "root", "", "Login");
                if (!$conexion) {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                $sql = "SELECT nombre FROM cliente";
                $resultado = mysqli_query($conexion, $sql);

                if (mysqli_num_rows($resultado) > 0) {
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='{$fila['nombre']}'>{$fila['nombre']}</option>";
                    }
                } else {
                    echo "<option value=''>No hay clientes disponibles</option>";
                }

                mysqli_close($conexion);
                ?>
            </select>
            <input type="text" name="producto" id="producto" placeholder="Producto" required>
            <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad" min="1" required>
            <input type="number" name="monto" id="monto" placeholder="Monto Unitario" min="1" required>
    <label for="mozo">Mozo:</label>
    <select name="mozo" id="mozo" required>
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "Login");
        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $sql = "SELECT nombre FROM mozo";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<option value='{$fila['nombre']}'>{$fila['nombre']}</option>";
            }
        } else {
            echo "<option value=''>No hay mozos disponibles</option>";
        }

        mysqli_close($conexion);
        ?>
    </select>
    <button type="submit">Vender</button>
</form>
        </div>
        </div>
      

       
        

    </main>
</body>
<script src="../Script/aparecer_opciones.js"></script>
<script src="../Script/calcular_monto.js"></script>
</html>