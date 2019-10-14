<style>
table, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<?php
echo "<table><tr>";
$intCount = 1;
for($rowCount=1; $rowCount <= 4; $rowCount++) {
    echo "<tr></tr>";
    for($colCount=1; $colCount <=3; $colCount++) {
    echo "<td>$intCount</td>";
    $intCount++;

    }
}
echo "</tr><table>";
?>