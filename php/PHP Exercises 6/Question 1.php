<head>
<title> Multidimensional Array</title>
</head>

<body>
<?php

$arrCars = array (
    "Make" => array("Holden", "Kia", "Honda", "Suzuki", "BMW"),
    "Colour" => array("White", "Silver", "Yellow", "Purple", "White"),
    "Quantity" => array(1,2,4,1,3)
);

foreach($arrCars["Make"] as $strKey => $strMake) {
    $strColour = $arrCars["Colour"][$strKey];
    $intQuantity = $arrCars["Quantity"][$strKey];
    echo "<p>Make: $strMake Colour: $strColour Quantity:
    $intQuantity</p>";
}
?>
</body>
</html>