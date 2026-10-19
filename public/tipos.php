<?php
declare(strict_types=1);


define('SEMILLA_LAB8', 'WEB2026-L8');



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