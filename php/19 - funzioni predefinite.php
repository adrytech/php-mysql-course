<?php

// Funzioni predefinite --> si può vedere nella documentazione ufficiale

// - Funzioni Matematiche

echo sqrt(100); //radice quadra con la funzione sqrt

echo max(34, 78, 95, 12, 67); // questa funzione ricerca il numero più alto

echo min(34, 78, 95, 12, 67); // questa funzione ricerca il numero più basso

echo ceil(3.2); // arrotonda all'intero superiore 

echo floor(3.2); // arrotonda all'intero inferiore

echo round(3.4); // arrotonda all/intero più vicino

echo rand(1,100); // rondomizza a seconda dell range

echo "<br>";

// Funzioni delle Stringe

$messaggio = "Ciao a tutti";

echo strlen($messaggio); // lunghezza della stringa passata tra parentesi

echo str_word_count($messaggio); // numero di parole della striga

echo strtoupper($messaggio); // tutto in maiuscolo

echo strtolower($messaggio); // tutto in minuscolo

echo str_replace("Ciao", "Cari", $messaggio); // ("cosa devo cambiare", "con cosa devo cambiare", di che variabile);

echo "<br>";

// Funzioni sugli array

$fiori = array(
    "rosa",
    "ciclamino",
    "gelsomino",
    "orchidea"
);

$frutta = array(
    "banana",
    "pesca",
    "mandarino",
    "pesca"
);

$vegetali = array_merge($fiori, $frutta); // somma i 2 array fiori e frutta

print_r($vegetali);

echo "<br>";

echo count($vegetali); // calcola il numero degli elementi dell'array

$contaitem = array_count_values($vegetali); // conta quanti elementi uguali ci sono nell'array 
echo $contaitem["pesca"];   // bisogna poi dirgli di contare quell'item specifico; la pesca c'è due volte nell'array

echo "<br>";

if(in_array("mandarino", $frutta)){   // se c'è mandarino nell'array vegetali allora esegui echo
    echo "i mandarini ci sono";
}else{
    echo "i mandarini non ci sono";
}

echo "<br>";

array_push($vegetali, "ananas"); // aggiunge un item all'array vegetali
print_r($vegetali);

echo "<br>";

array_splice($vegetali, 0,4, array("girasole", "tulipano")); // dall'inizio dell'array fino al 4 posto vengono sustituiti gli item con girasole e tulipano
print_r($vegetali);

echo "<br>";

sort($vegetali); // mette in ordine alfabetico gli item dell'array e mette in ordine anche i valori numerici
print_r($vegetali);

?>