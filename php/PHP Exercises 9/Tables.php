<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $con = mysqli_connect("localhost","admin","Password1", "db_accounts");
    // Check connection
    if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $accountResults = mysqli_query($con, "SELECT * FROM Accounts");

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th colspan='4'>Accounts</th>";
    echo "</tr>";
    echo "<tr>";

    $accountTitles = mysqli_query($con, "SHOW COLUMNS FROM Accounts");

    while ($row = mysqli_fetch_assoc($accountTitles)) {
        echo "<th>" . $row['Field'] . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_array($accountResults)) {
        echo "<tr>";
        echo "<td>" . $row['AccountID'] . "</td>";
        echo "<td>" . $row['CustID'] . "</td>";
        echo "<td>" . $row['ProductID'] . "</td>";
        echo "<td>" . $row['TotalCost'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    $customerResults = mysqli_query($con, "SELECT * FROM Customers");

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th colspan='6'>Customers</th>";
    echo "</tr>";
    echo "<tr>";

    $customerTitles = mysqli_query($con, "SHOW COLUMNS FROM Customers");

    while ($row = mysqli_fetch_assoc($customerTitles)) {
        echo "<th>" . $row['Field'] . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_array($customerResults)) {
        echo "<tr>";
        echo "<td>" . $row['CustID'] . "</td>";
        echo "<td>" . $row['GivenName'] . "</td>";
        echo "<td>" . $row['Surname'] . "</td>";
        echo "<td>" . $row['Addresses'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo "<td>" . $row['Province'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    $productResults = mysqli_query($con, "SELECT * FROM Products");

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th colspan='4'>Products</th>";
    echo "</tr>";
    echo "<tr>";

    $productTitles = mysqli_query($con, "SHOW COLUMNS FROM Products");

    while ($row = mysqli_fetch_assoc($productTitles)) {
        echo "<th>" . $row['Field'] . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_array($productResults)) {
        echo "<tr>";
        echo "<td>" . $row['ProductID'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Part'] . "</td>";
        echo "<td>" . $row['Descript'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

?>