<!DOCTYPE html>

<?php
	$username = "admin";
	$password = "Password1";
	
		// Connect to Database and alert if error
	$DBConnect=mysqli_connect("localhost","admin","Password1","CS_Tools");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to Database: " . mysqli_connect_error();
	}
	
	$enteredUsername = mysqli_real_escape_string($DBConnect, $_POST['username']);
	$enteredPassword = mysqli_real_escape_string($DBConnect, $_POST['password']);
	
	if ($enteredUsername == $username and $enteredPassword == $password)
	{
		$logonMessage = "Successful Logon";
		
		session_start();
		$_SESSION["username"] = $enteredUsername;
		
		header('Location: adminIndex.php');
	}
	else
	{
		$logonMessage = "Incorrect Username or Password";
	}
?>

<html>
	<head>
		<title> CS Tools </title>
		<meta charset="UTF-8" />
	</head>
   <body>
		<div id="middle">
			<section>	</body>
				<article>
					<h1> Admin Login </h1>
					<p> <?php echo $logonMessage ?> </p>
				</article>
			</section>
		</div>
	</body>
</html>