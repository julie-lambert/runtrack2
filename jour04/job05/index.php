<form method="post">
        <br> Username <br>
    <input type="text" name="username">
    <br>Password <br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" value="Envoyer">
</form>

<?php

if ($_POST["username"] === "John" && $_POST["password"] === "Rambo"){
    echo "C'est pas ma guerre";
}
else{
    echo "Votre pire cauchemar";
}

?>