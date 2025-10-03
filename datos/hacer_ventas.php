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
                <a href="/index.html"><img src="../img/doncocoLogo-sinfondo.png" alt="" /></a>
            </div>
          
            <div class="logouser">
                <button class="btn-opc" onclick="Apare_Opc()"><img src="../img/menu.png" alt=""></button>

                <a href="login.html">
                    <img src=".../img/ini_logo.png" alt="" />
                </a>
            </div>
        </div>
        <div class="p_opc">
            <div class="opc">
                <button><a href="historial.php">Historial</a></button>
                <button><a href="ver_cli.php">Ver cliente</a></button>
                <button><a href="ver_venta.php">Hacer venta</a></button>
                <button><a href="agre_clin.php">Agregar cliente</a></button>
            </div>
        </div>
    </header>

    <main>
    

        <div class="Hacer_venta" >
            <h2>Hacer venta</h2>
            <form action="bd_ventas.php" method="post">
                <input type="text" name="cliente" id="cliente" placeholder="Cliente">
                <input type="text" name="producto"id="producto" placeholder="Producto">
                <input type="text" name="monto" id="monto" placeholder="Monto">
                <input type="text" name="mozo" id="mozo" placeholder="Mozo">
                <button type="submit">Vender</button>
        </div>
        </div>
      

       
        

    </main>
</body>
<script src="../Script/aparecer_opciones.js"></script>

</html>