<?php
	$DBConnect=mysqli_connect("localhost","admin","Password1","CS_Tools");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to Database: " . mysqli_connect_error();
	}
	$SQLQuery =  "SELECT * FROM Parts";
	$result = mysqli_query($DBConnect, $SQLQuery);
	
	echo "<table id='results'>
			<tr>
			<th>Part Name</th>
			<th>Description</th>
			<th>Specs</th>
			<th>On Hand</th>
			<th>Category</th>
			<th>Warehouse</th>
			<th>Price</th>
			<th>Change</th>
			<th>Remove</th>
			</tr>";
	
	while ($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['PartName'] . "</td>";
		echo "<td>" . $row['Description'] . "</td>";
		echo "<td>" . $row['Specs'] . "</td>";
		echo "<td>" . $row['OnHand'] . "</td>";
		echo "<td>" . $row['Category'] . "</td>";
		echo "<td>" . $row['Warehouse'] . "</td>";
		echo "<td>" . $row['Price'] . "</td>";
		echo "<td>" . "<a href=changeParts2.php?ID=" . $row['PartNum'] . ">Change</a>" . "</td>";
	
		echo "</tr>";
	}
	
	echo "</table>";
	
	mysqli_close($DBConnect);
?>