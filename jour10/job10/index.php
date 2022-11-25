<?php

$mysqli = new mysqli("localhost","root","","jour09");

$request = $mysqli -> query("SELECT * FROM `salles` ORDER BY `capacite` DESC;");

$result_fetch_all = $request -> fetch_all();
?>

<table>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Etage</th>
        <th>Capacité</th>
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