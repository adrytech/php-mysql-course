<?php

// Operatori
echo "<h2>Operatori Matematici</h2>" . "<br>";

echo 5 + 5 . "<br>"; 
echo 5 - 5 . "<br>";
echo 5 * 5 . "<br>"; 
echo 5 / 5 . "<br>";

echo "5 * 5" . "<br>"; // string

$var1 = 5;
$var2 = 3;

echo $var1 + $var2 . "<br>";

// Operatori di Comparazione
echo "<h2>Operatori di Comparazione</h2>";

echo "<h3>
    uguale == <br>
    identico  === (come valore e come tipo) <br>
    comparazione > / < / >= / <= <br>
    diverso != <br>
    non identico !== <br>
</h3>";

echo "<h2>Operatori Logici</h2>";

echo "<h3> 
    and && <br>
    or || <br>
    not ! <br>
</h3>";

//esempi

if(4<5){
    echo "vero";
}
if(5 === 5 && 5 < 3){
    echo "vero";
}



?>