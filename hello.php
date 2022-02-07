<?php
// $nomLivre = "Voyage avec un âne dans les Cévennes";
// $anneeSortieLivre = 1925;
// $prixLivre = 6; 
// $livreLu = false;


// echo "Le nom du livre est :".$nomLivre."</br>";
// echo "L'année de sortie du livre est en ".$anneeSortieLivre."</br>";
// echo "Le prix du livre est de ".$prixLivre." euros.</br>";
// if($livreLu === false){
//     echo "Je n' ai pas encore lu ce livre !!!</br>";
// }else {
//     echo "J'ai déjà lu ce livre !!!</br> ";
// }

$message1 = '0@sn9sirppa@#?ia’jgtvryko1';
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';

$lenght1 = mb_strlen($message1) /2;
$lenght2 = mb_strlen($message2) /2;
$lenght3 = mb_strlen($message3) /2;

// echo $lenght1."</br>";
// echo $lenght2."</br>";
// echo $lenght3."</br>";
$lenght1 = substr($message1,5,-8);
$lenght2 = substr($message2,5,-18);
$lenght3 = substr($message3,5,-8);
// echo $lenght1."</br>";
// echo $lenght2."</br>";
// echo $lenght3."</br>";
$lenght1 = str_replace("@#?"," ",$lenght1);
$lenght2 = str_replace("@#?"," ",$lenght2);
$lenght3 = str_replace("@#?"," ",$lenght3);
// echo $lenght1."</br>";
// echo $lenght2."</br>";
// echo $lenght3."</br>";

$lenght1 = strrev($lenght1);
$lenght2 = strrev($lenght2);
$lenght3 = strrev($lenght3);
echo $lenght1."</br>";
echo $lenght2."</br>";
echo $lenght3."</br>";












