<?php

// Parametri delle funzioni
function messaggioAuguri($messaggio){
    echo $messaggio;
}

messaggioAuguri("Buon compleanno");  // quando richiamo la funzione devo specificare la variabile

echo "<br>";

messaggioAuguri("Buon onomastico");

echo "<br>";

function sommaNumeri($num1, $num2){ // con 2 parametri
    $somma = $num1 + $num2;
    echo $somma;
}

sommaNumeri(1, 2);

?>