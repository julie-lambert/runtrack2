<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $nombres = [200, 204, 173, 98, 171, 404, 459];

        foreach($nombres as $value){

            if ($value % 2===0){
            echo "$value est pair<br>";
            }
            else{
            echo"$value est impair<br>";
            }
        }
    ?>
</body>
</html>