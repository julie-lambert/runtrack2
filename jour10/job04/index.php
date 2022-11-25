<?php

$mysqli = new mysqli("localhost","root","","jour09");

$request = $mysqli -> query("SELECT * FROM `etudiants` WHERE `prenom` LIKE 'T%';");

$result_fetch_all = $request -> fetch_all();
?>

<table>
    <tr>
        <th>id</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Naissance</th>
        <th>Sexe</th>
        <th>Mail</th>
    </tr>

<?php
foreach($result_fetch_all as $ligne){
    echo "<tr>";
    foreach($ligne as $champ){
        echo "<td>" . $champ . "</td>";
    }
    echo "</tr>";
}
?>
</table>

