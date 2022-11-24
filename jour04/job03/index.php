<form method="post">
    Entrez votre nom <br>
    <input type="text" name="username">
    <br>Entrez votre Prénom <br>
    <input type="text" name="firstname">
    <br>Entrez votre Email <br>
    <input type="email" name="email">
    <br><br>
    <input type="submit" value="Envoyer">
    
</form>

<?php

$count=0;

foreach ($_POST as $key => $value){
    $count++;
}

echo $count;
?>