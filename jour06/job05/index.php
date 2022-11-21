<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kalam&display=swap');
    </style>

    <?php

        if($_POST){
            if($_POST["style"] === "style1"){
            echo '<link rel="stylesheet" href="style1.css">';
            }
            elseif($_POST["style"] === "style2"){
            echo '<link rel="stylesheet" href="style2.css">';
            }
            elseif($_POST["style"] === "style3"){
            echo '<link rel="stylesheet" href="style3.css">';
            }
        }
        
    ?>

</head>
<body>
    
    <form action="index.php" method="post">

        <label for="Style">Choisissez un style:</label>

        <select name="style" id="style-select">
            <option value="">--Please choose an option--</option>
            <option value="style1">Plage</option>
            <option value="style2">Noël</option>
            <option value="style3">Fleur</option>
        </select>

        <input type="submit" value="Envoyer">

    </form>

</body>
</html>