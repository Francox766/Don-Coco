<?php
include('../php/seguridad.php');

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "Login");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener categorías únicas
$sql_categorias = "SELECT DISTINCT categoria FROM productos";
$resultado_categorias = mysqli_query($conexion, $sql_categorias);

// Obtener productos con sus precios y categorías
$sql_productos = "SELECT nombre, categoria, precio FROM productos";
$resultado_productos = mysqli_query($conexion, $sql_productos);

$productos_js = [];
if (mysqli_num_rows($resultado_productos) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado_productos)) {
        $categoria = $fila['categoria'];
        $nombre = $fila['nombre'];
        $precio = $fila['precio'];

        if (!isset($productos_js[$categoria])) {
            $productos_js[$categoria] = [];
        }
        $productos_js[$categoria][$nombre] = $precio;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hacer Venta - DonCoco</title>
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
            <button class="btn-opc" onclick="Apare_Opc()">
                <img src="../img/menu.png" alt="">
            </button>
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
    <div class="Hacer_venta">
        <h2>Hacer venta</h2>
        <form action="bd_ventas.php" method="post">

            <!-- Cliente -->
            <label for="cliente">Cliente:</label>
            <select name="cliente" id="cliente" required>
                <?php
                $sql_clientes = "SELECT nombre FROM cliente";
                $resultado_clientes = mysqli_query($conexion, $sql_clientes);
                if (mysqli_num_rows($resultado_clientes) > 0) {
                    while ($fila = mysqli_fetch_assoc($resultado_clientes)) {
                        echo "<option value='{$fila['nombre']}'>{$fila['nombre']}</option>";
                    }
                } else {
                    echo "<option value=''>No hay clientes disponibles</option>";
                }
                ?>
            </select>

            <!-- Categoría -->
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria" required onchange="actualizarProductos()">
                <option value="">Seleccione una categoría</option>
                <?php
                if (mysqli_num_rows($resultado_categorias) > 0) {
                    while ($fila = mysqli_fetch_assoc($resultado_categorias)) {
                        echo "<option value='{$fila['categoria']}'>{$fila['categoria']}</option>";
                    }
                }
                ?>
            </select>

            <!-- Producto -->
            <label for="producto">Producto:</label>
            <select name="producto" id="producto" required onchange="actualizarMonto()">
                <option value="">Seleccione un producto</option>
            </select>

            <!-- Cantidad -->
            <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad" min="1" required>

            <!-- Monto Unitario -->
            <label for="monto">Monto Unitario:</label>
            <input type="number" name="monto" id="monto" placeholder="Monto Unitario" min="1" readonly required>

            <!-- Mozo -->
            <label for="mozo">Mozo:</label>
            <select name="mozo" id="mozo" required>
                <?php
                $sql_mozos = "SELECT nombre FROM mozo";
                $resultado_mozos = mysqli_query($conexion, $sql_mozos);
                if (mysqli_num_rows($resultado_mozos) > 0) {
                    while ($fila = mysqli_fetch_assoc($resultado_mozos)) {
                        echo "<option value='{$fila['nombre']}'>{$fila['nombre']}</option>";
                    }
                } else {
                    echo "<option value=''>No hay mozos disponibles</option>";
                }
                ?>
            </select>

            <!-- Botón de venta -->
            <button type="submit">Vender</button>
        </form>
    </div>
</main>

<script src="../Script/aparecer_opciones.js"></script>

<script>
    const productos = <?php echo json_encode($productos_js); ?>;

    function actualizarProductos() {
        const categoria = document.getElementById('categoria').value;
        const productoSelect = document.getElementById('producto');
        const montoInput = document.getElementById('monto');

        productoSelect.innerHTML = '<option value="">Seleccione un producto</option>';
        montoInput.value = '';

        if (productos[categoria]) {
            for (const nombre in productos[categoria]) {
                const option = document.createElement('option');
                option.value = nombre;
                option.textContent = nombre;
                productoSelect.appendChild(option);
            }
        }
    }

    function actualizarMonto() {
        const categoria = document.getElementById('categoria').value;
        const producto = document.getElementById('producto').value;
        const montoInput = document.getElementById('monto');

        if (productos[categoria] && productos[categoria][producto] !== undefined) {
            montoInput.value = productos[categoria][producto];
        } else {
            montoInput.value = '';
        }
    }
</script>

</body>
</html>

<?php
mysqli_close($conexion);
?>
