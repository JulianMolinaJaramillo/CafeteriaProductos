<?php
//Incluimos el archivo connection
include('connection.php');

$conect = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM productos WHERE id=$id";
//Ejecutamos el Query para la actualizacion de datos
$query = mysqli_query($conect , $sql);
$row = mysqli_fetch_array($query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Editar Productos</title>
</head>
<body>
    <div class="users-form">
        <form action="edit_producto.php" method ="POST">
            <h1> Editar Producto </h1>
            <!-- Reasignamos todos los datos para que solo se actualice lo que se desea modificar --> 
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="nombre" placeholder="Nombre"value="<?= $row['nombre'] ?>" >
            <input type="text" name="referencia" placeholder="Número de Referencia"value="<?= $row['referencia'] ?>">
            <input type="text" name="precio" placeholder="Precio"value="<?= $row['precio'] ?>">
            <input type="text" name="peso" placeholder="Peso"value="<?= $row['peso'] ?>">
            <input type="text" name="categoria" placeholder="Categoria del Producto"value="<?= $row['categoria'] ?>">
            <input type="text" name="stock" placeholder="Stock de Inventario"value="<?= $row['stock'] ?>">
            <input type="text" name="fecha" placeholder="Fecha de Creación"value="<?= $row['fecha'] ?>">

            <input type="submit" value="Actualizar Producto" class="users-table--edit">


        </form>
    </div>
    
</body>
</html>