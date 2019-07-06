<?php

    function divisao ($n1,$n2){
        if ($n1%$n2==0){
            $resposta= 1;
        }
        else {
            $resposta= 0;
        }
        return $resposta;
    }

    print "Digite o primeiro número:";
    $n1= (float) fgets(STDIN);

    print "Digite o segundo número:";
    $n2= (float) fgets(STDIN);

    $resposta= divisao ($n1,$n2);
    print $resposta . "\n";