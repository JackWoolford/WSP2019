<html>
	<body>
	<h1> Add Part </h1>
		<form action="addPartsConfirmation.php" method="post">
			<table>
				<tr>
					<td>Part Name:</td>
					<td> <input type="text" size=30 maxlength=30 name="PartName" autofocus required/> </td>
				</tr>
				<tr>
					<td>Description:</td>
					<td> <textarea name ="Description" maxlength=100 rows=5 cols=20 required></textarea> </td>
				</tr>
				<tr>
					<td>Specifications:</td>
					<td> <textarea name ="Specs" maxlength=100 rows=5 cols=20 required></textarea> </td>
				</tr>
				<tr>
					<td>On Hand:</td>
					<td> <input style="width:4em;" type="number" min=0 max=9999 name="OnHand" required/> </td>
				</tr>
				<tr>
					<td>Category Name:</td>
					<td> 
					
					<select name="CatName" required>
						
						<?php        //SEARCH FOR CATEGORIES
							error_reporting(E_ALL);
							ini_set('display_errors',1);

							$DBConnect = mysqli_connect("localhost","admin","Password1","CS_Tools");
							$SQLQuery =  "SELECT DISTINCT Category FROM Parts";
							$result = mysqli_query($DBConnect, $SQLQuery);
							
							while ($row = mysqli_fetch_array($result))
							{
								echo "<option>" . $row['Category'] . "</option> ";
							}
						?>
						
					</select>
					</td>
				</tr>
				<tr>
					<td>Warehouse:</td>
					<td> <input type="text" size=15 maxlength=15 name="Warehouse" required/> </td>
				</tr>
				<tr>
					<td>Price:</td>
					<td> <input type="text" size=8 maxlength=8 pattern="\d+(\.\d{2})?" title="Enter a valid Price" name="Price" required/> </td>
				</tr>
				<tr>
					<td><input type='submit'/></td>
				</tr>
			</table>
		</form>
	</body>
</html>