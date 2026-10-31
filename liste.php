<?php
$somme = 0;
$nbrEtudiant = 0;
$fichier = "data/notes.csv";
if(!file_exists($fichier)){
    echo "Le fichier n'existe pas !!";
    exit;
}
$file = fopen($fichier,"r");
if($file === false){
    echo "Echec de l'overture du fichier";
    exit;
}
echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr>";
            echo "<th>Nom</th>";
            echo "<th>Informatique</th>";
            echo "<th>Mathématique</th>";
            echo "<th>Moyenne</th>";
            echo"<th>Mention</th>";
echo "</tr>";
while(($ligne = fgetcsv($file,1000,";")) !== false){
    $nom = $ligne[0];
    $info = (float)$ligne[1];
    $math = (float)$ligne[2];
    $moyenne = ($info+$math)/2;
    if($moyenne>=16){
        $mention = "Trés Bien";
    }elseif($moyenne >= 14){
        $mention = "Bien";
    }elseif($moyenne>=12){
        $mention = "Assez Bien";
    }elseif($moyenne >= 10){
        $mention = "Passable";
    }else{
        $mention = "Ajourné";
    }
        echo "<tr>";
        echo "<td>" . htmlspecialchars($nom) . "</td>";
        echo "<td>$info</td>";
        echo "<td>$math</td>";
        echo "<td>$moyenne</td>";
        echo "<td>$mention</td>";
        echo "</tr>";
        $somme+=$moyenne;
        $nbrEtudiant++;
}
echo "</table>";
if($nbrEtudiant > 0){
        $ClasseMoy = $somme/$nbrEtudiant;
        print("La Moyenne Général de la classe est : ".$ClasseMoy);
    }else{
        echo "<p>Il y'a aucune étudiant</p>";
    }
fclose($file);
?>