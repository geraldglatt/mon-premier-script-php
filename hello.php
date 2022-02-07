<?php
$nomLivre = "Voyage avec un âne dans les Cévennes";
$anneeSortieLivre = 1925;
$prixLivre = 6; 
$livreLu = false;


echo "Le nom du livre est :".$nomLivre."</br>";
echo "L'année de sortie du livre est en ".$anneeSortieLivre."</br>";
echo "Le prix du livre est de ".$prixLivre." euros.</br>";
if($livreLu === false){
    echo "Je n' ai pas encore lu ce livre !!!";
}else {
    echo "J'ai déjà lu ce livre !!! ";
}






