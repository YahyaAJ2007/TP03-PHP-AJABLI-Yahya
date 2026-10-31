<?php
require "config.php";
if(isset($_POST["nom"],$_POST["note_info"],$_POST["note_math"])){
    if(!empty($_POST["nom"]) && $_POST["note_info"] !== "" && $_POST["note_math"] !== ""){
        $nom = trim($_POST["nom"]);
        $note_info = $_POST["note_info"];
        $note_math = $_POST["note_math"];
        if (!is_numeric($note_info) || !is_numeric($note_math)) {
                    echo "Erreur : les notes doivent être numériques.";
        }elseif($note_info > NOTE_MAX || $note_info < NOTE_MIN || $note_math > NOTE_MAX || $note_math < NOTE_MIN){
            echo "Erreur : Les points doivent être compris entre ". NOTE_MIN . " et " . NOTE_MAX . ".";
        }else{
            $fichier = fopen("data/notes.csv","a");
            if($fichier != false){
                fputcsv($fichier,[$nom,$note_info,$note_math],";");
                fclose($fichier);
                echo "<h2>Récapitulatif</h2>";
                echo "Nom : ". htmlspecialchars($nom,ENT_QUOTES,'UTF-8') . "<br>";
                echo "Note Informatique : ". htmlspecialchars($note_info,ENT_QUOTES,'UTF-8') . "<br>";
                echo "Note Mathématique : ". htmlspecialchars($note_math,ENT_QUOTES,'UTF-8') . "<br>";
                echo "Fichier crée avec succée";
            }else{
                echo "Erreur d'overture de fichier !!";
            }}
    }else{
        echo "Veuillez remplir tous les champs.";
    }
}else{
    echo "Aucune Donnée recu.";
}
/*En préférer POST à GET pour un mot de passe car Post est plus sécurisé et dissimule les informations.
  En PHP, $_REQUEST est une superglobale qui contient les données transmises au script via plusieurs 
  méthodes ($_GET,$_POST,...) */
    /*a (append) permet d'ajouter le contenu a la fin de fichier et crée si le fichier n'existe pas , 
      alors que w (write) ecrase le contenu d'un fichier si elle existe et créé le fichier si il n'existe pas*/
?>