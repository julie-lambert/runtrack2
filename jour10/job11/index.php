<?php

$mysqli = new mysqli("localhost","root","","jour09");

$request = $mysqli -> query("SELECT AVG(`capacite`) FROM `salles`");

$result_fetch_all = $request -> fetch_all();
?>

<table>
    <tr>
        <th>Capacité moyenne</th>
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