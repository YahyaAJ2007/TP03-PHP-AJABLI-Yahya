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
        print("La Moyenne Général de la classe est : ".$ClasseMoy."<br>");
    }else{
        echo "<p>Il y'a aucune étudiant</p>";
    }
fclose($file);
?>
<?php 
$f = "data/notes.csv";
if(!file_exists($f)){
    echo "le fichier n'existe pas ...";
    exit;
}
$fo = fopen($f,"r");
if($fo === false){
    echo "Echec de l'overture du fichier";
    exit;
}
echo "<h3>Les étudiants : </h3>";
while(!feof($fo)){
    $row = fgets($fo,100);
    if($row !== false){
        $tab = explode(";",$row);
        echo $tab[0] . " ; " . $tab[1] . " ; " . $tab[2] . "<br>";
    }
}
fclose($fo);

/*fgets() est une méthode de lecture bas niveau qui offre plus de contrôle sur les données, mais nécessite un traitement manuel avec explode().
  Alors que, fgetcsv() simplifie la lecture des fichiers CSV en gérant automatiquement les séparateurs et les guillemets.*/
?>