<?php

$result = mysqli_query($con, "SELECT * FROM Persons");

echo "<table border='1'>
<tr>";

while ($row = mysqli_fetch_assoc($post)) {
    echo "<th>" . $row['title'] . "</th>";
}
echo "</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>