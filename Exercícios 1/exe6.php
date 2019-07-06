<?php

    function numeros($n1,$n2){
        $soma= 0;

            for ($contador = $n1; $contador <= $n2; $contador++) { 
                $soma += $contador;
            }
            return $soma;
        }
       
        print "Digite o número inicial:";
        $n1= (float) fgets(STDIN);

        print "Digite o número final:";
        $n2= (float) fgets(STDIN);

        $soma= numeros ($n1,$n2)-$n1-$n2;
        print $soma . "\n";
      
