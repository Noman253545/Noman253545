<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>class-7-php</title>
</head>
<body>
	<?php 
		// Super Global Variables
		// 1- $_POST
		// 2- $_GET
		// 3- $_FILES
		// 4- $_SESSIONS

		if(isset($_POST['submit']))
		{
			var_dump($_POST);
		}
	?>

	<form action="" method="POST">
		<div>
			<label>Your Name:</label>
			<input type="text" name="fullname">
		</div>
		<div>
			<label>Gender:</label>
			<input type="radio" name="gender" value="m">Male
			<input type="radio" name="gender" value="f">Female
		</div>
		<div>
			<label>DOB:</label>
			<select name="dob">
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
			</select>
		</div>

		<div>
			<input type="submit" name="submit" value="submit">
		</div>
	</form>
</body>
</html>