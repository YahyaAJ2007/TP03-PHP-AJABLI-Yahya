<?php

/*  Auteur : Yahya AJABLI
    Groupe : 2
    IAP-S3
    PHP_TP03
*/

function afficher($tab){
    echo"<table border='1' cellpadding='10'/>";
            echo"<tr>";
                echo"<th>Nom</th>";
                echo"<th>Note</th>";
            "</tr>";
            foreach($tab as $nom => $note){
                echo "<tr>";
                echo "<td>$nom</td>";
                echo "<td>$note</td>";
                echo "</tr>";
            }
        echo"</table>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice_03</title>
</head>
<body>
    <?php
    require "mention.php";
    require_once 'config.php';
    $somme = 0;
    $nbrsEtud = 0;
    $meilleur = 0;
    $faible = 20;
    $notes = [ 
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15, 
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9, 
    "Hamza" => 7, "Sami" => 7, "Noura" => 14 
    ];
    $effectifs = [
        "Très bien" => 0,
        "Bien" => 0,
        "Assez bien" => 0,
        "Passable" => 0,
        "Ajourné" => 0
    ];
    $modules = ["Probabilité","MySQL","C++"];
    echo "<h2>Les Modules : </h2>";
    foreach($modules as $module){
        echo "- $module<br>";
    }
    echo "<h2>Les modules (par indice) :</h2>";
    echo "$modules[0] - $modules[1] - $modules[2]";
?>
<h2>Tableaux des Etudiants :</h2>
    <table border="1" cellspacing="1" cellpadding="10">
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Mention</th>
        </tr>
        <?php
        foreach($notes as $nom => $note){
            $nbrsEtud++;
            $somme += $note;
            if($note < SEUIL){
                echo"<tr style='color:red;'>";
            }else{
                echo "<tr>";
            }   
            echo"<td>".$nom."</td>";
            echo"<td>".$note."</td>";
            echo"<td>".mention($note)."</td>";
            echo"</tr>";
            if($meilleur < $note){
                $meilleur = $note;
            }if($faible > $note){
                $faible = $note;
            }
            $me = mention($note);
            $effectifs[$me]++;
        }
        $s = array_sum($notes);
        $c = count($notes);
        $m = $s/$c;
        $max_n = max($notes);
        $min_n = min($notes);    
        $moyenne = $somme/$nbrsEtud;
        ?>
        </table>
        <h2>Statistiques de classe :</h2>
        <?php 
        echo "La somme des notes : $somme<br>";
        echo "La moyenne des notes : $moyenne<br>";
        echo "La meilleur note : $meilleur<br>";
        echo "La plus faible note : $faible<br>";
        echo"<h2>Statistiques de classe (array_suum _ count _ min _ max) : </h2>";
        echo "Array_sum = $s<br>";
        echo "Moyenne = $m<br>";
        echo "Max note = $max_n<br>";
        echo "Min note = $min_n<br>";
        echo "<h2>Le nombre d'apprenants par mention : </h2>";
        foreach($effectifs as $mention => $nbr){
            echo "$mention : $nbr apprenants<br>";
        }
        ?> 
        <h2>Tri : </h2>
        <h3>1. Trié par noms croissants (ksort)</h3>
            <?php
            ksort($notes);
            afficher($notes);
            ?>
        </table>
        <h3>2. Trié par notes décroissants (arsort)</h3>
        
            <?php
            arsort($notes);
            afficher($notes);
            ?>
        </table>
        <h3>3. Trié par noms décroissants (krsort)</h3>
            <?php
            krsort($notes);
            afficher($notes);
            ?>
        </table>
        <h3>2. Trié par notes croissants (asort)</h3>
            <?php
            asort($notes);
            afficher($notes);
            /*La fonction de tri utiliser sur un tableau indexé comme $modules
             est la fonction "sort() : Pour un tri croissant" 
             ou
             "rsort()" Pour un tri décroissant*/
            ?>
        </table>
</body>
</html>