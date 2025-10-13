<?php include ('../php/seguridad.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Ventas</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/styleTablasHistorial.css">
    <style>
        /* 🔹 Estilos para botones de cantidad y borrado */
        .cantidad-control {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
        }

        .cantidad-input {
            width: 50px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 4px;
        }

        .btn-cant {
            background-color: rgb(241, 124, 70);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 4px 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-cant:hover {
            background-color: rgba(148, 161, 161, 1);
        }

        .btn-borrar {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 4px 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-borrar:hover {
            background-color: #c0392b;
        }
    </style>
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
                    <th>Acciones</th>
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
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>
                                <td>{$fila['cliente']}</td>
                                <td>{$fila['producto']}</td>
                                <td>
                                    <div class='cantidad-control'>
                                        <button class='btn-cant' onclick='cambiarCantidad(this, -1)'>-</button>
                                        <input type='number' value='{$fila['cantidad']}' min='0' class='cantidad-input' readonly>
                                        <button class='btn-cant' onclick='cambiarCantidad(this, 1)'>+</button>
                                    </div>
                                </td>
                                <td class='monto'>{$fila['monto']}</td>
                                <td class='total'>{$fila['total']}</td>
                                <td>{$fila['mozo']}</td>
                                <td><button class='btn-borrar' onclick='borrarCliente(this)'>✖️</button></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No hay datos disponibles</td></tr>";
                }

                // Cerrar la conexión
                mysqli_close($conexion);
                ?>
            </table>
        </div>
    </main>

    <script src="../Script/aparecer_opciones.js"></script>

    <script>
        // 🔹 Actualiza cantidad y total
        function cambiarCantidad(boton, cambio) {
            const fila = boton.closest('tr');
            const input = fila.querySelector('.cantidad-input');
            const monto = parseFloat(fila.querySelector('.monto').textContent);
            const totalCelda = fila.querySelector('.total');
            const producto = fila.querySelectorAll('td')[1].textContent;

            let cantidad = parseInt(input.value) + cambio;
            if (cantidad < 0) cantidad = 0;
            input.value = cantidad;

            const nuevoTotal = (monto * cantidad).toFixed(2);
            totalCelda.textContent = nuevoTotal;

            // 🔸 Guardar en la base de datos
            fetch('../php/actualizar_cantidad.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    producto: producto,
                    cantidad: cantidad,
                    total: nuevoTotal
                })
            })
            .then(res => res.json())
            .then(data => {
                if (!data.ok) {
                    console.error("Error al actualizar:", data.error);
                    alert("❌ Error al guardar el cambio en la base de datos");
                }
            })
            .catch(err => {
                console.error("Error detallado:", err);
                alert("⚠️ No se pudo conectar al servidor");
            });
        }

        // 🔹 Borra cliente
        function borrarCliente(boton) {
            const fila = boton.closest('tr');
            const cliente = fila.querySelectorAll('td')[0].textContent;

            if (!confirm(`¿Seguro que querés borrar al cliente "${cliente}"?`)) return;

            fetch('../php/borrar_cliente.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ cliente: cliente })
            })
            .then(res => res.json())
            .then(data => {
                if (data.ok) {
                    alert(`✅ Cliente "${cliente}" borrado correctamente`);
                    fila.remove();
                } else {
                    alert("❌ Error al borrar el cliente: " + data.error);
                }
            })
            .catch(err => {
                console.error("Error al conectar con el servidor:", err);
                alert("⚠️ No se pudo conectar al servidor");
            });
        }
    </script>
</body>
</html>
