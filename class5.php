<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Class-php-5</title>
</head>
<body>
	<?php
		function h1($arg)
		{
			echo "<h1>$arg</h1>";	
		}

		function a($href, $value, $target = '_self')
		{
			echo "<a href='$href' target='$target'>$value</a>";
		}
		
		function img($src, $title, $alt, $class, $width=100)
		{
			echo '<img src="'.$src.'" title="'.$title.'" alt="'.$alt.'" class="'.$class.'" width="'.$width.'" />';
		}	
	?>
	<?php img('unsplh.jpg', 'Computers', 'This is computer pic detailsd', 'img-fluid'); ?>
	<?php a('http://inth.pk', 'Go to our website', '_blank'); ?>
	<?php h1("Welcome To Nanosoft Technologies"); ?>
	<?php h1("Jawad"); ?>
	<?php h1("Ahmed"); ?>
	<?php h1("Qureshi"); ?>
	<?php h1("Noman"); ?>
	<?php h2("unsplash.jpg"); ?>
	

    
</body>
</html>