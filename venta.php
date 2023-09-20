<?php
//Incluimos el archivo connection
include('connection.php');

$conect = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>venta De Productos</title>
</head>
<body>
    <div class="users-form">
        <form action="venta_producto.php" method ="POST">
            <h1> Venta De Producto </h1>
            <!-- Solicitamos los input solo de los datos deseados --> 
            <input type="text" name="id" placeholder="ID Producto">
            <input type="text" name="stock" placeholder="Cantidad a vender">

            <input type="submit" value="Actualizar Producto" class="users-table--edit">


        </form>
    </div>
    
</body>
</html>