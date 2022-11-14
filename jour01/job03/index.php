<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
 <?php

$boolean = true;
$entier = 7;
$str = "johan";
$float= 12.4;

?>

<table>
    <tr>
        <td>Type</td>
        <td>Nom</td>
        <td>Valeur</td>
    </tr>
    <tr>
        <td>Boolean</td>
        <td>$boolean</td>
        <td><?php echo $boolean ?></td>
        
    </tr>
    <tr>
        <td>Entier </td>
        <td>$entier</td>
        <td><?php echo $entier?></td>
        
    </tr>
    <tr>
        <td>Chaine de caractère</td>
        <td>$str</td>
        <td><?php echo $str ?></td>
       
    </tr>
    <tr>
        <td>Nombre à virgules</td>
        <td>$float</td>
        <td><?php echo $float ?></td>
       
    </tr>
</table>
</body>
</html>



