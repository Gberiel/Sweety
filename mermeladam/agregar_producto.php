<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $productos = [
        ['id' => 1, 'nombre' => 'Producto 1', 'precio' => 10],
        ['id' => 2, 'nombre' => 'Producto 2', 'precio' => 20],
        ['id' => 3, 'nombre' => 'Producto 3', 'precio' => 15]
    ];

    foreach ($productos as $producto) {
        if ($producto['id'] == $id) {
            echo '<span>' . $producto['precio'] . '</span>€ <button class="eliminar">Eliminar</button>';
            break;
        }
    }
}
?>
