<?php

$arg1 = TRUE;
$arg2 = FALSE;

function bonjour($jour){

    if($jour === True){
        echo "Bonjour";
    }
    elseif($jour === FALSE){
        echo "Bonsoir";
    }
}
bonjour($arg2);

?>