<?php

// While e DoWhile

$numero = 0;

//while + condizione e azione
while($numero > 0){ 
    echo "risultato";
    $numero--;
}

//con il do viene prima eseguito e poi verificato
do {
    echo ($numero-- . " " . "questo è il risultato di do while");
} while ($numero > 0);
    



?>