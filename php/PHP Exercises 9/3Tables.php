<?php

    // Connect to database
    $con = mysqli_connect("localhost","admin","Password1", "db_accounts");
    // Check connection
    if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "SELECT Customers.GivenName, Accounts.TotalCost, Products.Price
            FROM Customers, Accounts, Products
            WHERE Customers.CustID = Accounts.CustID
            AND Products.ProductID = Accounts.ProductID";

    $result = mysqli_query($con, $sql);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Firstname</th>";
    echo "<th>Total Cost</th>";
    echo "<th>Price</th>";
    echo "</tr>";

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['GivenName'] . "</td>";
            echo "<td>" . $row['TotalCost'] . "</td>";
            echo "<td>" . $row['Price'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    echo "</table>";
    mysqli_close($con);
?>
