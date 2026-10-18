<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execice 3 - Tableaux</title>
</head>
<body>
    <?php 
    require "mention.php";
    $notes = [ 
        "Mohamed" => 16,
        "Ahmed" => 14, 
        "Hind" => 13,
        "Aicha" => 15,
        "Samir" => 13,
        "Zakaria" => 13,
        "Rafik" => 10,
        "Ilham" => 9,
        "Hamza" => 7,
        "Sami" => 7,
        "Noura" => 14
    ]; 
    $effectifs = [
        "Très bien" => 0,
        "Bien" => 0,
        "Assez bien" => 0,
        "Passable" => 0,
        "Ajourné" => 0
    ];
    $s = 0;
    $nbrEtud = 0;
    $meilleur = 0;
    $faible = 20;
    $modules = ["Probabilité","Pythhon","MySQL"];
    echo "<h3>Les modules : </h3>";
    foreach($modules as $module){
        echo "- $module <br>";
    }
    echo "<h3>Les modules (par indice) : </h3>";
    echo "$modules[0] - $modules[1] - $modules[2]";
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Mention</th>
        </tr>
        <?php
        echo "<h2>Tableau Des Étudiant : </h2>";
        foreach($notes as $nom => $note){
            $nbrEtud++;
            $s += $note;
            if ($note < SEUIL) {
                echo "<tr style='color:red;'>";
            } else {
                echo "<tr>";
            }
            if($note > $meilleur){
                $meilleur = $note;
            }
            if($note < $faible){
                $faible = $note;
            }
            echo "<td>$nom</td>";
            echo "<td>$note</td>";
            echo "<td>" . mention($note) ."</td>";
            echo "</tr>";
            $m = mention($note);
            $effectifs[$m]++;
        }
        $moyenne = $s / $nbrEtud;
        $Somme = array_sum($notes);
        $count = count($notes);
        $Max = max($notes);
        $Min = min($notes);
        ?>
    </table>
    <?php
        echo "<h2>Statistiques de la classe :</h2>";
        echo "Somme : $s <br>";
        // array_sum($notes)
        echo "Array_Sum : $Somme <br>";
        echo "Le nombre d'etudiant : $count<br>";
        echo "Moyenne : $moyenne <br>";
        echo "Meilleure note : $meilleur <br>";
        echo "Plus faible note : $faible <br>";
        echo "Max note : $Max <br>";
        echo "Min note : $Min <br>";
    ?>
    <?php 
    echo "<h2>Le nombre d'apprenants par mention : </h2>";
    foreach($effectifs as $mention =>$n){
        echo "$mention : $n apprenant(s)<br>";
    }
    ?>
</body>
</html>