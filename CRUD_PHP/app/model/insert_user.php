<?php
require_once(__DIR__.'/../../config/config.php');
$con = connection();
$id = null;
$name = $_POST['nombreProducto'];
$cant = $_POST['cantidadProducto'];
$precio = $_POST['precioProducto'];
$estado = $_POST['estado'];
$sql = "INSERT INTO producto VALUES('$id','$name','$cant','$precio','$estado')";
$query = mysqli_query($con, $sql);
if($query){
    Header("Location: ../view/index.php");
}else{
}
?>