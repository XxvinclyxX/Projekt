<?php
#Passwort Anforderungen
if (empty($passwort)){

    $falsch = true;

    $passwortFalsch = "Bitte Passwort eingeben.";

   } else if (preg_match("/[a-z]/", $passwort)

       && preg_match("/[A-Z]/", $passwort)

       && preg_match("/[0-9]/", $passwort)) {

    $falsch = true;

    $passwortFalsch = "Das Passwort muss Kleinbuchstaben, Großbuchstaben und Zahlen enthalten.";

   } else if (strlen($passwort) <8) {

    $falsch = true;

    $passwortFalsch= "Das Passwort muss mindestens 8 Zeichen lang sein.";

   }

?>