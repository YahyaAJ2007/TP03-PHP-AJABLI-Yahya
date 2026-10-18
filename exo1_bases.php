<?php 
/* Auteur : WAFA AIT BAHA 
    Grp:02
    TP03-PHP
*/
echo 'Hello PHP<br>';
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
echo "<h1>Noms de variables</h1>";
$a  = 12;
$A = 13;
echo "a = $a<br>";
echo "A = $A<br>"; 
// Php sensible a la case, car a et A deux variables distinctes.

echo "$a != $A<br>";
echo "a et A deux variables distinctes.<br>";
echo "<h1>Les Constantes : </h1>";
require "config.php";
defined(ETABLISSEMENT);
defined(NOTE_MIN);defined(NOTE_MAX);defined(SEUIL);
echo "Etablissement : ". ETABLISSEMENT . "<br>";
echo "Note_Min : ". NOTE_MIN ."<br>";
echo "Note_Max : ". NOTE_MAX ."<br>";
echo "Seuil : ". SEUIL ."<br>";
var_dump(defined("SEUIL"));
var_dump(defined("INCONNUE"));  
/* 
 1)_ Si en affichez une constante non définie : Php génère une erreur que une constante non définie utilisée
   comme identifiant.
 2)_  La différence entre const et define() :
    - const : déclaration d'une constante à la compilation, et utilise directement dans le code, pas dans un bloc
     conditionnel ordinaire.
    - define() : déclaration d'une constante à l'exécution, et peut être utilisée dans une condition.
*/
echo "<h1>Calcul : </h1>";
$prix_ht = 60;
$tva = 20;
echo "Le prix TTC du produit est de " . $prix_ht * (1+($tva/100)) . " €.<br>";
echo "<h1>Types et conversions : </h1>";
$test = 42;
$test = (string) $test;
var_dump($test);echo "<br>";
var_dump((bool) 0);echo "<br>";
var_dump((bool) 0.0);echo "<br>";
var_dump((bool) "0");echo "<br>";
var_dump((bool) "");echo "<br>";
var_dump((bool) "abc");echo "<br>";
var_dump((bool) []);echo "<br>";
var_dump((bool) null);echo "<br>";
// (int) 3.9, (int) "12abc", (float) "1.5e3", (int) true. 
echo (int) 3.9;echo "<br>";
echo (int) "12abc";echo "<br>";
echo (float) "1.5e3";echo "<br>";
echo (int) true;echo "<br>";
$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;echo "<br>";
echo "Decimal : " . $decimal . "<br>";
echo "Hexadecimal : " . $hexadecimal . "<br>";
echo "Octal : " . $octal . "<br>";
echo "Binaire : " . $binaire . "<br>";
echo "<h1>Chaînes de caractères  : </h1>";
$traitees = "égales à";
$ici = 2;
echo 'Ahmed a dit : "J\'ai réussi"<br>';
echo "Voulez-vous supprimer C:\*.*?<br>";
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo 'Les variables ne seront pas $traitees $ici<br>';
echo "Les variables seront $traitees $ici<br>";
$chaine = "*Bonjour les développeurs*";
$new = trim($chaine,"*");
echo $new . "<br>";
for($i=0;$i < strlen($new);$i++){
    echo $new[$i] . "<br>";
}
?>
