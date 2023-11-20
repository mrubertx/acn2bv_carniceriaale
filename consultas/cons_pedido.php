<?php

function addPedido(PDO $conexion, $pedidos)
{
    $consulta = $conexion->prepare(
       'INSERT INTO pedidos(nombre,apellido,email,pedido)
       VALUES(:nombre, :apellido, :email, :pedido)'
    );

    $consulta->bindValue(':nombre', $pedidos['nombre']);
    $consulta->bindValue(':apellido', $pedidos['apellido']);
    $consulta->bindValue(':email', $pedidos['email']);
    $consulta->bindValue(':pedido', $pedidos['pedido']);

    $consulta->execute();
}
?>