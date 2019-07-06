<?php

 function dias ($num){
     if ($num==1){
         $dia= "DOM";
     }
     elseif ($num==2){
         $dia= "SEG";
     }
     elseif ($num==3){
         $dia= "TER";
     }
     elseif ($num==4){
         $dia= "QUA";
     }
     elseif ($num==5){
         $dia= "QUI";
     }
     elseif ($num==6){
         $dia= "SEX";
     }
     elseif ($num==7){
         $dia= "SAB";
     }
     else{
         $dia= "ERRO";
     }
     return $dia;
 }

    print "Digite um número:";
    $num=(float) fgets(STDIN);

    $dia= dias ($num);
    print $dia . "\n";