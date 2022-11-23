<?php

session_start();

if(isset($_POST["reset"])){
    $_SESSION["nbvisites"]=0;
}

if(isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"]++;
}
else{
    $_SESSION["nbvisites"] = 1;
}
echo "Nombres de visites = " .$_SESSION ["nbvisites"];


//session_destroy();

?>

<form method="post" action="index.php">
    <input type="submit"  name="reset" value ="Reset">
</form>