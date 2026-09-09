<?php

function busquedaSalto(array $arreglo, int $objetivo): int
{
    $n = count($arreglo);

    if ($n === 0) {
        return -1;
    }

    $salto = max(1, (int) floor(sqrt($n)));
    $inicio = 0;
    $fin = $salto;

    while ($inicio < $n && $arreglo[min($fin, $n) - 1] < $objetivo) {
        $inicio = $fin;
        $fin += $salto;

        if ($inicio >= $n) {
            return -1;
        }
    }

    for ($i = $inicio; $i < min($fin, $n); $i++) {
        if ($arreglo[$i] === $objetivo) {
            return $i;
        }
    }

    return -1;
}

$arreglo = [10, 20, 30, 40, 50, 60, 70, 80, 90];
$objetivo = 70;

echo "=== BUSQUEDA POR SALTO ===" . PHP_EOL;
echo "Arreglo ordenado: [" . implode(", ", $arreglo) . "]" . PHP_EOL;
echo "Buscando: $objetivo" . PHP_EOL;

$posicion = busquedaSalto($arreglo, $objetivo);

if ($posicion !== -1) {
    echo "Elemento encontrado en la posicion: $posicion" . PHP_EOL;
} else {
    echo "Elemento no encontrado." . PHP_EOL;
}
?>