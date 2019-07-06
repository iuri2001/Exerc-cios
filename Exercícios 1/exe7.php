<?php

 function meses ($num){
     if ($num==1){
         $mes= "Janeiro";
     }
     elseif ($num==2){
         $mes= "Fevereiro";
     }
     elseif ($num==3){
         $mes= "Março";
     }
     elseif ($num==4){
         $mes= "Abril";
     }
     elseif ($num==5){
         $mes= "Maio";
     }
     elseif ($num==6){
         $mes= "Junho";
     }
     elseif ($num==7){
         $mes= "Julho";
     }
     elseif ($num==8){
        $mes= "Agosto";
    }
    elseif ($num==9){
        $mes= "Setembro";
    }
    elseif ($num==10){
        $mes= "Outubro";
    }
    elseif ($num==11){
        $mes= "Novembro";
    }
    elseif ($num==12){
        $mes= "Dezembro";
    }
     else{
         $mes= "ERRO";
     }
     return $mes;
 }

    print "Digite um número:";
    $num=(float) fgets(STDIN);

    $mes= meses ($num);
    print $mes . "\n";