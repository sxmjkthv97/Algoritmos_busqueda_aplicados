<?php
$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];
$buscado = 50;

$encontrado = false;

foreach ($matriz as $f => $fila) {
    $c = array_search($buscado, $fila);
    if ($c !== false) {
        echo "Encontrado en Fila: " . $f . ", Columna: " . $c;
        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "No encontrado";
}
?>