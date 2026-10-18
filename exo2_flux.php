<?php
/* Auteur : WAFA AIT BAHA 
    Grp:02
    TP03-PHP
*/
require "config.php";
echo "<h1>Structures de contrôle et boucles : </h1>";
function mention($note){
    if($note >= 16){
        return "Très bien";
    }elseif($note >= 14){
        return "Bien";
    }elseif($note>=12){
        return "Assez bien";
    }elseif($note >= SEUIL){
        return "Passable";
    }else{
        return "Ajourné";
    }
}
$m1 = mention(16);echo "16 : $m1<br>";
$m2 = mention(15.9);echo "15.9 : $m2<br>";
$m3 = mention(14);echo "14 : $m3<br>";
$m4 = mention(13);echo "13 : $m4<br>";
$m5 = mention(11);echo "11 : $m5<br>";
$m6 = mention(9);echo "9 : $m6";
echo "<h1>Switch : </h1>";
$date = (int) date("m");
switch($date){
    case 1 :
        echo "Janvier";
        break;
    case 2 :
        echo "Fervrier";
        break;
    case 3 :
        echo "Mars";
        break;
    case 4 :
        echo "Avril";
        break;
    case 5 :
        echo "Mai";
        break;
    case 6 :
        echo "Juin";
        break;
    case 7 :
        echo "Juillet";
        break;
    case 8 :
        echo "Août";
        break;
    case 9 :
        echo "Septembre";
        break;
    case 10 :
        echo "Octobre";
        break;
    case 11 :
        echo "Novembre";
        break;
    case 12 :
        echo "Decembre";
        break;
    default :
        echo "Mois introuvable !!";
}
/* 3)_ Sans break, l’exécution continue dans les case suivants, 
       même si leur condition ne correspond pas.
*/
echo "<h1>Boucles : </h1>";
echo "<h2>1.</h2>";
for($i=0;$i <= 6;$i++){
    for($j=0;$j <= $i;$j++){
        echo "*";
    }
    echo "<br><br>";
}
echo "<h2>2.</h2>";
$i = 0;
while($i <= 20){
    if($i == 10){
        echo "<strong>$i </strong>";
    }else{
        echo "$i ";
    }
    $i+=2;
}
echo "<h2>3.</h2>";
for($i=0;$i<=10;$i++){
    if($i % 2 != 0){
        continue;
    }else{
        echo "$i ";
    }
}
echo "<h2>4.</h2>";
$i=1;
while($i<=15){
    switch($i){
        case 5 :
            echo "At 5<br>";
            break;
        case 10 :
            echo "At 10; quitting";
    }
    $i++;
}
echo "<h2>5.</h2>";
$i = 0;
do{
    if($i == 10){
        echo "<strong>$i </strong>";
    }else{
        echo "$i ";
    }
    $i+=2;
}while($i <= 20);
/*La différence : while vérifie la condition avant l’exécution, 
 tandis que do-while exécute le bloc au moins une fois avant de vérifier la condition.*/
?>