<!DOCTYPE HTML>
<html>
<body>
    <img id="banner" src="../images/Blue_Tshirt.jpg"/>

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

    if($_POST["firstName"] == "") {
        $booFirstName = 1;
    }

    if($_POST["surname"] == "") {
        $booSurname = 1;
    }

    if($_POST["email"] == "") {
        $booEmail = 1;
    }

    if($_POST["colour"] == "") {
        $booColour = 1;
    }

    if($_POST["size"] == "") {
        $booSize = 1;
    }

    if($_POST["number"] == "") {
        $booNumber = 1;
    }

}

?>

<form action = '<?php echo $_SERVER["PHP_SELF"];?>' method='post'>
    <p>Title:
        <select name='strTitle' id='strTitle'>
            <option>Select...</option>
            <option>Mr</option>
            <option>Ms</option>
            <option>Mrs</option>
            <option>Dr</option>
            <option>Prof</option>
            <option>Sir</option>
            <option>Dame</option>
        </select>
        <?php if ($booTitle) echo "Please select a title" ?>
    </p>
    <p>
        First name: <input type='text' name='firstName'>
        <?php if ($booFirstName) echo "Please enter a first name" ?>
    </p>
    <p>
        Surname: <input type='text' name='surname'>
        <?php if ($booSurname) echo "Please enter a surname" ?>
    </p>
    <p>
        Email: <input type='text' name='email'>
        <?php if ($booEmail) echo "Please enter an email address" ?>
    </p>
    <p>
        Shirt colour: <input type='text' name='colour'>
        <?php if ($booColour) echo "Please enter the shirt colour you want" ?>
    </p>
    <p>
        Shirt size: <input type='text' name='size'>
        <?php if ($booSize) echo "Please enter the shirt size you want" ?>
    </p>
    <p>
        Amount of shirts: <input type='text' name='number'>
        <?php if ($booNumber) echo "Please enter the amount of shirts you want" ?>
    </p>
    <p>
        <input type='submit' name='submit'>
    </p>
</form>
<?php 
    if(!($booTitle) && isset($_POST["submit"]))
        echo "All is well, you are " . $_POST["strTitle"];
?>
</body>
</html>