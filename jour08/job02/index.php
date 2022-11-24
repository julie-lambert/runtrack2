<?php

$count = 0;


if(isset($_POST["reset"])){
    setcookie("nbvisites",$count,time()+3600);
    header("Location: index.php");
    exit();
}

if(isset($_COOKIE["nbvisites"])){
    $count = $_COOKIE["nbvisites"] +1;
}

setcookie("nbvisites",$count,time()+3600);

echo "Nombres de visites = " .$_COOKIE["nbvisites"];


?>

<form method="post" action="index.php">
    <input type="submit"  name="reset" value ="Reset">
</form>