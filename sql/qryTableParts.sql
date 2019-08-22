CREATE TABLE PARTS
(PartNum INT AUTO_INCREMENT PRIMARY KEY,
 PartName CHAR(40),
 Description CHAR(50), 
 Specs CHAR(60),
 OnHand INT, 
 Category CHAR(20), 
 Warehouse CHAR(15), 
 Price DOUBLE)