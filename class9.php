<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>class-9-php</title>
	<?php 
		
		if(isset($_POST['submit']))
		{
			
			$name 		= $_FILES['image']['name'];
			$type 		= $_FILES['image']['type'];
			$tmp_name 	= $_FILES['image']['tmp_name'];
			$error 		= $_FILES['image']['error'];
			$size 		= $_FILES['image']['size'];

			echo "The Choosen file name is: " . $name . "<br>";
			echo "And The Choosen file type is: " . $type . "<br>";
			echo "And The Choosen file size is: " . round((($size / 1024) / 1024), 2) . " MB";
		}


	?>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
	<form action="" method="POST" enctype="multipart/form-data">
		
		<label for="File">File</label>
		<br>
		<input type="file" name="image" id="image">
		<br> <br> <br>
		<input type="submit" name="submit" value="Send">
	</form>

</body>
</html>