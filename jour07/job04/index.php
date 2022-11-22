<?php

function calcule($a, $operation, $b){
    if ($operation === "+"){
        $somme = $a + $b;
    }
    elseif($operation === "-"){
        $somme = $a - $b;
    }
    elseif($operation === "*"){
        $somme = $a * $b;
    }
    elseif($operation === "/"){
        $somme = $a / $b;
    }
    elseif($operation === "%" ){
        $somme = $a % $b;
    }

    return $somme;

}

echo calcule(5, "-", 3);

?>