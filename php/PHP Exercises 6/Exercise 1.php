<head>
<title> Multidimensional Array</title>
</head>

<body>
<?php

$arrCars = array (
    "Make" => array("Ford", "Mazda", "Renault", "Vauxhall", "Toyota"),
    "Colour" => array("Blue", "Black", "Red", "Green", "Red"),
    "Quantity" => array(4,4,2,3,2)
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