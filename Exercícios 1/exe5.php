<?php

    function lados($l,$v){

    if ($l == 3){
        $per = $v * 3;
        $resposta = "É um triângulo, seu perímetro é:\n".$per;
    }
    elseif ($l == 4){
        $a = $l * $l;
        $resposta = "É um quadrado, sua área é:\n".$a;
    }
    else{
        $resposta = "É um pentágono";

    }
    return $resposta;
}

print "Digite quantos lados tem, 3, 4 ou 5:\n";
$l = (float) fgets(STDIN);

print "Digite os valor dos lados em cm:";
$v = (float) fgets(STDIN);

$resposta = lados($l,$v);
print $resposta."\n";
