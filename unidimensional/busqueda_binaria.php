<?php
$arreglo = [10, 20, 30, 40, 50, 60, 70, 80];
$buscado = 70;

function busquedaBinaria($arr, $objetivo) {
    $inicio = 0;
    $fin = count($arr) - 1;

    while ($inicio <= $fin) {
        $medio = intdiv($inicio + $fin, 2);

        if ($arr[$medio] == $objetivo) {
            return $medio;
        }

        if ($arr[$medio] < $objetivo) {
            $inicio = $medio + 1;
        } else {
            $fin = $medio - 1;
        }
    }
    return -1;
}

$res = busquedaBinaria($arreglo, $buscado);
echo ($res != -1) ? "Encontrado en el indice: " . $res : "No encontrado";
?>