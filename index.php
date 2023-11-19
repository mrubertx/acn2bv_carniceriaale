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
</head>
<body>
    <!--nav-->
    <?php require('layout/_nav.php') ?>
    <!--contenido-->
    <div class='container-fluid'>
        <div class='seccion'>
            <h1 class='text text-center'>Productos mas pedidos</h1>
        </div>
            <?php foreach ($productos as $item) : ?>
                <div class= 'd-flex flex-wrap'>
                    <div class="card center">
                        <img src="img/icono/<?php echo $item['categoria']?>.png" class="card-img-top" alt="<?php echo $item['categoria'] ?>">
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
            
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php if($paginado_enlaces['anterior']): ?>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginado_enlaces['primero'] ?>"> Primero </a>                        
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginado_enlaces['anterior'] ?>"> <?php echo $paginado_enlaces['anterior'] ?> </a>
                    </li>
                <?php endif ?>
                <li class="page-item active"> 
                    <span class="page-link">
                        <?php echo $paginado_enlaces['actual'] ?> 
                    </span>
                </li>
                <?php if($paginado_enlaces['siguiente']): ?>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginado_enlaces['siguiente'] ?>"> <?php echo $paginado_enlaces['siguiente'] ?> </a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="?pag=<?php echo $paginado_enlaces['ultimo'] ?>"> Último </a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>
    </div>
    <!--footer-->
    <?php require('layout/_footer.php') ?>
    <!--js-->
    <?php require('layout/_js.php') ?>
</body>
</html>