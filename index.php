<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
        <link rel="stylesheet" type="text/css" href="css/rule_responsive.css"/>
        <link rel="stylesheet" type="text/css" href="css/stylecart.css"/>
        <title>Shopping Cart</title>
    </head>
    <body class="home">
        <div id="main" class="container">
            <div class="row-fluid" id="content">
                <div class="row-fluid">
                    <div class="span12">
                        
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span4">

                    </div>
                    <div class="span4">
                        <h1>Bienvenido a la tienda</h1> 
                        <form action="productos.php" method="post"> 
                            <label for="nombre">Ingrese su nombre</label>
                            <input id="nombre" name="name" type="text">
                            <input name="ingresar" type="Submit" value="ingresar"> 
                        </form> 
                    </div>
                    <div class="span4">

                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                       
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
