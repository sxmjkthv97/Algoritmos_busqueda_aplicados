<?php

function busquedaBinaria(array $arreglo, int $objetivo): int
{
    $inicio = 0;
    $fin = count($arreglo) - 1;

    while ($inicio <= $fin) {
        $medio = intdiv($inicio + $fin, 2);

        if ($arreglo[$medio] === $objetivo) {
            return $medio;
        }

        if ($arreglo[$medio] < $objetivo) {
            $inicio = $medio + 1;
        } else {
            $fin = $medio - 1;
        }
    }

    return -1;
}

$arreglo = [10, 20, 30, 40, 50, 60, 70, 80];
$objetivo = 70;

echo "=== BUSQUEDA BINARIA ===" . PHP_EOL;
echo "Arreglo ordenado: [" . implode(", ", $arreglo) . "]" . PHP_EOL;
echo "Buscando: $objetivo" . PHP_EOL;

$posicion = busquedaBinaria($arreglo, $objetivo);

if ($posicion !== -1) {
    echo "Elemento encontrado en la posicion: $posicion" . PHP_EOL;
} else {
    echo "Elemento no encontrado." . PHP_EOL;
}
?>