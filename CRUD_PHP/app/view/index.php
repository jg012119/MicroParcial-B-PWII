<?php
require_once(__DIR__.'/../../config/config.php');
$con = connection();    
$sql = "SELECT * FROM producto";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/style.css" rel="stylesheet">
    <title>Users CRUD</title>
    <script>
        function confirmarEliminacion(id) {
            var confirmacion = confirm("¿Estás seguro de que deseas eliminar este producto?");
            if (confirmacion) {
                window.location.href = "../model/delete_user.php?id=" + id + "&confirm=yes";
            }
        }
    </script>
</head>
<body>
    <div class="users-form">
        <h1>Crear Producto</h1>
        <form action="../model/insert_user.php" method="POST">
            <input type="text" name="nombreProducto" placeholder="Nombre del Producto">
            <input type="text" name="cantidadProducto" placeholder="Cantidad del Producto">
            <input type="text" name="precioProducto" placeholder="Precio">
            <input type="text" name="estado" placeholder="Estado">

            <input type="submit" value="Agregar">
        </form>
    </div>
    <div class="users-table">
        <h2>Productos registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombreProducto'] ?></th>
                        <th><?= $row['cantidadProducto'] ?></th>
                        <th><?= $row['precioProducto'] ?></th>
                        <th><?= $row['estado'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <td><a href="javascript:confirmarEliminacion(<?= $row['id'] ?>);" class="users-table--delete">Eliminar</a></td>
                        <td><button onclick="mostrarInformacion('<?= $row['nombreProducto'] ?>', <?= $row['cantidadProducto'] ?>, <?= $row['precioProducto'] ?>, '<?= $row['estado'] ?>')" class="users-table--consultar">Consultar</button></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div id="infoProducto"></div>
    <script src="../../public/js/script.js"></script>
</body>
</html>