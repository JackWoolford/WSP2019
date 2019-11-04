<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    // connect to database
    $con = mysqli_connect("localhost","admin","Password1", "db_accounts");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // insert data1.csv
    $data1 =  "LOAD DATA INFILE 'Data1.csv'
               INTO TABLE Products
               FIELDS TERMINATED BY ','
               LINES TERMINATED BY '\n'
               IGNORE 1 LINES";
             
    // Execute query
    if (mysqli_query($con, $data1)) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }

    // insert data2.csv
    $data2 =  "LOAD DATA INFILE 'Data2.csv'
               INTO TABLE Customers
               FIELDS TERMINATED BY ','
               LINES TERMINATED BY '\n'
               IGNORE 1 LINES";
             
    // Execute query
    if (mysqli_query($con, $data2)) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }

    // insert customerID into accounts
    //$insertCustID = "INSERT INTO Accounts (CustID)
    //             SELECT CustID FROM Customers";

    // Execute query
    //if (mysqli_query($con, $insertCustID)) {
    //    echo "CustID data inserted successfully";
    //} else {
    //    echo "Error inserting CustID data: " . mysqli_error($con);
    //}     

    // insert productID into accounts
    //$insertProductIDPrice = "INSERT INTO Accounts (ProductID, TotalCost)
    //             SELECT ProductID, Price FROM Products";

    // Execute query
    //if (mysqli_query($con, $insertProductIDPrice)) {
    //    echo "ProductID and Price data inserted successfully";
    //} else {
    //    echo "Error inserting ProductID and Price data: " . mysqli_error($con);
    //}

    mysqli_close($con);
?>