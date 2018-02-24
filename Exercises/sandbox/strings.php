<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>Hello World</title>  
	</head>
	<body>
	<?php
		echo "Hello World<br />";
		
		$greeting = "Hello";
		$target = "World";
		$phrase = $greeting . " " . $target;
		echo $phrase;
	?>
	<br />
	<?php
		# echoing a variable inside a string only works with double-quotes
		echo "$phrase Again<br />";
		echo '$phrase Again<br />';
		# the best way to do inline replacement (in-place substitution) is by using {}:
		echo "{$phrase} Again<br />";
	?>
	</body>
</html>