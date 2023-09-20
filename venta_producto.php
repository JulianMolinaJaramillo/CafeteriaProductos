<?php

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

$id = $_POST["id"];
$stock = $_POST["stock"];

$sql = "SELECT * FROM productos";
$query = mysqli_query($conect , $sql);

while($row = mysqli_fetch_array($query)): 
   
   if ($row['id'] == $id) 
   {
    $stockActual = $row['stock'];
   }
//Finalizamos el ciclo While
endwhile;

$stockNuevo = $stockActual - $stock;

if ($stockNuevo < 0) {
    echo '<script language="javascript">alert("Stock sobrepasa el limite del inventario No es posible la venta");window.location.href="index.php"</script>';
}else 

{
    //Si todo se cumple Insertamos los valores obtenidos en la tabla
    $sql = "UPDATE productos SET stock='$stockNuevo' WHERE id='$id' ";
    //Ejecutamos el Query
    $query = mysqli_query($conect , $sql);

if ($query) {
    //Header("Location: index.php");
    echo '<script language="javascript">alert("Venta Finalizada Con Exito");window.location.href="index.php"</script>';
}
}

?>