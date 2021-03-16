<?php

/*

Créer une fonction php nommée "writeSecretSentence" 
avec en argument 2 paramètres de type chaîne de caractères.
A l'intérieure de la fonction:
"PARAMETRE_1" s'incline face à "PARAMETRE_2"
en remplaçant "PARAMETRE_2" par le texte recu en paramêtre 
lors de l'appel.
*/

function writeSecretSentence(string $PARAMETRE_1,string $PARAMETRE_2)
{
    $message="$PARAMETRE_1 s'incline face à $PARAMETRE_2";
    return $message;
}

echo writeSecretSentence("Toby","Lion");
