<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP simple</title>
</head>
<body>
    <h1>Codigo PHP simple</h1>

    <?php
    $nombre = "Juan";
    $edad = 25;
    $producto = "Laptop";
    $precioProducto = 1200;
    $cantidad = 2;

    $totalPagar = $precioProducto * $cantidad;

    echo "<p>Nombre: " . $nombre . "</p>";
    echo "<p>Edad: " . $edad . " años</p>";
    echo "<p>Producto: " . $producto . "</p>";
    echo "<p>Precio del Producto: $" . $precioProducto . "</p>";
    echo "<p>Cantidad: " . $cantidad . "</p>";
    echo "<p>Total a Pagar: $" . $totalPagar . "</p>";
    ?>

</body>
</html>

