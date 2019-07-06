<?php

    function pesoideal($a,$s){

    if ($s = 1){
        $ideal = ($a * 72.7) - 58;
    }
    else{
        $ideal = ($a * 62.1) - 44.7;
    }
    return $ideal;
}

print "Digite o seu sexo com 1 ou 2:\n";
$s = (float) fgets(STDIN);

print "Digite a sua altura:";
$a = (float) fgets(STDIN);

$ideal = pesoideal ($a,$s);
print "Sua altura ideal é:\n" .$ideal."kg \n";


    