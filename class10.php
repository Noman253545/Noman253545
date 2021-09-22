<?php 
	session_start();
	if(isset($_POST['submit']))
	{
		$_SESSION['username'] = $_POST['username'];
	}

	$_SESSION['abc'] = "American Broadcast Comapny";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>class-10-php</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="username">
		<input type="submit" name="submit" value="submit">
	</form>

	
</body>
</html>