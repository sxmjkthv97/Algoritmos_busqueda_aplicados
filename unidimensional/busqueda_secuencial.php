<?php
$arreglo = [10, 25, 8, 40, 15, 30];
$buscado = 40;

$posicion = array_search($buscado, $arreglo);

if ($posicion !== false) {
    echo "Encontrado en el indice: " . $posicion;
} else {
    echo "No encontrado";
}
?>