<?php

function sommaNumeri($num1, $num2){
    $somma = $num1 + $num2;
    return $somma;  // return esegue fino al return e poi esce dalla funzione quindi se noi sotto al return scriviamo un qualsiasi altro comando non verrà eseguito
}

$risultato = sommaNumeri(15, 20);

echo $risultato;

echo "<br>";

$risultato = sommaNumeri(50, $risultato);

echo $risultato;

?>