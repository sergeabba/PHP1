<?php

function demi_perimetre($longueur,$largeur){
    return $longueur+$largeur;
}

function perimetre($longueur,$largeur){
    return ($longueur+$largeur)*2;
}

function surface($longueur,$largeur){
    return $longueur*$largeur;
}

function diagonale($longueur,$largeur){
    return sqrt(pow($longueur,2)+pow($largeur,2));
    
}

?>