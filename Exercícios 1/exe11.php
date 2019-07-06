<?php

    function polegadas ($p){
        $cm = $p * 2.54;
        return $cm;
    }

    print "Digite um número em pegadas:";
    $p = (float) fgets(STDIN);

    $cm = polegadas ($p);
    print "São ".$cm." centímetros" . "\n";