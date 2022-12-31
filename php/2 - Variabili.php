<?php

// Variabili

// variabli devono essere precedute da $
$nome = "Adriano"; 
// . per concatenare
echo "ciao ".$nome;
// il backslash \ serve per usare le virgolette nella frase (escape)
echo $nome. "". " \"ciao\" ";

?>

<html>
    <head>

    </head>
    <body>
        <h1><?php echo $nome;?></h1>
    </body>
</html>