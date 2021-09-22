<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>class-3-php</title>
</head>
<body>

	<?php 
		// Arrays
		// Simple Array

		$fruits = ['Apple', 'Mango', 'Peach', 'Lychee'];

		// Associative Array
		$profile = [
					'name' 			=> 'Syed Ammad Hussain',
					'professional' 	=> 'Programming',
					'age' 			=> '22',
					'address' 		=> 'Latifabad # 5',
					'city' 			=> 'Hyderabad',
					'country' 		=> 'Pakistan'
				];

	?>

	<h2>I love 2 eat <?php echo $fruits[1]; ?></h2>
	<p>My name is <?php echo $profile['name']; ?>, and I lives in <?php echo $profile['address'] . ' ' . $profile['city'] . ', ' .$profile['country']; ?>. In the age of <?php echo $profile['age']; ?> i'm still doing <?php echo $profile['professional']; ?></p>

	<?php 
		// There are 4 types of Loop in PHP
		// 1 - For Loop
		// 2 - While Loop
		// 3 - Do While Loop
		// 4 - Foreach Loop

		for ($i=1; $i <= 10; $i++) { 
			// code...
			echo "Code chalain gha " . $i . "<br>";
		}
	?>
</body>
</html>