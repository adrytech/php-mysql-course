<?php

// Arrey

$utente = array(
    "chicco", //0
    "Mario", //1
    "Rossi", //...
    25,     // erà senza ""     
    "Roma",
    "uomo"
);

echo $utente[0]; // [] --> indice

// Arrey associativo

$utente2 = array(
    "username" => "chicco", //label => ""
    "name" => "Mario", 
    "surname" => "Rossi", 
    "età" => 25,       
    "luogo" => "Roma",
    "genere" => "uomo"
);

echo $utente2["luogo"];

//per vedere tutto l'arrey a schermo
print_r($utente2);
var_dump($utente); //per debug

// Arrey multidemensionale --> arrey che contiene un altro arrey

$studenti = array(

    array( //array 0
        "username" => "chicco", //label => ""
        "name" => "Mario", 
        "surname" => "Rossi", 
        "età" => 25,       
        "luogo" => "Roma",
        "genere" => "uomo" 
    ),
    array( //array 1
        "username" => "chicca", 
        "name" => "Carla", 
        "surname" => "Rossi", 
        "età" => 35,       
        "luogo" => "urbino",
        "genere" => "donna" 
    )

);

echo $studenti[1]["username"] . "<br>";


?>