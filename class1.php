<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Classs 1 - PHP - Variables</title>
</head>
<body>

	<?php 
		// Integer
		$num1 = 5;
		$num2 = 8;
		

		// Float
		$petrolPrice = 118.66;

		// Boolean
		$single = true;

		// String
		$instituteName = "Institute of Nanosoft Technologies";
		$fullname = "Jawad Ahmed Qureshi"; 
		$designation = "Founder";

	?>

	<h1>Welcome to <?php echo $instituteName; ?> Hyderabad</h1>
	<p>My name is <strong><?php echo $fullname; ?></strong> and i'm <strong><?php echo $designation; ?></strong> of that institute.</p>

	<footer>
		<center>
			<p>copyright &copy; <?php echo date('Y-m-d'); ?> - <?php echo $instituteName; ?> </p>
		</center>
	</footer>
</body>
</html>