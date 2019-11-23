<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    // connect to database
    $con = mysqli_connect("localhost","admin","Password1", "CS_Tools");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // insert data1.csv
    $data1 =  "INSERT INTO Parts (PartName, Description, Specs, OnHand, Category, Warehouse, Price)
	VALUES ('Generic HDMI Cable', '1M HDMI Cable', '1M', '8', 'Cables', 'Frankston', '5.00'),
		   ('Generic DVI Cable', '1M DVI Cable', '1M', '20', 'Cables', 'Melbourne', '3.65'),
		   ('Generic VGA Cable', '1M VGA Cable', '1M', '3', 'Cables', 'Frankston', '3.50'),
		   ('Generic USB Extension Cable', '2M USB Extension Cable', '2M', '2', 'Cables', 'Melbourne', '4.45'),
		   ('Generic Case - Blue', 'Generic Case in Blue Colour', 'ATX, Blue', '8', 'Cases', 'Frankston', '50.00'),
		   ('Generic Case - White', 'Generic Case in White Colour', 'ATX, White', '7', 'Cases', 'Melbourne', '30.00'),
		   ('Generic Case - Black', 'Generic Case in Black Colour', 'ATX, Black', '4', 'Cases', 'Melbourne', '50.00'),
		   ('Antec Eleven Case', 'Antec ATX Case in Black', 'ATX, Black', '1', 'Cases', 'Frankston', '99.99'),
		   ('AMD E233 CPU', 'AMDs base model CPU', '2.5GHz, 2MB Cache', '2', 'CPUs', 'Melbourne', '99.99'),
		   ('AMD F654 CPU', 'AMDs top line model CPU', '3GHz, 3MB Cache', '20', 'CPUs', 'Melbourne', '375.65'),
		   ('Intel 23E3 CPU', 'Intels base model CPU', '2.5GHz, 2MB Cache', '7', 'CPUs', 'Frankston', '99.99'),
		   ('Intel 87GG CPU', 'Intels top line model CPU', '3GHz, 3MB Cache', '5', 'CPUs', 'Frankston', '430.95'),
		   ('ATI G35 GPU', 'ATIs mid-range model GPU', '700MHz, 2GB', '12', 'GPUs', 'Melbourne', '200.50'),
		   ('ATI G55 GPU', 'ATIs top line model GPU', '1058MHz, 3GB', '6', 'GPUs', 'Melbourne', '352.45'),
		   ('Nvidia 56T GPU', 'Nvidias mid-range model GPU', '700MHz, 2GB', '8', 'GPUs', 'Melbourne', '200.50'),
		   ('Nvidia 96T GPU', 'Nvidias top line model GPU', '1058MHz, 3GB', '22', 'GPUs', 'Melbourne', '344.45'),
		   ('Generic Hard Drive', '1TB Hard Drive', '1TB', '23', 'HDDs', 'Melbourne', '90.45'),
		   ('Generic Solid State Drive', '250GB Solid State Drive', '250GB', '7', 'HDDs', 'Frankston', '100.00'),
		   ('Generic Keyboard', 'Normal Keyboard', '104 Keys', '3', 'Keyboards', 'Frankston', '10.55'),
		   ('Generic Mechanical Keyboard', 'Mechanical Keyboard', '104 Keys', '6', 'Keyboards', 'Frankston', '60.95'),
		   ('Generic Mouse', 'Standard Mouse', '3 Buttons', '7', 'Mice', 'Frankston', '4.45'),
		   ('Generic Gaming Mouse', 'Gaming Mouse with extra buttons', '7 Buttons, 32-bit CPU', '9', 'Mice', 'Melbourne', '54.45'),
		   ('Generic Monitor', 'Standard Monitor', '1366x768, DVI, VGA', '7', 'Monitors', 'Melbourne', '99.99'),
		   ('BenQ Monitor', 'BenQ brand Monitor', '1920x1080, HDMI, DVI', '23', 'Monitors', 'Melbourne', '300.20'),
		   ('LG Monitor', 'LG brand Monitor', '1920x1080, HDMI, DVI', '5', 'Monitors', 'Melbourne', '340.54'),
		   ('Gigabyte Motherboard', 'Gigabyte brand Motherboard', 'LGA1150, 4xDDR3', '65', 'Motherboards', 'Frankston', '150.45'),
		   ('ASRock Motherboard', 'ASRock brand Motherboard', 'LGA1150, 4xDDR3', '7', 'Motherboards', 'Frankston', '70.99'),
		   ('ASUS Motherboard', 'ASUS brand Motherboard', 'LGA1150, 4xDDR3', '5', 'Motherboards', 'Melbourne', '200.84'),
		   ('MSI Motherboard', 'MSI brand Motherboard', 'LGA1150, 4xDDR3', '5', 'Motherboards', 'Frankston', '120.56'),
		   ('Generic Basic PSU', 'Standard PSU', '500W', '5', 'PSUs', 'Melbourne', '34.45'),
		   ('Generic Gaming PSU', 'Gaming PSU', '1050W', '5', 'PSUs', 'Melbourne', '34.45'),
		   ('Antec PSU', 'Antec brand PSU', '1050W', '2', 'PSUs', 'Frankston', '34.45'),
		   ('Aerocool PSU', 'Aerocool brand PSU', '1050W', '8', 'PSUs', 'Frankston', '34.45'),
		   ('CoolerMaster PSU', 'Coolermaster brand PSU', '1050W', '5', 'PSUs', 'Melbourne', '34.45'),
		   ('Generic RAM', 'Standard 1GB RAM stick', '1GB', '7', 'RAM', 'Melbourne', '34.45'),
		   ('Generic RAM', 'Standard 2GB RAM stick', '2GB', '24', 'RAM', 'Frankston', '34.45'),
		   ('Generic RAM', 'Standard 4GB RAM stick', '4GB', '34', 'RAM', 'Frankston', '34.45'),
		   ('Generic Gaming RAM', 'Gaming grade 1GB RAM stick', '1GB', '34', 'RAM', 'Melbourne', '34.45'),
		   ('Generic Gaming RAM', 'Gaming grade 2GB RAM stick', '2GB', '43', 'RAM', 'Melbourne', '34.45'),
		   ('Generic Gaming RAM', 'Gaming grade 4GB RAM stick', '4GB', '34', 'RAM', 'Frankston', '34.45'),
		   ('PC Package 1', 'Basic Office PC', '2GB RAM, 250GB HDD, 2.5Ghz Dual Core', '4', 'PC Package', 'Frankston', '500.00'),
		   ('PC Package 2', 'Basic Gaming PC', '4GB RAM, 500GB HDD, 2.5Ghz Quad Core', '8', 'PC Package', 'Frankston', '1000.00'),
		   ('PC Package 3', 'Ultra Gaming PC', '16GB RAM, 1TB HDD, 320GB SSD, 3.5Ghz Octa Core', '3', 'PC Package', 'Frankston', '3000.00'),
		   ('Networking Package 1', 'Basic Networking', 'Router, Modem, 24-port Ethernet Switch', '7', 'Networking Package', 'Melbourne', '500.00'),
		   ('Networking Package 2', 'Basic Wireless Networking', 'Wireless Router, Modem, 24-port Ethernet Switch', '7', 'Networking Package', 'Melbourne', '700.00'),
		   ('Networking Package 3', 'Wireless AC Networking', 'AC Wireless Router, Modem, 24-port Ethernet Switch', '7', 'Networking Package', 'Melbourne', '1000.00');";
         
    // Execute query
    if (mysqli_query($con, $data1)) {
        echo "Parts data inserted successfully";
    } else {
        echo "Error inserting parts data: " . mysqli_error($con);
    }

    // insert data2.csv
    $data2 =  "INSERT INTO Customers (FirstName, LastName, StreetAddress, City, State, Postcode)
    VALUES ('Frank', 'Grimes', '123 Fake St', 'Aislebie', 'VIC', '3220'),
            ('Jane', 'Smith', '21 Green St', 'Belmont', 'NSW', '3216'),
            ('Jimmy', 'James', '3 Apple Way', 'Geelong', 'VIC', '3220'),
            ('Sarah', 'Green', '6 Far St', 'Sale', 'QLD', '3216'),
            ('Karen', 'Baites', '21 Second  St', 'Denton', 'VIC', '2345'),
            ('Robert', 'Burdon', '42 First  St', 'Durham', 'QLD', '4565'),
            ('Scott', 'Bell', '3 Elm  St', 'Elswicke', 'NSW', '7865'),
            ('Steph', 'Benett', '42 Main  St', 'Killom', 'VIC', '3243'),
            ('Craig', 'Bowden', '74 Second  St', 'Langley', 'NSW', '3454'),
            ('David', 'Brasse', '5 Oak  St', 'Durham', 'NT', '4565'),
            ('John', 'Flower', '7 Seventh  St', 'Walworthe', 'VIC', '3841'),
            ('Peter', 'Smith', '3 Elm  St', 'Denton', 'NSW', '7865'),
            ('Marge', 'Gardiner', '4 Eighth  St', 'Winlinton', 'VIC', '6523'),
            ('Alice ', 'Gray', '42 Oak  St', 'Whickham', 'WA', '4523'),
            ('Dorothy', 'Gardiner', '65 Washington  St', 'Togston', 'QLD', '4538'),
            ('Elizabeth', 'Hall', '245 View  St', 'Elswicke', 'NT', '4521'),
            ('Helen', 'Hilton', '35 Main  St', 'Belmont', 'VIC', '3242'),
            ('Grace', 'Hopper', '47 Second  St', 'Sighill', 'SA', '1456'),
            ('Isabell', 'Hutton', '4 Lake  St', 'Whickham', 'WA', '3554'),
            ('Adam', 'Hunter', '3 Eighth  St', 'Seaton', 'QLD', '2874'),
            ('Andrew', 'Flower', '2 Green St', 'Nonstaynton', 'VIC', '6521'),
            ('Alexander', 'Jenison', '7 Washington  St', 'Killom', 'QLD', '3541'),
            ('Charles', 'Lancaster', '543 Elm  St', 'Winlinton', 'VIC', '2452'),
            ('Dean', 'Martin', '35 View  St', 'Denton', 'SA', '1455'),
            ('Francis', 'Lee', '41 Oak  St', 'Langley', 'NSW', '7531'),
            ('George', 'Maire', '74 Park  St', 'Durham', 'VIC', '8753'),
            ('Gerard', 'Marshall', '85 First  St', 'Denton', 'NT', '9543'),
            ('Hector', 'Milbourne', '7 Main  St', 'Elswicke', 'QLD', '5453'),
            ('Henry', 'Morton', '2 Park  St', 'Whickham', 'VIC', '4534'),
            ('James', 'Flower', '6 Washington  St', 'Killom', 'SA', '6842'),
            ('Leonard', 'Percye', '45 Eighth  St', 'Belmont', 'QLD', '8435'),
            ('Jasper', 'Porter', '65 Park  St', 'Winlinton', 'WA', '2354'),
            ('Peter', 'Riddell', '25 Oak  St', 'Durham', 'VIC', '7853'),
            ('Roger', 'Sanderson', '12 Lake  St', 'Walworthe', 'QLD', '3542'),
            ('Janet', 'Spence', '75 Main  St', 'Langley', 'NSW', '2378'),
            ('Margaret', 'Smythe', '4 First  St', 'Elswicke', 'WA', '5373'),
            ('Martha', 'Turner', '65 Seventh  St', 'Denton', 'QLD', '5737'),
            ('Susana', 'Wall', '21 View  St', 'Tudbury', 'VIC', '3573'),
            ('Rebecca', 'Wilson', '45 Lake  St', 'Belmont', 'VIC', '3573'),
            ('Bob', 'Smith', '6 Blue St', 'Highton', 'VIC', '3753');";
             
    // Execute query
    if (mysqli_query($con, $data2)) {
        echo "Customer data inserted successfully";
    } else {
        echo "Error inserting customer data: " . mysqli_error($con);
    } 

    mysqli_close($con);
?>


