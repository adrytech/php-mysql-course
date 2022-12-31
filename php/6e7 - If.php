<?php

$anni = 16;

//  se hai 18 anni entri se no no
if($anni >= 18){
    echo "Puoi Entrare";
}else{
    echo "Non puoi entrare"; 
}

// se hai 18 anni puoi entrare, se ne hai tra i 15 e 17 puoi entrare con un accesso limitato, se no no
if($anni >= 18){
    echo "Puoi Entrare";

}elseif($anni >= 15 && $anni < 18){
    echo "Puoi avere un accesso limitato";
}else{
    echo "Non puoi entrare";
}

// concatenazione di if
$giorno = "domenica";
$ora = "mattina";

if($giorno == "domenica"){
    if($ora == "mattina"){
        echo "esco a fare una passeggiata";
    }
}else{
    echo "sto a casa";
}

?>