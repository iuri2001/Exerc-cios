<?php

    function maior ($n1,$n2){
        if ($n1>$n2){
            $resposta= "O primeiro número digitado, ".$n1.", é maior"; 
        }
        elseif ($n1<$n2){
            $resposta= "O segundo número digitado, ".$n2.", é maior";
        }
        else{
            $resposta= "Os valores são iguais";
        }
        return $resposta;
    }

    print "Digite o primeiro número:";
    $n1= (float) fgets(STDIN);

    print "Digite o segundo número:";
    $n2= (float) fgets(STDIN);

    $resposta= maior ($n1,$n2);
    print $resposta . "\n";
