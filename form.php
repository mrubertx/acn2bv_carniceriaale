<?php

require_once('conf/conf.php');
require_once('_conexion.php');
require_once('consultas/cons_pedido.php');
require_once('funciones/seguridad.php');

$nombre= test_input($_POST['nombre'] ?? null);
$apellido= test_input($_POST['apellido'] ?? null);
$email= test_input($_POST['email'] ?? null);
$pedido= test_input($_POST['pedido'] ?? null);
$errores = [];

$pedidos = [
    'nombre' => $nombre,
    'apellido' => $apellido,
    'email' => $email,
    'pedido' => $pedido,
];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(empty($nombre)){
        $errores[] = '*Debe de ingresar un nombre';
    }
    if(empty($apellido)){
        $errores[] = '*Debe de ingresar un apellido';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores[] = '*Debe de ingresar un email valido';
    }
    if(empty($pedido)){
        $errores[] = '*Debe de ingresar un pedido';
    }
    if(empty($errores))
    {
      addPedido($conexion, $pedidos);
      header('Location: pedido_realizado.php');
      exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carniceria Ale - Pedidos</title>
    <?php require('layout/_css.php') ?>
    <link rel='icon' href='img/logo.png'>
</head>
<body>
    <!--nav-->
    <?php require('layout/_nav.php') ?>
    <!--form-->
    <div class='seccion'>
      <h1 class='text text-center'>Ingrese su pedido</h1>
    </div>
    <div class='container' >
            <form action="<?php echo BASE_URL ?>form.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="nombre" class="form-label label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="<?php echo $nombre ?>">
                </div>
                <div class="mb-3">
                  <label for="apellido" class="form-label label">Apellido</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" value="<?php echo $apellido ?>">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" value="<?php echo $email ?>">
                </div>
                <div class="mb-3">
                  <label for="pedido" class="form-label label">Pedido</label>
                  <textarea type="text" class="form-control" id="pedido" name="pedido" placeholder="Ingrese su pedido" value="<?php echo $pedido ?>"></textarea>
                </div><br> 
                <div class='d-grid gap-2'>
                <button class='btn btn btn-primary' type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form><br>
            <ul>
                <?php foreach($errores as $error): ?>
                 <li class= "text text-danger"><?php echo $error ?></li>
                <?php endforeach ?>
            </ul>
    </div>
    <!--footer-->
    <?php require('layout/_footer.php') ?>

    <!--js-->
    <?php require('layout/_js.php') ?>
</body>
</html>