<!DOCTYPE HTML>
<html>
<body>

<?php
$booTitle = 0;
$booFirstName = 0;
$booSurname = 0;
$booEmail = 0;
$booColour = 0;
$booSize = 0;
$booNumber = 0;

if (isset($_POST["submit"])) {
    if($_POST["strTitle"] == "Select...") {
        $booTitle = 1;
    }

    if($_POST[""]) {}

}




?>

<p> Please select a title </p>
</body>
</html>