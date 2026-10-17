<?php 
echo 'Hello PHP<br>';
$a  = 12;
$A = 13;
echo "a = $a<br>";
echo "A = $A<br>"; 
echo "$a != $A<br>";
echo "a et A deux variables distinctes.<br>";
require "config.php";
defined(ETABLISSEMENT);
defined(NOTE_MIN);defined(NOTE_MAX);defined(SEUIL);
echo "Etablissement : ". ETABLISSEMENT . "<br>";
echo "Note_Min : ". NOTE_MIN ."<br>";
echo "Note_Max : ". NOTE_MAX ."<br>";
echo "Seuil : ". SEUIL ."<br>";
defined(INCONNUE); 
echo "Seuil : ". "SEUIL" ."<br>";
echo "INCONNUE : ". INCONNUE ."<br>";
// Php sensible a la case, car a et A deux variables distinctes.

#Commentaire ....... 

/*Commentaire
`$x` : Valide
`$_x`: Valide
`$2x` : Invalide , parce qu'il commence par un chiffre
`$x-y`: Invalide , parce que en utilise operation
`$Prix_HT`: Valide
`$prix ht`: Invalide , car il y'a une espace
`$état`: Valide
*/ 
?> 