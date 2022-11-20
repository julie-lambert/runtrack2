<form method="get">
    Nombre<br>
    <input type="text" name="Nombre">
    <br><br>
    <input type="submit" value="Envoyer">
</form>

<?php

if ($_GET["Nombre"] % 2 === 0){
    echo "Nombre Pair";
}
else{
    echo "Nombre Impair";
}

?>