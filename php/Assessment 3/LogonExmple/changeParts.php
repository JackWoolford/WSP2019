<!DOCTYPE html>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1);

	// Connect to Database and alert if error
	$DBConnect=mysqli_connect("localhost","admin","Password1","CS_Tools");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to Database: " . mysqli_connect_error();
	}
	
	$PartNum = $_GET['ID'];
	
	$SQLQuery =  "SELECT * FROM Parts WHERE PartNum = $PartNum";
	$result = mysqli_query($DBConnect, $SQLQuery);
	while ($row = mysqli_fetch_array($result))
	{
		$PartName = $row['PartName'];
		$Description = $row['Description'];
		$Specs = $row['Specs'];
		$OnHand = $row['OnHand'];
		$Category = $row['Category'];
		$Warehouse = $row['Warehouse'];
		$Price = $row['Price'];
	}
?>
<html>

</html>
	<h1> Change Part </h1>
	<form action=<?php echo "changePartsConfirmation.php?ID=" . $PartNum ?> method="post">
		<table>
			<tr>
				<td>Part Name:</td>
				<td> <input type="text" size=30 maxlength=30 name="PartName" value='<?php echo $PartName;?>' autofocus required/> </td>
			</tr>
			<tr>
				<td>Description:</td>
				<td> <textarea name ="Description" maxlength=100 rows=5 cols=20required><?php echo $Description;?></textarea> </td>
			</tr>
			<tr>
				<td>Specifications:</td>
				<td> <textarea name ="Specs" maxlength=100 rows=5 cols=20 required><?php echo $Specs;?></textarea></td>
			</tr>
			<tr>
				<td>On Hand:</td>
				<td> <input style="width:4em;" type="number" min=0 max=9999 name="OnHand" value='<?php echo $OnHand;?>' required/> </td>
			</tr>
			<tr>
				<td>Category Name:</td>
				<td> 
					<select name="Category" required>		
						<?php        //SEARCH FOR CATEGORIES
							$DBConnect = mysqli_connect("localhost","admin","Password1","CS_Tools");
							$SQLQuery = "SELECT DISTINCT Category FROM Parts";
							$result = mysqli_query($DBConnect, $SQLQuery);

							while ($row = mysqli_fetch_array($result)) 
							{
								echo "<option ";
								if ($row['Category'] == $Category)
								{
									echo 'selected';
								}
								echo ">" . $row['Category'] . "</option> ";
							}
						?>		
					</select>
				</td>
			</tr>
			<tr>
				<td>Warehouse:</td>
				<td> <input type="text" size=15 maxlength=15 name="Warehouse" value='<?php echo $Warehouse;?>' required/> </td>
			</tr>
			<tr>
				<td>Price:</td>
				<td> <input type="text" size=8 maxlength=8 pattern="\d+(\.\d{2})?" title="Enter a valid Price" name="Price" value='<?php echo $Price;?>' required/> </td>
			</tr>
			<tr>
				<td><input type='submit'/></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_POST['submit'])) {
			$select_val = $_POST['Category'];
			echo "<p>You have selected :" . $select_val . "</p>";
		} else {
			$select_val = NULL;
		}
	?>
</html>