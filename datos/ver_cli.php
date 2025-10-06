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
                <a href="../index.html"><img src=".../img/doncocoLogo-sinfondo.png" alt="" /></a>
            </div>
          
            <div class="logouser">
                <button class="btn-opc" onclick="Apare_Opc()"><img src="/img/menu.png" alt=""></button>

                <a href="login.html">
                    <img src="/img/ini_logo.png" alt="" />
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
    

        <div class="Ver_cli">
            <h2>Ver clientes</h2>
            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </tr>

                <tr>
                    <!-- Agregar los td desde php -->
                </tr>
            </table>
        </div>

      

       
        

    </main>
</body>
<script src="/Script/aparecer_opciones.js"></script>

</html>