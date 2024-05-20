<?php
require_once(__DIR__.'/../../config/config.php');
$con = connection();
$id=$_POST["id"];
$name = $_POST['nombreProducto'];
$cant = $_POST['cantidadProducto'];
$precio = $_POST['precioProducto'];
$estado = $_POST['estado'];
$sql="UPDATE producto SET nombreProducto='$name', cantidadProducto='$cant', precioProducto='$precio', estado='$estado' WHERE id='$id'";
$query = mysqli_query($con, $sql);
if($query){
    Header("Location: ../view/index.php");
}else{
}
?>