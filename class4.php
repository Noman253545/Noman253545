<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Class-4-php</title>
</head>
<body>
	<?php 

		// While Loop
	$count  =1;
		while(false)
		{
			echo "yahooooo" . $count;
			echo "<br>";
			if($count >= 10)
			{
				break;
			}
			$count++;
		}

		$count2 = 1;
		do
		{
			echo "yahooooo" . $count2;
			echo "<br>";
			if($count2 >= 10)
			{
				break;
			}
			$count2++;
		
		}while(true);

		$fruits = ['Apple', 'Mango', 'Peach', 'Lychee'];
		foreach ($fruits as $key => $value) {
			// code...
			echo $key . " => " . $value . "<br>";
		}

		$profile = [
					'name' 			=> 'Syed Ammad Hussain',
					'professional' 	=> 'Programming',
					'age' 			=> '22',
					'address' 		=> 'Latifabad # 5',
					'city' 			=> 'Hyderabad',
					'country' 		=> 'Pakistan'
				];
		foreach ($profile as $data => $dataV) {
			// code...
			echo $data . " => " . $dataV . "<br>";
		}

	?>

</body>
</html>