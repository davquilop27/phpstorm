<?php


$alumnos = [
    "David" => 8.5,
    "Laura" => 6.0,
    "Carlos" => 4.2,
    "Marta" => 9.3,
];

function calificacion(float $nota): string
{
    if ($nota < 5) {
        return "Suspenso";
    } elseif ($nota < 7) {
        return "Aprobado";
    } elseif ($nota < 9) {
        return "Notable";
    }
    return "Sobresaliente";
}

echo "=== LISTADO DE NOTAS ===\n";

$suma = 0;
foreach ($alumnos as $nombre => $nota) {
    echo str_pad($nombre, 10) . $nota . " -> " . calificacion($nota) . "\n";
    $suma += $nota;
}

$media = $suma / count($alumnos);
echo "\nNota media de la clase: " . round($media, 2) . "\n";