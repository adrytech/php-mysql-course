<?php

// Ciclo While

$contatore = 0;

while($contatore <= 10){
    echo $contatore;
    $contatore++; // aumenta finchè non è falsa
}

$spesa = 2; 
$budget = 20;

while($spesa <= $budget){
    echo "Ho speso $spesa € , posso spendere ancora: " .($budget - $spesa)."<br>";
    $spesa+=2; // incremento di 2. L'incremento di uno sarebbe $spesa++;
}



?>