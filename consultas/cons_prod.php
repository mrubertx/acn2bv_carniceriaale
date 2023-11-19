<?php 

function getProductos(PDO $conexion){
    $consulta = $conexion->prepare(
        'SELECT id, nombre, precio, descuento, categoria, descripcion
        FROM productos'
    );
    $consulta->execute();

    $productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $productos;
}

?>