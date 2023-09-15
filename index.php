<?php
/**Codigo Fuente:
 * Autor: Julian David Molina Jaramillo
 * CC: 1152687834
 * Fecha: 15/09/2023
 */
//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Definimos un Query SQL
$sql = "SELECT * FROM productos";
//Ejecutamos el Query
$query = mysqli_query($conect , $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Cafetería Konecta</title>
</head>
<body>
    <div class="users-form">

        <form action="insert_producto.php" method ="POST">
            <h1> Ingresar Producto </h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="referencia" placeholder="Número de Referencia">
            <input type="text" name="precio" placeholder="Precio">
            <input type="text" name="peso" placeholder="Peso">
            <input type="text" name="categoria" placeholder="Categoria del Producto">
            <input type="text" name="stock" placeholder="Stock de Inventario">
            <input type="text" name="fechaCreacion" placeholder="Fecha de Creación">
            <input type="submit" value="Agregar Producto">


        </form>
    </div>

    <div class="users-table">
        <h2>Productos Registrados</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha Creacion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php 
                //Por cada producto nuevo que se encuentre en la base de datos imprime la infomracion
                while($row = mysqli_fetch_array($query)): 
                ?>
                <tr>
                <th><?= $row['id'] ?></th>
                <th><?= $row['nombre'] ?></th>
                <th><?= $row['referencia'] ?></th>
                <th><?= "$".$row['precio'] ?></th>
                <th><?= $row['peso']." gr" ?></th>
                <th><?= $row['categoria'] ?></th>
                <th><?= $row['stock'] ?></th>
                <th><?= $row['fecha'] ?></th>

                <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                <th><a href="delete_producto.php?id=<?= $row['id'] ?>" class="users-table--edit">Eliminar</a></th>                 
                </tr>  
                <?php 
                //Finalizamos el ciclo While
                endwhile;
                ?>       
                   
            </tbody>
        </table>
    </div>
    <br/>
</body>
</html>