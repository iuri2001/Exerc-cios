<?php

    function media ($n1,$n2){
        $media = ($n1+$n2)/2;
        if ($media >= 6){
            $r = "Você foi aprovado, nota:".$media;
        }
        else {
            $r = "Você reprovou, nota:".$media;
        }
        return $r;
    }
    
    print "Digite a primeira nota:";
    $n1 = (float) fgets(STDIN);
    print "Digite a segunda nota:";
    $n2 = (float) fgets(STDIN);

    $r = media($n1,$n2);
    print $r. "\n";