<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>CONSTANTS</title>  
	</head>
	<body>
		<?php 
			$max_width = 980;
			
			define("MAX_WIDTH", 980); # we need to pass the constant name as a string to define it
			echo MAX_WIDTH;
			 
		?><br />
		<?php # constants values can't be changed 
			// MAX_WIDTH  = MAX_WIDTH + 1;
			// echo MAX_WIDTH;
		?><br />
		
		<?php # constants values can't be redefined
			// define("MAX_WIDTH", 981);
			// echo MAX_WIDTH;
		?><br />
      
	</body>
</html>