<?php
require "config.php";
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