<?php
declare(strict_types=1);


define('SEMILLA_LAB8', 'WEB2026-L8');
   const LAB_NUMERO = 8;


require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();


$huella = hash('sha256', $est['cedula'] . '|' . SEMILLA_LAB8);

$codigo = substr($huella, 0, 8);                          // string
$n1     = hexdec(substr($huella, 8, 2)) % 90 + 10;        // int
$n2     = hexdec(substr($huella, 10, 2)) % 90 + 10;       // int
$precio = round(hexdec(substr($huella, 12, 4)) / 100, 2); // float
$activo = ($n1 % 2 === 0);                                // bool: true si n1 es par


$suma     = $n1 + $n2;
$division = round($n1 / $n2, 2);
$resto    = $n1 % $n2;
$cociente = intdiv($n1, $n2);

$nulo  = null;
$lista = [1, 2, 3];


// var_dump muestra el tipo y el valor de cada variable
var_dump($codigo, $n1, $precio, $activo, $nulo, $lista);

// Conversión de tipos (type juggling)
$suma_str = "5" + "10";          // 15: el operador + convierte los strings numéricos a número
$concat   = "5" . "10";          // "510": el punto concatena texto, no suma
$cast_int = (int) "12abc";       // 12: el cast toma los dígitos del inicio y descarta el resto
$float_eq = (0.1 + 0.2 == 0.3);  // false: los decimales binarios no son exactos (0.30000000000000004)
$loose    = ("10" == "1e1");     // true: == compara como números y "1e1" vale 10
$strict   = ("10" === "1e1");    // false: === exige mismo tipo y mismo texto

$resultado = [
    'codigo'   => $codigo,
    'n1'       => $n1,
    'n2'       => $n2,
    'suma'     => $suma,
    'division' => $division,
    'resto'    => $resto,
    'cociente' => $cociente,
    'precio'   => $precio,
    'activo'   => $activo,
    'tipos'    => [
        'codigo' => gettype($codigo),
        'n1'     => gettype($n1),
        'precio' => gettype($precio),
        'activo' => gettype($activo),
        'nulo'   => gettype($nulo),
        'lista'  => gettype($lista),
    ],
    'juggling' => [
        'suma_str' => $suma_str,
        'concat'   => $concat,
        'cast_int' => $cast_int,
        'float_eq' => $float_eq,
        'loose'    => $loose,
        'strict'   => $strict,
    ],
    'constantes' => [
        'SEMILLA_LAB8' => constant('SEMILLA_LAB8'),
        'LAB_NUMERO'   => LAB_NUMERO,
        // Una constante ya definida no se puede redefinir: define() devuelve false
        'redefinir'    => @define('SEMILLA_LAB8', 'otra'),
    ],
];

echo "\n##JSON## " . json_encode($resultado) . "\n";