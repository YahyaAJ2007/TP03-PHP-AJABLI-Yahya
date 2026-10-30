<?php
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$genre = $_GET['Genre'];
echo "Nom : $nom";echo "<br>";
echo "Prenom : $prenom";echo "<br>";
echo "Genre : $genre";echo "<br>";
if($genre == "M"){
    echo "Bonjour Monsieur $prenom $nom";
}else{
    echo "Bonjour Madame $prenom $nom";
}
?>