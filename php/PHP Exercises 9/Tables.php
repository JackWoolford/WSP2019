<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $con = mysqli_connect("localhost", "admin", "Password1", "db_accounts");
    // Check connection
    if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, "SELECT * FROM Accounts");

    echo "<table border='1'>
    <tr>";

    while ($row = mysqli_fetch_assoc($post)) {
        echo "<th>" . $row['title'] . "</th>";
    }
    echo "</tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['AccountID'] . "</td>";
        echo "<td>" . $row['CustID'] . "</td>";
        echo "<td>" . $row['ProductID'] . "</td>";
        echo "<td>" . $row['TotalCost'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

?>