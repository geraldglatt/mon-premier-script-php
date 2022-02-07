<?php

$livres =[
    "l'ile au trésor" => 1883,
    "Voyage avec un âne dans les cévennes" => 1925,
    "L'étrange cas du docteur jekyll et mr Hyde" => 1886
   
];
asort($livres);
foreach($livres as $indice=>$value){ ?>
    <pre>
   <?php
   echo "> ".$value ." - ". $indice; ?>
   </pre>
<?php }
 