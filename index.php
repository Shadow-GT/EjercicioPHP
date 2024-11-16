/*Escribir un programa en PHP que imprima una X construida a base de la letra X y utilizar el carácter de subrayado como espacio. El tamaño de la x se basa en una variable n que indicará el tamaño de la letra para imprimir (en una matriz de n x n). Por ejemplo, para n = 5 se obtiene:

X___X
_X_X_
__X__
_X_X_
X___X

y para n=6 se obtiene:

X____X
_X__X_
__XX__
__XX__
_X__X_
X____X

Si n es igual a cero imprimir "ERROR"*/

<?php
function imprimirX($n) {
    if ($n <= 0) {
        echo "ERROR";
        return;
    }

    $matriz = array_fill(0, $n, array_fill(0, $n, '_'));

    for ($i = 0; $i < $n; $i++) {
        $matriz[$i][$i] = 'X';          
        $matriz[$i][$n - $i - 1] = 'X';  
    }

    // Imprimir la matriz
    foreach ($matriz as $fila) {
        echo implode('', $fila) . PHP_EOL;
    }
}

$n = 6;
imprimirX($n);
?>
