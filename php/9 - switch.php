<?php

// Switch

$numero = 45;

switch($numero){

    case 20;  // caso 1
    echo "bel numero ma non sono io";  // se è vero il caso
    break;    // se trova la condizione true si stoppa

    case 48;
    echo "bel numero ma non sono io";
    break;  

    case 45;
    echo "sono io";
    break;

    case 43;
    echo "bel numero ma non sono io";
    break;

    default:   // se tutti i casi sono falsi
    echo "non ho trovato nulla";
    break;
}

?>