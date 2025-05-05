<?php
$productos = [
    ['marca' => 'Toyota', 'modelo' => 'Corolla', 'precio' => 8000],
    ['marca' => 'Ford', 'modelo' => 'Focus', 'precio' => 7500],
    ['marca' => 'Seat', 'modelo' => 'Ibiza', 'precio' => 6800],
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Coches disponibles</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Lista de Coches</h1>
    <ul>
        <?php foreach ($productos as $coche): ?>
            <li><?= $coche['marca'] ?> <?= $coche['modelo'] ?> - <?= $coche['precio'] ?>€</li>
        <?php endforeach; ?>
    </ul>
    <p><a href="index.php">Volver al inicio</a></p>
</body>
</html>
