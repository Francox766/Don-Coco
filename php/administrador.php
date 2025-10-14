<?php include ("seguridad.php");?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DonCoco</title>
    <link rel="shortcut icon" href="/img/doncocoLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../Style/style.css" />
</head>

<body>
    <header>
        <div class="container">
            <div class="Encabezado">
                <img src="../img/doncocoLogo-sinfondo.png" alt="" />
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
        <section class="carta-menu">
            <h2>Menú</h2>

            <div class="categoria">
                <h3>Milanesas</h3>
                <ul>
                    <li>
                        <img src="../img/milacomun.png" alt=""> Común
                        <p class="ingredientes">Carne de res, pan rallado, huevo, sal</p>
                        <p class="ingredientes"><strong>$5.500</strong></p>
                    </li>
                    <li>
                        <img src="../img/milaconfritas.png" alt=""> Con papas
                        <p class="ingredientes">Milanesa común + papas fritas</p>
                        <p class="ingredientes"><strong>$7.000</strong></p>
                    </li>
                    <li>
                        <img src="../img/milanapo.png" alt=""> Napolitana
                        <p class="ingredientes">Milanesa, salsa de tomate, jamón, queso</p>
                        <p class="ingredientes"><strong>$7.500</strong></p>
                    </li>
                </ul>
            </div>


            <div class="categoria">
                <h3>Hamburguesas</h3>
                <ul>
                    <li>
                        <img src="../img/hamburg1.png" alt=""> Comun
                        <p class="ingredientes">Carne, pan, ketchup, mayonesa</p>
                        <p class="ingredientes"><strong>$6.000</strong></p>
                    </li>
                    <li>
                        <img src="../img/hamburg2.png" alt=""> Completa
                        <p class="ingredientes">Carne, queso, lechuga, tomate, huevo</p>
                        <p class="ingredientes"><strong>$7.500</strong></p>
                    </li>
                    <li>
                        <img src="../img/hamburg3.png" alt=""> Hamburguerpizza
                        <p class="ingredientes">Hamburguesa con salsa y queso estilo pizza</p>
                        <p class="ingredientes"><strong>$15.000</strong></p>
                    </li>
                </ul>
            </div>

            <div class="categoria">
                <h3>Empanadas</h3>
                <ul>
                    <li>
                        <img src="../img/empa1.jpg" alt=""> Carne
                        <p class="ingredientes">Carne picada, cebolla, huevo, aceituna</p>
                        <p class="ingredientes"><strong>$7.000</strong></p>
                    </li>
                    <li>
                        <img src="../img/empa2.png" alt=""> Pollo
                        <p class="ingredientes">Pollo desmenuzado, morrón, cebolla</p>
                        <p class="ingredientes"><strong>$7.000</strong></p>
                    </li>
                    <li>
                        <img src="../img/empa3.png" alt=""> Jamón y queso
                        <p class="ingredientes">Jamón cocido, queso mozzarella</p>
                        <p class="ingredientes"><strong>$7.500</strong></p>
                    </li>
                </ul>
            </div>

            <div class="categoria">
                <h3>Lomos</h3>
                <ul>
                    <li>
                        <img src="../img/lomo1.png" alt=""> Comun
                        <p class="ingredientes">Lomo, pan, mayonesa</p>
                        <p class="ingredientes"><strong>$7.000</strong></p>
                    </li>
                    <li>
                        <img src="../img/lomo2.png" alt=""> Completo
                        <p class="ingredientes">Lomo, queso, tomate, lechuga, huevo</p>
                        <p class="ingredientes"><strong>$7.800</strong></p>
                    </li>
                    <li>
                        <img src="../img/lomo3.png" alt=""> Pizza lomo
                        <p class="ingredientes">Lomo con salsa de tomate y queso gratinado</p>
                        <p class="ingredientes"><strong>$14.000</strong></p>
                    </li>
                </ul>
            </div>

            <div class="categoria">
                <h3>Panchos</h3>
                <ul>
                    <li>
                        <img src="../img/pancho1.png" alt=""> Comun
                        <p class="ingredientes">Pancho clásico con pan y salchicha</p>
                        <p class="ingredientes"><strong>$2.200</strong></p>
                    </li>
                    <li>
                        <img src="../img/pancho2.png" alt=""> Con poncho
                        <p class="ingredientes">Pancho con queso fundido y panceta</p>
                        <p class="ingredientes"><strong>$2.500</strong></p>
                    </li>
                    <li>
                        <img src="../img/pancho3.png" alt=""> Con lluvia de papas
                        <p class="ingredientes">Pancho con papas pay crocantes</p>
                        <p class="ingredientes"><strong>$2.400</strong></p>
                    </li>
                </ul>
            </div>
    </main>

</body>

<script src="../Script/aparecer_opciones.js"></script>

</html>