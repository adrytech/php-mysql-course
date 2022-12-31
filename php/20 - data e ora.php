<?php

// Ora e Giorno e Data

date_default_timezone_set("Europe/Rome"); // per settare la zona dove la data e l'ora si appoggiano. Di solito è già di default 

echo "Sono le ore: " . date("H:i:s"). " del giorno: ".date("d/m/Y"); // formattazione delle date

echo "<br>";

echo "Sono le ore: " . date("H:i:s"). " del giorno: ".date("d/F/Y"); // le date sono scritte in inglese

echo "<br>";
            // label dice che gennaio ha indice 1 e non 0
$mesi = array(1=>"gennaio","febbraio","marzo","aprile","maggio","giugno","luglio","agosto","settembre","ottobre","novembre","dicembre"); //array per tradurre i mesi
$giorni = array("lunedi","martedì","mercoledì","giovedì","venerdì","sabato","domenica"); //array per tradurre i giorni

echo "Oggi è " . $giorni[date("w")] . " e sono le ore " . date("H:i:s") ." del mese " . $mesi[date("n")]; // così si traduce in italiano


?>