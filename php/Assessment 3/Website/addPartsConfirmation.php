<!doctype html>
<?php
	// Connect to Database and alert if error
	$DBConnect=mysqli_connect("localhost","admin","Password1","CS_Tools");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to Database: " . mysqli_connect_error();
	}
	
	// Pull Variables from previous form, escape for security
	$PartName = mysqli_real_escape_string($DBConnect, $_POST['PartName']);
	$Description = mysqli_real_escape_string($DBConnect, $_POST['Description']);
	$Specs = mysqli_real_escape_string($DBConnect, $_POST['Specs']);
	$OnHand = mysqli_real_escape_string($DBConnect, $_POST['OnHand']);
	$CatName = mysqli_real_escape_string($DBConnect, $_POST['CatName']);
	$Warehouse = mysqli_real_escape_string($DBConnect, $_POST['Warehouse']);
	$Price = mysqli_real_escape_string($DBConnect, $_POST['Price']);
	
	$insertData = "INSERT INTO Parts (PartName, Description, Specs, OnHand, Category, Warehouse, Price)
				   VALUES ('$PartName', '$Description', '$Specs', '$OnHand', '$CatName', '$Warehouse', '$Price')";
	
	if (mysqli_query($DBConnect, $insertData))
	{
		$result = "Part added successfully.";
	}
	else
	{
		$result = "Error adding Part: " . mysqli_error($DBConnect);
	}
	mysqli_close($DBConnect);
?>

<html>
	<body>
		<div id="middle">
			<h1> Add Part </h1>
			<table>
				<tr>
					<td>Part Name:</td>
					<td> <?php echo $PartName?> </td>
				</tr>
				<tr>
					<td>Description:</td>
					<td> <?php echo $Description?> </td>
				</tr>
				<tr>
					<td>Specifications:</td>
					<td> <?php echo $Specs?> </td>
				</tr>
				<tr>
					<td>On Hand:</td>
					<td> <?php echo $OnHand?> </td>
				</tr>
				<tr>
					<td>Category:</td>
					<td> <?php echo $CatName?> </td>
				</tr>
				<tr>
					<td>Warehouse:</td>
					<td> <?php echo $Warehouse?> </td>
				</tr>
				<tr>
					<td>Price:</td>
					<td> $<?php echo $Price?> </td>
				</tr>
			</table>
			<p><?php echo $result?></p>
	  </div>
   </body>
</html>