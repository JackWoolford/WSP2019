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
    $data1 =  "INSERT INTO Products (Price,Part,Descript)
    VALUES ('$100','Generic VGA Cable','1M VGA Cable'),
           ('$200','Generic USB Extension Cable','2M USB Extension Cable'),
           ('$300','Generic Case - Blue','Generic Case in Blue Colour'),
           ('$250','Generic Case - White','Generic Case in White Colour'),
           ('$220','Generic Case - Black','Generic Case in Black Colour'),
           ('$210','Antec Eleven Case','Antec ATX Case in Black'),
           ('$300','AMD E233 CPU','AMDs base model CPU'),
           ('$350','AMD F654 CPU','AMDs top line model CPU'),
           ('$370','Intel 23E3 CPU','Intels base model CPU'),
           ('$380','Intel 87GG CPU','Intels top line model CPU'),
           ('$220','ATI G35 GPU','ATIs mid-range model GPU'),
           ('$220','ATI G55 GPU','ATIs top line model GPU'),
           ('$220','Nvidia 56T GPU','Nvidias mid-range model GPU');";
         
    // Execute query
    if (mysqli_query($con, $data1)) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }

    // insert data2.csv
    $data2 =  "INSERT INTO Customers (CustID,GivenName,Surname,Addresses,City,Province)
    VALUES ('50125','Kevin','Sullivan','27 W G St #3','Geelong','VIC'),
           ('50168','PORDER BY RAND() LIMIT 10ria','Patel','3394 N 6th St #3','Melbourne','VIC'),
           ('50173','Will','Leung','6 Vincente Ave','Werribee','VIC'),
           ('50178','Angel','Gonzales','658 Benito St','Werribee','VIC'),
           ('50187','Mike','Lee','13756 Redwood Ave','Geelong','VIC'),
           ('50193','Phan','Khai','67 N Ukiah Way','Torquay','VIC'),
           ('50197','Angel','Lopez','98 Sheridan St','Drysdale','VIC'),
           ('50198','Luis','Alvarez','34 Kumquat Place','Newtown','VIC'),
           ('50201','Nguyen','Cuong','79 Coalinga Ave','Norlane','VIC'),
           ('50211','Sara','Jackson','5 Alamitos St','Corio','VIC'),
           ('50219','Daniel','Saadi','32 W Rosewood Ct','Geelong','VIC'),
           ('50230','Ed','Baig','5687 E Walnut Ave','Melbourne','VIC'),
           ('50231','Tony','Guerrero','12 N Jasmine Ave','Werribee','VIC'),
           ('50233','Anna','Lim','18 Winn Dr','Werribee','VIC'),
           ('50234','Cathy','Ng ','9088 Holt Blvd Apt #243','Geelong','VIC'),
           ('50244','Cathy','Lam','4803 Granada Ct','Torquay','VIC'),
           ('50257','Juan','Hernandez','4255 San Vincente St','Drysdale','VIC'),
           ('50266','Sofia','Garcia','13 E La Deney Ct','Newtown','VIC'),
           ('50273','Jennifer','Kidd','2321 San Berardino St','Norlane','VIC'),
           ('50295','Raj','Malik','25A W Princeton St','Corio','VIC'),
           ('50323','Charlie','Bahn','18 Chaffee St','Corio','VIC'),
           ('50345','Angela','Smith','112 E 4th St','Corio','VIC'),
           ('50564','Maria','Agbayani','101 W E St','Corio','VIC');";
             
    // Execute query
    if (mysqli_query($con, $data2)) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    } 

    // insert productID into accounts
    $insertCustIDProductID = "INSERT INTO Accounts (CustID, ProductID)
                 SELECT CustID, ProductID 
                 FROM Products, Customers 
                 ORDER BY RAND() LIMIT 10";

    // Execute query
    if (mysqli_query($con, $insertCustIDProductID)) {
        echo "CustomerID and ProductID data inserted successfully";
    } else {
        echo "Error inserting CustomerID and ProductID data: " . mysqli_error($con);
    }

    // insert Price into accounts
    $insertPrice= "UPDATE Accounts AS U1, Products AS U2 
                   SET U1.TotalCost = U2.Price
                   WHERE U2.ProductID = U1.ProductID";

    // Execute query
    if (mysqli_query($con, $insertPrice)) {
        echo "Price data inserted successfully";
    } else {
        echo "Error inserting Price data: " . mysqli_error($con);
    }

    mysqli_close($con);
?>


