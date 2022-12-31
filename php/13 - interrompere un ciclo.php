<?php

// Interrompere un Ciclo con Break

$utente = 1;
$numeroUtenti = 20;

while($utente <= $numeroUtenti){
    echo "Stampa l'utente numero $utente <br>";
    echo "Devono essere stampati ancora " . ($numeroUtenti - $utente) . " utenti" . "<br>";



    
    if($utente >= 5){ // per limitare in numero di utenti a max 5
        break;
    }

    $utente++;
}

// Interrompere un Ciclo con Continue

echo "<hr>";

for($cifra=1; $cifra<20; $cifra++){

    if($cifra == 10){
        continue; // per saltare la cifra 10
    }
          
    echo "Stampa il numero $cifra <br>";
    
}

// Interrompere un Ciclo con Exit


echo "<hr>";

$dividi = 5;

for ($numero = $dividi; $numero >= 0; $numero--){

    if($numero == 0){ // bisogna far uscire 5:0 pk essendo impossibile viene a schermo un errore e quindi si può uscire con exit
        exit; 
    }

    echo "$dividi / $numero = " .($dividi/$numero)."<br>";
    
}


// Interrompere un Ciclo con Exit

echo "<hr>";

$dividi2 = 5;

for ($numero2 = $dividi2; $numero2 >= 0; $numero2--){

    if($numero2 == 0){
        die( "inutile stampare una divisione che non produce risultato"); // il die fa uscire come il exit ma puoi aggiungere un messaggio all'azione
    }

    echo "$dividi2 / $numero2 = " .($dividi2/$numero2)."<br>";

}


?>