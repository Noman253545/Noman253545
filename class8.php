<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>class-8-php</title>
</head>
<body>

	<?php 
		echo @$_GET['abc']."<br>";
		echo @$_GET['address']."<br>";

		if(isset($_GET['city']))
		{
			echo $_GET['city']."<br>";
		}
	?>

	<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

</body>
</html>