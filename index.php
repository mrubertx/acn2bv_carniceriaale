<?php

require_once('conf/conf.php');
require_once('_conexion.php');
require_once('consultas/cons_prod.php');
require_once('funciones/func_paginador.php');

$productos = getProductos($conexion);

//paginado

$cantidad = count($productos);
$pagina_actual = $_GET['pag'] ?? 1;
$cuantos_por_pagina = 5;
$paginado_enlaces = paginador_enlaces($cantidad, $pagina_actual, $cuantos_por_pagina);
$productos = paginador_lista($productos, $pagina_actual, $cuantos_por_pagina);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carniceria Ale - Inicio</title>
    <?php require('layout/_css.php') ?>
    <link rel='icon' href='img/logo.png'>
</head>
<body>
    <!--nav-->
    <?php require('layout/_nav.php') ?>

    <!--contenido-->
    <div class='seccion'>
            <h1 class='text text-center'>Productos mas pedidos</h1>
    </div>
    <div class='container-fluid'>    
            <?php foreach ($productos as $item) : ?>
                <div class= 'contenedor'>
                    <div class="card center">
                        <img src="img/prod/<?php echo $item['nombre']?>.png" class="card-img-top img" alt="<?php echo $item['nombre'] ?>">
                            <div class="card-body">
                                <h2 class='card-title text-center'><?php echo $item['nombre'] ?></h2>
                                <p class="text-center"><?php echo $item['descripcion'] ?></p>
                                <p class='text-center'>
                                <?php if ($item['descuento'] > 0) :?>
                                <span class="text-decoration-line-through">Precio regular $<?php echo $item['precio'] ?> </span>
                                <span class="text text-success">Precio CUENTA DNI $<?php echo $item['precio'] - $item['descuento'] ?> </span>
                                <?php else : ?>
                                <span>Precio regular $<?php echo $item['precio'] ?></span>
                                </p>
                                <?php endif ?>
                            </div>
                    </div>
                </div>
            <?php endforeach ?>
    </div>  
    <!--paginador-->                             
    <?php require('layout/_paginador.php') ?>
    <!--footer-->
    <?php require('layout/_footer.php') ?>

    <!--js-->
    <?php require('layout/_js.php') ?>
</body>
</html>