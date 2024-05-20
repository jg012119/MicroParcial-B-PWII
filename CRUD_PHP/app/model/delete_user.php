<?php
require_once(__DIR__.'/../../config/config.php');
$con = connection();
$id=$_GET["id"];
$sql="DELETE FROM producto WHERE id='$id'";
$query = mysqli_query($con, $sql);
if($query){
    Header("Location: ../view/index.php");
}else{
}
?>