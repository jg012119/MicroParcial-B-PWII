<?php
require_once(__DIR__.'/../../config/config.php');
$con = connection();
$id = $_GET['id'];

$sql = "SELECT * FROM producto WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>