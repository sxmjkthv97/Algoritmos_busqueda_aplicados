<?php
$arreglo = [10, 25, 8, 40, 15, 30];
$objetivo = 40;

echo "=== BUSQUEDA SECUENCIAL ===" . PHP_EOL;
echo "Arreglo: [" . implode(", ", $arreglo) . "]" . PHP_EOL;
echo "Buscando: $objetivo" . PHP_EOL;

$posicion = busquedaSecuencial($arreglo, $objetivo);

if ($posicion !== -1) {
    echo "Elemento encontrado en la posicion: $posicion" . PHP_EOL;
} else {
    echo "Elemento no encontrado." . PHP_EOL;
}
?>