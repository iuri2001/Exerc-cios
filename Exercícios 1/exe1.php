<?php

    function temperatura ($f){
        $c = ($f - 32) * (5/9);
        return $c;
    }
    print "Digite a temperatura \n";
    $f = (float) fgets(STDIN);
    $c = temperatura ($f);
    print "$c \n";
