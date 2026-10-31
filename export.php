<?php
$resultat = [];
$file = fopen("data/notes.csv","r");
while(($ligne = fgetcsv($file,1000,";")) !== false){
    $nom = $ligne[0];
    $info = $ligne[1];
    $math = $ligne[2];
    $moyenne = ($info+$math)/2;
    $resultat[] = [
        "nom"=>$nom,
        "notes"=>["note_info"=>$info,"note_math"=>$math],
        "moyenne"=>$moyenne
    ];
}
fclose($file);
$json = json_encode($resultat,JSON_PRETTY_PRINT);
file_put_contents("data/notes.json",$json);
$json = file_get_contents("data/notes.json");
$resultat = json_decode($json,true);
print_r($resultat);

$serializeRes = serialize($resultat);

$r = json_encode($resultat,JSON_PRETTY_PRINT);

echo "<h2>Serialize : </h2>";
echo $serializeRes;
echo "<h2>Json_encode : </h2>";
echo $r;
?>