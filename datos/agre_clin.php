<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/stylePanel.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="Encabezado">
                <a href="../index.html"><img src="../img/doncocoLogo-sinfondo.png" alt="" /></a>
            </div>
          
            <div class="logouser">
                <button class="btn-opc" onclick="Apare_Opc()"><img src="../img/menu.png" alt=""></button>

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
    

        <div class="Agregar_cli">
            <h2>Agregar cliente</h2>
            <form action="">
                <input type="text" placeholder="Nombre">
                <input type="text" placeholder="Apellido">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Telefono">
                <button>Agregar</button>
        </div>

      

       
        

    </main>
</body>
<script src="/Script/aparecer_opciones.js"></script>

</html>