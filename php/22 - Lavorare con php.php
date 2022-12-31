<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Funzioni dei file</h1>
<h1>Fopen / Fclose</h1>

<?php

if(file_exists("22 - risorsa.txt")){
    $mioFile = fopen("22 - risorsa.txt", "r");
    echo "File trovato";
    fclose($mioFile);
}else{
    echo "Risorsa non trovata!";
}


?>

<h1>Fread</h1>

<?php

$gestioneFile = fopen("22 - risorsa.txt", "r") or die("impossibile accedere al file");
$contenuto = fread($gestioneFile, filesize("22 - risorsa.txt"));

echo $contenuto;

fclose($gestioneFile);

?>

<h1>file_get_content</h1>

<?php

$contenutoFile = file_get_contents("22 - risorsa.txt") or die("operazione fallita");
echo $contenutoFile;

?>

<h1>fwrite</h1> 

<?php
//per sostituire il testo del file con fwrite
$gestioneFIle = fopen("22 - risorsa.txt", "w") or die("impossibile accedere al file");
fwrite($gestioneFIle, "Scrivi un'altra riga") or die("Non posso scrivere nel file");
$contenutoFile = file_get_contents("22 - risorsa.txt") or die("operazione fallita");
echo $contenutoFile;

?>

<h1>file_put-contents</h1>

<?php
//inserire un contenuto senza sovrascriverlo
file_put_contents("22 - risorsa.txt", " questo è un altro contenuto", FILE_APPEND);
$contenutoFile = file_get_contents("22 - risorsa.txt") or die("operazione fallita");
echo $contenutoFile;

?>

</body>
</html>