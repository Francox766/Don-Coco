<?php include ('../php/seguridad.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar cliente</title>
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
    <div class="Agregar_cli">
      <h2>Agregar cliente</h2>
      <form action="bd_cliente.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="cuit" placeholder="cuit" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="text" name="domicilio" placeholder="Domicilio" required>
        <button type="submit">Agregar</button>
      </form>
    </div>
  </main>
  <script src="../Script/aparecer_opciones.js"></script>
</body>
</html>
