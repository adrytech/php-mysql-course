<?php

// Variabili locali e globali

$globale = "Io sono fuori";

function trovaVariabili(){
    global $locale;
    $locale = "Io sono dentro";
    
}
trovaVariabili();

echo $globale . " " . $locale;  // non accede a quella locale perchè è dentro alla funzione a meno non inizializziamo la funzione (riga 12) e dichiariamo global la variabile (riga 8)


?>