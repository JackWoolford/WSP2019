<?php		//Check for logon
	session_start();
	
	if(!empty($_SESSION["username"]))
	{
		header('Location: adminIndex.php');
	}
?>
<html>
	<form action="adminLoginConfirmation.php" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td> <input type="text" name="username" required autofocus/>  </td>
			</tr>	
			<tr>
				<td>Password:</td>
				<td> <input type="password" name="password" required/> </td>
			</tr>
			<tr>
				<td><input type='submit'/></td>
			</tr>
		</table>
	<p>The logon is "admin", "Password1".</p>
	</form>
</html>