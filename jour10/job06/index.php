<?php

$mysqli = new mysqli("localhost","root","","jour09");

$request = $mysqli -> query("SELECT COUNT(*) FROM `etudiants`");

$result_fetch_all = $request -> fetch_all();
?>

<table>
    <tr>
        <th>Nombre d'étudiants</th>
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