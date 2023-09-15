<?php
//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Obtenemos los datos en variables con le metodo POST
$id = $_POST["id"];
$name = $_POST["nombre"];
$ref = $_POST["referencia"];
$precio = $_POST["precio"];
$peso = $_POST["peso"];
$categoria = $_POST["categoria"];
$stock = $_POST["stock"];
$fecha = $_POST["fecha"];

//Si todo se cumple Insertamos los valores obtenidos en la tabla
$sql = "UPDATE productos SET nombre='$name', referencia='$ref', precio='$precio', peso='$peso ', categoria='$categoria', stock='$stock', fecha='$fecha' WHERE id='$id' ";
//Ejecutamos el Query
$query = mysqli_query($conect , $sql);

if ($query) {
    //Header("Location: index.php");
    echo '<script language="javascript">alert("Producto Actualizado Con Exito");window.location.href="index.php"</script>';
}

?>