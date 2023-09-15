<?php
//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Obtenemos los datos en variables con le metodo POST
$id = null;
$name = $_POST["nombre"];
$ref = $_POST["referencia"];
$precio = $_POST["precio"];
$peso = $_POST["peso"];
$categoria = $_POST["categoria"];
$stock = $_POST["stock"];
$fecha = $_POST["fechaCreacion"];

//Validamos que las casillas esten llenas
if ($name == "") {
    echo '<script language="javascript">alert("Falta dato Nombre");window.location.href="index.php"</script>';
}elseif ($ref == "") {
    echo '<script language="javascript">alert("Falta Número de Referencia");window.location.href="index.php"</script>';
}elseif ($precio == null) {
    echo '<script language="javascript">alert("Falta Precio");window.location.href="index.php"</script>';
}elseif ($peso == null) {
    echo '<script language="javascript">alert("Falta Peso");window.location.href="index.php"</script>';
}elseif ($categoria == "") {
    echo '<script language="javascript">alert("Falta Categoria del Producto");window.location.href="index.php"</script>';
}elseif ($stock == null) {
    echo '<script language="javascript">alert("Falta Stock de Inventario");window.location.href="index.php"</script>';
}elseif ($fecha == "") {
    echo '<script language="javascript">alert("Falta Fecha de Creacion");window.location.href="index.php"</script>';
}else 
{
    //Si todo se cumple Insertamos los valores obtenidos en la tabla
    $sql = "INSERT INTO productos VALUES ('$id','$name','$ref','$precio','$peso','$categoria','$stock','$fecha')";
    //Ejecutamos el Query
    $query = mysqli_query($conect , $sql);

    //Header, una vez se inserten los datos, redirecciona al usuario al index o a recargar archivo  
    if ($query) {
    //Header("Location: index.php");
    echo '<script language="javascript">alert("Producto agregado con Exito");window.location.href="index.php"</script>';
}

}
?>