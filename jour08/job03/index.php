<?php

session_start();

if(!isset($_SESSION["Prenom"])){
    $_SESSION["Prenom"]= [];
}

if(isset($_POST["reset"])){
    $_SESSION["Prenom"]=[];
}

?>

<form method="post" action="index.php">
     Prénom<br>
    <input type="text" name="Prenom">
    <br><br>
    <input type="submit" value="Envoyer">
</form>
<form method="post" action="index.php">
    <input type="submit"  name="reset" value ="Reset">
</form>

<?php

if(isset($_POST["Prenom"])){
    $_SESSION["Prenom"][]=$_POST["Prenom"];

   echo "<ul>" ;
    foreach ($_SESSION["Prenom"] as $name){
        echo "<li>" . $name . "</li>";
    }  
    echo "</ul>";
}

?>



