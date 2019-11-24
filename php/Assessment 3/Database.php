<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $con = mysqli_connect("localhost","admin","Password1");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Create database
    $sql = "CREATE DATABASE CS_Tools";

    if (mysqli_query($con, $sql)) {
        echo "Database my_db created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($con);
    }

    $con = mysqli_connect("localhost","admin","Password1", "CS_Tools");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Create customer table
    $sql1 = 
    "CREATE TABLE Customers (
    CustID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(30),
    LastName VARCHAR(30),
    StreetAddress VARCHAR(60),
    City VARCHAR(30),
    State VARCHAR(5),
    Postcode VARCHAR(5)
    )";

    // Execute query
    if (mysqli_query($con, $sql1)) {
        echo "Table Customers created successfully";
    } else {
        echo "Error creating Customers table: " . mysqli_error($con);
    }

    // Create orders table
    $sql2 = 
    "CREATE TABLE Orders (
    OrderNum INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    OrderDate VARCHAR(10),
    CustID VARCHAR(10),
    NumberOrdered VARCHAR(3),
    QuotedPrice VARCHAR(10),
    PartNum VARCHAR(6)
    )";

    // Execute query
    if (mysqli_query($con, $sql2)) {
        echo "Table Orders created successfully";
    } else {
        echo "Error creating Orders table: " . mysqli_error($con);
    }

    // Create products table
    $sql3 = 
    "CREATE TABLE Parts (
    PartNum INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    PartName CHAR(30),
    Description VARCHAR(60),
    Specs VARCHAR(50),
    OnHand VARCHAR(3),
    Category VARCHAR(20),
    Warehouse VARCHAR(20),
    Price VARCHAR(10)
    )";

    // Execute query
    if (mysqli_query($con, $sql3)) {
        echo "Table Parts created successfully";
    } else {
        echo "Error creating Parts table: " . mysqli_error($con);
    }

    mysqli_close($con);
?>