<?php

function buscarEnMatriz(array $matriz, int $objetivo): array
{
    for ($fila = 0; $fila < count($matriz); $fila++) {
        for ($columna = 0; $columna < count($matriz[$fila]); $columna++) {
            if ($matriz[$fila][$columna] === $objetivo) {
                return [
                    "encontrado" => true,
                    "fila" => $fila,
                    "columna" => $columna
                ];
            }
        }
    }

    return ["encontrado" => false];
}

$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

$objetivo = 50;

echo "=== BUSQUEDA EN MATRIZ ===" . PHP_EOL;
echo "Matriz:" . PHP_EOL;

foreach ($matriz as $fila) {
    echo "[ " . implode(" ", $fila) . " ]" . PHP_EOL;
}

echo "Buscando: $objetivo" . PHP_EOL;

$resultado = buscarEnMatriz($matriz, $objetivo);

if ($resultado["encontrado"]) {
    echo "Elemento encontrado." . PHP_EOL;
    echo "Fila: " . $resultado["fila"] . PHP_EOL;
    echo "Columna: " . $resultado["columna"] . PHP_EOL;
} else {
    echo "Elemento no encontrado." . PHP_EOL;
}
?>