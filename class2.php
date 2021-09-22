<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Class-2-php</title>
</head>
<body>

	<?php 
		$sub1 = 22;
		$sub2 = 21;
		$sub3 = 35;
		$sub4 = 38;
		$sub5 = 42;
		$sub6 = 33;

		$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6;
		//Percentage
		$percentage = ($total * 100) / 600;

		// Conditions
		if($percentage >= 90)
		{
			$grade = "A1";
		}else if($percentage >= 80)
		{
			$grade = "A";
		}else if($percentage >= 70)
		{
			$grade = "B";
		}else if($percentage >= 60)
		{
			$grade = "C";
		}else if($percentage >= 50)
		{
			$grade = "D";
		}else if($percentage >= 33)
		{
			$grade = "E";
		}else if($percentage < 33)
		{
			$grade = "Fail";
		}

	?>

	<p>The Total marks of subjects are: <strong><?php echo $total; ?></strong></p>
	<p>Your Percentage is: <strong><?php echo $percentage; ?></strong></p>
	<p>Your Grade is: <strong><?php echo $grade; ?></strong></p>


	<?php 

		// Conditions 2
		$nic = "";
		$licence = "";
		$travel = "";
		$age = 17;
		if($age >= 18)
		{
			$nic = "You are eligible for NIC";
		}
		if($age >= 21)
		{
			$licence = "You are eligible for licence";
		}
		if($age >= 32)
		{
			$travel = "You are eligible for travel abroad";
		}

	?>
		<p><?php echo $nic; ?></p>
		<p><?php echo $licence; ?></p>
		<p><?php echo $travel; ?></p>

	<?php 
		// Conditions 3
		$bill = 450;
		if($bill >= 500)
		{
			$bill = $bill + 20;
		}else{
			$bill = $bill + 0;
		}
	?>	

	<p>your total bill amount is: <?php echo $bill; ?></p>
</body>
</html>