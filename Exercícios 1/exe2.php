<?php

    function hip($catA, $catB){
        $hip = sqrt($catA*$catA + $catB*$catB);
        return $hip;
    }

    print "Digite o valor do lado A: \n";
    $catA = (float) fgets(STDIN);
    print "Digite o valor do lado B: \n";
    $catB = (float) fgets(STDIN);

    $hip = hip($catA, $catB);
    print "A hipotenusa é: ". $hip. "\n";