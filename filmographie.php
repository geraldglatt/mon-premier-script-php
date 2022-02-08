<?php

$films =[
    "l'ile au trésor" => ['Bobby Driscoll','Robert Newton',' Basil Sydney'], 
    "Le pirate des mers du sud" => ['Robert Newton','Connie Gilchrist','Lloyd Berrell'],
    "L'étrange cas du docteur jekyll et mr Hyde" =>['Michael Caine','Cheryl Ladd','Joss Ackland']
   
];

foreach($films as $key=> $film){ ?>
    <pre>
   <?php
   echo  "Dans le film :".$key." les pricipaux acteurs sont :</br>";
   
   if(is_array($film)){
       foreach($film as $key=>$film){
           echo $film . "</br>";
       }
   }
   ?>
   </pre>
<?php }
 