<?php
try{
    $conexion = new PDO(
        'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',
        DB_USER,
        DB_PASSWORD
    );
}catch(PDOException $e){
    header('Location: error.php');
}

?>