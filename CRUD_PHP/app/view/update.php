<?php require_once("../model/get_product.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../public/css/style.css" rel="stylesheet">
    <title>Editar usuarios</title>
</head>
<body>
    <div class="users-form">
        <form action="../model/edit_user.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="nombreProducto" placeholder="Nombre del Producto" value="<?= $row['nombreProducto'] ?>">
            <input type="text" name="cantidadProducto" placeholder="Cantidad del Producto" value="<?= $row['cantidadProducto'] ?>">
            <input type="text" name="precioProducto" placeholder="Precio del Producto" value="<?= $row['precioProducto'] ?>">
            <input type="text" name="estado" placeholder="Estado" value="<?= $row['estado'] ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>