<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $con = mysqli_connect("localhost","admin","Password1");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Create database
    $sql = "CREATE DATABASE db_accounts";

    if (mysqli_query($con, $sql)) {
        echo "Database my_db created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($con);
    }

    $conn = new \PDO("mysql:host=localhost;dbname=db_accounts;", "admin", "Password1", array(
        PDO::MYSQL_ATTR_LOCAL_INFILE => true,
    ));
    $con = mysqli_init();
    mysqli_options($con, MYSQLI_OPT_LOCAL_INFILE, true);
    mysqli_real_connect($con, "localhost", "admin", "Password1", "db_accounts");
    //$con = mysqli_connect("localhost","admin","Password1", "db_accounts");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Create customer table
    $sql1 = 
    "CREATE TABLE Customers (
    CustID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    GivenName CHAR(30) NOT NULL,
    Surname CHAR(30) NOT NULL,
    Addresses CHAR(60),
    City CHAR(30),
    Province CHAR(5)
    )";

    // Execute query
    if (mysqli_query($con, $sql1)) {
        echo "Table Customers created successfully";
    } else {
        echo "Error creating Customers table: " . mysqli_error($con);
    }

    // Create accounts table
    $sql2 = 
    "CREATE TABLE Accounts (
    AccountID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CustID INT(6) NOT NULL DEFAULT 0,
    ProductID INT(6) NOT NULL DEFAULT 0,
    TotalCost CHAR(50) NOT NULL DEFAULT 0
    )";

    // Execute query
    if (mysqli_query($con, $sql2)) {
        echo "Table Accounts created successfully";
    } else {
        echo "Error creating Accounts table: " . mysqli_error($con);
    }

    // Create products table
    $sql3 = 
    "CREATE TABLE Products (
    ProductID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Price CHAR(20),
    Part CHAR(60),
    Descript CHAR(30)
    )";

    // Execute query
    if (mysqli_query($con, $sql3)) {
        echo "Table Products created successfully";
    } else {
        echo "Error creating Products table: " . mysqli_error($con);
    }

    mysqli_close($con);
?>