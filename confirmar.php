<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylecart.css"/>
        <title>Gracias por su compra</title>
    </head>
    <body class="confirmado">
        <h1 align='center'>FELICIDADES</h1> <h2 align='center'>acaba de comprar</h2>
        <?php
        $totalUnidades = 0;
        foreach ($_SESSION['pedido'] as $prod => $unidades) {
            $totalUnidades+=$unidades;
            echo "<p align='center'>$unidades $prod</p>";
        }
        echo "Total de unidades a comprar: $totalUnidades";
        ?>
        <h2 align='center'>Gracias por su compra</h2> 
        <h2>Vuelva pronto</h2> 
        <a href="index.php">TERMINAR</a>
    </body>
</html>