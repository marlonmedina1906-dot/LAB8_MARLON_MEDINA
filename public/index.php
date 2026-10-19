<?php
// Cargo el archivo que sabe leer mis datos desde estudiante.json
require_once __DIR__ . '/../lib/estudiante.php';


$est = cargar_estudiante();


date_default_timezone_set('America/Panama');


$ahora = date('d/m/Y H:i');


$nombre_completo = $est['nombre'] . ' ' . $est['apellido'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 8 - <?= htmlspecialchars($est['apellido']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($nombre_completo) ?></h1>

    <?php
    
    echo '<p>Versión de PHP: ' . PHP_VERSION . '</p>';

    
    print '<p>Fecha y hora actual: ' . $ahora . '</p>';

    
    ?>
</body>
</html>