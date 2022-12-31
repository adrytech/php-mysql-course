<?php

// Ciclo For
//                   istruzioni
for ($contatore = 0; $contatore <= 10; $contatore++){
    echo $contatore ."<br>";
}

// For Each

$fiori = array(
    "rosa",
    "ciclamino",
    "gardenia",
    "azalea",
    "orchidea"
);

// Ciclare un array

// Cicla ogni singolo dato "come (as)" un altra variabile: $fiore
foreach($fiori as $fiore){
    echo $fiore . "<br>";
}

// Ciclare un arrey multidimensionali
$libro = array(
    "titolo" => "il nome della rosa",
    "pubblicato nel" => 1980,
    "autore" => "Umberto Eco"
);

//                 2 var perchè è multidimensionale
foreach($libro as $chiavi => $dati){
    echo "$chiavi: $dati" ."<br>"; 
}

?>