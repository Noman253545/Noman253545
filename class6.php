<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Class-6-php</title>
</head>
<body>


<?php 
	function simpleFunction($num1, $num2)
	{
		$result = $num1 + $num2;
		return $result;
	}


 ?>
<?php $total = simpleFunction(2,2) * 2; ?>
 <h3><?php echo $total * 10; ?></h3>

<?php 
	function showTable($tableNum, $start, $end)
	{
		for($i = $start; $i <= $end; $i++)
		{
			echo $tableNum . " x ".$i." = ".$tableNum*$i;
			echo "<br>"; 
		}
	}

?>
<?php 
	showTable(7, 65, 80);
	echo $_SESSION['abc'];
 ?>
</body>
</html>