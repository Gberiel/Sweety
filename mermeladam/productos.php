<?php
$productos = [
    ['id' => 1, 'nombre' => 'Producto 1', 'precio' => 10],
    ['id' => 2, 'nombre' => 'Producto 2', 'precio' => 20],
    ['id' => 3, 'nombre' => 'Producto 3', 'precio' => 15]
];

echo json_encode($productos);
?>
