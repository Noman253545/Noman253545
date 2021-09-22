<?php 

	$db = new mysqli('localhost', 'root', '', 'learn_php');


	$sql = "INSERT INTO students (name, roll_no, course, fee) VALUES ('Ammad', 'WEB-103', 'Web Development', 5000)";
	$run = $db->query($sql);
	if($run)
	{
		echo "Student inserted successfully!";
	}else{
		echo "Something went wrong.";
		echo $db->error;
	}
?>