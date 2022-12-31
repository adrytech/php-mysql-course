<?php 

// Funzioni

function salutare(){    // creare una funzione
    echo "ciao a tutti";
}

salutare();            // Richiamare la funzione

function direQualcosa(){
    echo "fantastico";
}

function init(){       // funzioni con funzioni al suo inteno
    salutare();
    echo "<br>";
    direQualcosa();
}

init();

?>