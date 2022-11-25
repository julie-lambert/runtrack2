<?php

$mysqli = new mysqli("localhost","root","","jour09");

$request = $mysqli -> query("SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-12-31';");

$result_fetch_all = $request -> fetch_all();
?>

<table>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Naissance</th>
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