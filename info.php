<?php

require_once('conf/conf.php');
require_once('_conexion.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carniceria Ale - Nosotros</title>
    <?php require('layout/_css.php') ?>
</head>
<body>
    <?php require('layout/_nav.php') ?>

    <div class='container-fluid'>
        <div class='seccion'>
            <h1 class='text text-center'>Nosotros</h1>
        </div>
        <p class='texto'>"Descubre la auténtica experiencia de compra en nuestra carnicería local en el encantador barrio de Turdera, Buenos Aires. En el corazón de la comunidad, nos enorgullece ofrecer carne fresca y de calidad superior para satisfacer tus necesidades culinarias.
                          Nuestra carnicería se ha ganado la confianza de los residentes de Turdera a lo largo de los años, gracias a nuestro compromiso inquebrantable con la calidad y la honestidad en cada corte que ofrecemos. Sabemos lo importante que es para ti tener confianza en los productos que llevas a casa, y es por eso que trabajamos incansablemente para garantizar la confiabilidad de cada pieza que sale de nuestras instalaciones.
                          Desde jugosos cortes de carne hasta asesoramiento experto sobre la mejor elección para tus comidas, nuestro equipo está aquí para brindarte un servicio personalizado y amigable. Ven a experimentar la diferencia de una carnicería arraigada en la comunidad, donde la calidad y la confiabilidad se combinan para ofrecerte la mejor experiencia de compra de carne en Turdera. ¡Esperamos verte pronto!"
        </p>
    </div>
    <?php require('layout/_footer.php') ?>
    <?php require('layout/_js.php') ?>
</body>
</html>